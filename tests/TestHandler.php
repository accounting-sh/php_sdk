<?php

namespace Accounting\Test;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise as P;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

class TestHandler
{
    private ?string $method;
    private ?string $path;
    private ?string $contentType;
    private ?string $token;

    /**
     * @param string $method
     * @param string $path
     * @param string $contentType
     */
    public function __construct(?string $method = null, ?string $path = null, ?string $contentType = null, ?string $token = null)
    {
        $this->method = $method;
        $this->path = $path;
        $this->contentType = $contentType;
        $this->token = $token;
    }

    public function setToken(?string $token): void
    {
        $this->token = $token;
    }

    public function setMethod(string $method): void
    {
        $this->method = $method;
    }

    public function setPath(string $path): void
    {
        $this->path = $path;
    }

    public function setContentType(string $contentType): void
    {
        $this->contentType = $contentType;
    }

    public function __invoke(RequestInterface $request, array $options): PromiseInterface
    {
        if ($this->method !== null && $request->getMethod() !== $this->method) {
            return $this->exit($request, new Response(400, [], 'Invalid request method'), $options);
        }

        if ($this->path !== null && $request->getUri()->getPath() !== $this->path) {
            return $this->exit($request, new Response(400, [], 'Invalid path'), $options);
        }

        if ($this->contentType !== null && (!$request->hasHeader('Content-Type') || $request->getHeader('Content-Type')[0] !== $this->contentType)) {
            return $this->exit($request, new Response(400, [], 'Invalid Content-Type'), $options);
        }

        if($this->token !== null && (!$request->hasHeader('Authorization') || $request->getHeader('Authorization')[0] !== "Bearer {$this->token}")) {
            return $this->exit($request, new Response(400, [], 'Invalid authorization header'), $options);
        }

        return $this->exit($request, new Response(200), $options);
    }

    private function exit($request, $response, array $options)
    { // Code from: https://github.com/guzzle/guzzle/blob/7.8/src/Handler/MockHandler.php
        if (isset($options['on_headers'])) {
            if (!\is_callable($options['on_headers'])) {
                throw new \InvalidArgumentException('on_headers must be callable');
            }
            try {
                $options['on_headers']($response);
            } catch (\Exception $e) {
                $msg = 'An error was encountered during the on_headers event';
                $response = new RequestException($msg, $request, $response, $e);
            }
        }

        if (\is_callable($response)) {
            $response = $response($request, $options);
        }

        $response = $response instanceof \Throwable
        ? P\Create::rejectionFor($response)
        : P\Create::promiseFor($response);

        return $response->then(
            function (?ResponseInterface $value) use ($request, $options) {
                if ($value !== null && isset($options['sink'])) {
                    $contents = (string)$value->getBody();
                    $sink = $options['sink'];

                    if (\is_resource($sink)) {
                        \fwrite($sink, $contents);
                    } elseif (\is_string($sink)) {
                        \file_put_contents($sink, $contents);
                    } elseif ($sink instanceof StreamInterface) {
                        $sink->write($contents);
                    }
                }

                return $value;
            },
            function ($reason) use ($request, $options) {
                return P\Create::rejectionFor($reason);
            }
        );
    }

}
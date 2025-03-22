<?php

/**
 * AuthApi
 * PHP version 8.1
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 */

/**
 * Accounting API
 *
 * The version of the OpenAPI document: 8.0.6
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Accounting\Api;

use InvalidArgumentException;
use Accounting\Accounting;
use Accounting\ApiException;

/**
 * AuthApi Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 */
class AuthApi
{
    /**
     * @var Accounting
     */
    protected Accounting $client;

    /**
     * @param Accounting $client
     */
    public function __construct(Accounting $client)
    {
        $this->client = $client;
    }



    /**
     * Operation authInit
     *
     * Init authentication process
     *
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/authInit
     */
    public function authInit(
    ): null|string|array {



        $resourcePath = '/auth/init';
        $queryParams = [];
        $headers = [];
        $options = [];







        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("GET", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation login
     *
     * Login user
     *
     * @param  array $loginRequest loginRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/login
     */
    public function login(
        array $loginRequest,
    ): null|string|array {

        // verify the required parameter 'loginRequest' is set
        if ($loginRequest === null || (is_array($loginRequest) && count($loginRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $loginRequest when calling login'
            );
        }


        $resourcePath = '/auth/login';
        $queryParams = [];
        $headers = [];
        $options = [];




        $options['json'] = $loginRequest;



        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("POST", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation logout
     *
     * Logout current user
     *
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/logout
     */
    public function logout(
    ): null|string|array {



        $resourcePath = '/auth/logout';
        $queryParams = [];
        $headers = [];
        $options = [];







        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("GET", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation switchCompany
     *
     * Switch to a different company
     *
     * @param  array $switchCompanyRequest switchCompanyRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/switchCompany
     */
    public function switchCompany(
        array $switchCompanyRequest,
    ): null|string|array {

        // verify the required parameter 'switchCompanyRequest' is set
        if ($switchCompanyRequest === null || (is_array($switchCompanyRequest) && count($switchCompanyRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $switchCompanyRequest when calling switchCompany'
            );
        }


        $resourcePath = '/auth/switch';
        $queryParams = [];
        $headers = [];
        $options = [];




        $options['json'] = $switchCompanyRequest;



        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("POST", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

}

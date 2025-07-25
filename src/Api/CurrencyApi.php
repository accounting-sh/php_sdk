<?php

/**
 * CurrencyApi
 * PHP version 8.1
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 */

/**
 * Accounting API
 *
 * The version of the OpenAPI document: 8.3.2
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
 * CurrencyApi Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 */
class CurrencyApi
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
     * Operation getExchangeRate
     *
     * Get the latest currency exchange rate
     *
     * @param  string $from The currency to convert from (required)
     * @param  string $to The currency to convert to (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/getExchangeRate
     */
    public function getExchangeRate(
        string $from,
        string $to,
    ): null|string|array {

        // verify the required parameter 'from' is set
        if ($from === null || (is_array($from) && count($from) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $from when calling getExchangeRate'
            );
        }
        // verify the required parameter 'to' is set
        if ($to === null || (is_array($to) && count($to) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $to when calling getExchangeRate'
            );
        }


        $resourcePath = '/currency/{from}/{to}';
        $queryParams = [];
        $headers = [];
        $options = [];



        if ($from !== null) {
            $resourcePath = str_replace(
                '{' . 'from' . '}',
                rawurlencode($from),
                $resourcePath
            );
        }
        if ($to !== null) {
            $resourcePath = str_replace(
                '{' . 'to' . '}',
                rawurlencode($to),
                $resourcePath
            );
        }




        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("GET", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

}

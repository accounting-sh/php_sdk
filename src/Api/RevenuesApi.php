<?php

/**
 * RevenuesApi
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
 * RevenuesApi Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 */
class RevenuesApi
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
     * Operation addRevenue
     *
     * Add a revenue
     *
     * @param  array $addRevenueRequest addRevenueRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/addRevenue
     */
    public function addRevenue(
        array $addRevenueRequest,
    ): null|string|array {

        // verify the required parameter 'addRevenueRequest' is set
        if ($addRevenueRequest === null || (is_array($addRevenueRequest) && count($addRevenueRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $addRevenueRequest when calling addRevenue'
            );
        }


        $resourcePath = '/incomes/revenues';
        $queryParams = [];
        $headers = [];
        $options = [];




        $options['json'] = $addRevenueRequest;



        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("POST", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation deleteRevenue
     *
     * Delete a revenue
     *
     * @param  string $uuid The revenue uuid (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/deleteRevenue
     */
    public function deleteRevenue(
        string $uuid,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling deleteRevenue'
            );
        }


        $resourcePath = '/incomes/revenues/{uuid}';
        $queryParams = [];
        $headers = [];
        $options = [];



        if ($uuid !== null) {
            $resourcePath = str_replace(
                '{' . 'uuid' . '}',
                rawurlencode($uuid),
                $resourcePath
            );
        }




        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("DELETE", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation getRevenue
     *
     * Get a revenue
     *
     * @param  string $uuid The revenue uuid (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/getRevenue
     */
    public function getRevenue(
        string $uuid,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling getRevenue'
            );
        }


        $resourcePath = '/incomes/revenues/{uuid}';
        $queryParams = [];
        $headers = [];
        $options = [];



        if ($uuid !== null) {
            $resourcePath = str_replace(
                '{' . 'uuid' . '}',
                rawurlencode($uuid),
                $resourcePath
            );
        }




        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("GET", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation listRevenues
     *
     * List company&#39;s revenues
     *
     * @param  string|null $fields A comma separated list of fields requested in the response (optional)
     * @param  string|null $page The response page (optional)
     * @param  string|null $perPage The number of items per page (optional)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/listRevenues
     */
    public function listRevenues(
        string|null $fields = null,
        string|null $page = null,
        string|null $perPage = null,
    ): null|string|array {



        $resourcePath = '/incomes/revenues';
        $queryParams = [];
        $headers = [];
        $options = [];

        if ($fields !== null) {
            $queryParams['fields'] = $fields;
        }
        if ($page !== null) {
            $queryParams['page'] = $page;
        }
        if ($perPage !== null) {
            $queryParams['per_page'] = $perPage;
        }






        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("GET", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation updateRevenue
     *
     * Update a revenue
     *
     * @param  string $uuid The revenue uuid (required)
     * @param  array $addRevenueRequest addRevenueRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/updateRevenue
     */
    public function updateRevenue(
        string $uuid,
        array $addRevenueRequest,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling updateRevenue'
            );
        }
        // verify the required parameter 'addRevenueRequest' is set
        if ($addRevenueRequest === null || (is_array($addRevenueRequest) && count($addRevenueRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $addRevenueRequest when calling updateRevenue'
            );
        }


        $resourcePath = '/incomes/revenues/{uuid}';
        $queryParams = [];
        $headers = [];
        $options = [];



        if ($uuid !== null) {
            $resourcePath = str_replace(
                '{' . 'uuid' . '}',
                rawurlencode($uuid),
                $resourcePath
            );
        }

        $options['json'] = $addRevenueRequest;



        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("PUT", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

}

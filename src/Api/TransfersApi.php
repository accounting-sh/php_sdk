<?php

/**
 * TransfersApi
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
 * TransfersApi Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 */
class TransfersApi
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
     * Operation addTransfer
     *
     * Add a transfer
     *
     * @param  array $addTransferRequest addTransferRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/addTransfer
     */
    public function addTransfer(
        array $addTransferRequest,
    ): null|string|array {

        // verify the required parameter 'addTransferRequest' is set
        if ($addTransferRequest === null || (is_array($addTransferRequest) && count($addTransferRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $addTransferRequest when calling addTransfer'
            );
        }


        $resourcePath = '/transfers';
        $queryParams = [];
        $headers = [];
        $options = [];




        $options['json'] = $addTransferRequest;



        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("POST", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation deleteTransfer
     *
     * Delete a transfer
     *
     * @param  string $uuid The transfer uuid (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/deleteTransfer
     */
    public function deleteTransfer(
        string $uuid,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling deleteTransfer'
            );
        }


        $resourcePath = '/transfers/{uuid}';
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
     * Operation getTransfer
     *
     * Get a transfer
     *
     * @param  string $uuid The transfer uuid (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/getTransfer
     */
    public function getTransfer(
        string $uuid,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling getTransfer'
            );
        }


        $resourcePath = '/transfers/{uuid}';
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
     * Operation listTransfers
     *
     * List company&#39;s transfers
     *
     * @param  string|null $fields A comma separated list of fields requested in the response (optional)
     * @param  string|null $page The response page (optional)
     * @param  string|null $perPage The number of items per page (optional)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/listTransfers
     */
    public function listTransfers(
        string|null $fields = null,
        string|null $page = null,
        string|null $perPage = null,
    ): null|string|array {



        $resourcePath = '/transfers';
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
     * Operation updateTransfer
     *
     * Update a transfer
     *
     * @param  string $uuid The transfer uuid (required)
     * @param  array $addTransferRequest addTransferRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/updateTransfer
     */
    public function updateTransfer(
        string $uuid,
        array $addTransferRequest,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling updateTransfer'
            );
        }
        // verify the required parameter 'addTransferRequest' is set
        if ($addTransferRequest === null || (is_array($addTransferRequest) && count($addTransferRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $addTransferRequest when calling updateTransfer'
            );
        }


        $resourcePath = '/transfers/{uuid}';
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

        $options['json'] = $addTransferRequest;



        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("PUT", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

}

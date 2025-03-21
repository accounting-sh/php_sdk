<?php

/**
 * TransactionsApi
 * PHP version 8.1
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 */

/**
 * Accounting API
 *
 * The version of the OpenAPI document: 8.0.0
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
 * TransactionsApi Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 */
class TransactionsApi
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
     * Operation addTransaction
     *
     * Add a transaction
     *
     * @param  array $addTransactionRequest addTransactionRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/addTransaction
     */
    public function addTransaction(
        array $addTransactionRequest,
    ): null|string|array {

        // verify the required parameter 'addTransactionRequest' is set
        if ($addTransactionRequest === null || (is_array($addTransactionRequest) && count($addTransactionRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $addTransactionRequest when calling addTransaction'
            );
        }


        $resourcePath = '/transactions';
        $queryParams = [];
        $headers = [];
        $options = [];




        $options['json'] = $addTransactionRequest;



        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("POST", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation addTransactionCode
     *
     * Add a transaction&#39;s code
     *
     * @param  string $uuid The transaction uuid (required)
     * @param  array $updateTransactionCodeRequest updateTransactionCodeRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/addTransactionCode
     */
    public function addTransactionCode(
        string $uuid,
        array $updateTransactionCodeRequest,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling addTransactionCode'
            );
        }
        // verify the required parameter 'updateTransactionCodeRequest' is set
        if ($updateTransactionCodeRequest === null || (is_array($updateTransactionCodeRequest) && count($updateTransactionCodeRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $updateTransactionCodeRequest when calling addTransactionCode'
            );
        }


        $resourcePath = '/transactions/{uuid}/codes';
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

        $options['json'] = $updateTransactionCodeRequest;



        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("POST", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation deleteTransaction
     *
     * Delete a transaction
     *
     * @param  string $uuid The transaction uuid (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/deleteTransaction
     */
    public function deleteTransaction(
        string $uuid,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling deleteTransaction'
            );
        }


        $resourcePath = '/transactions/{uuid}';
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
     * Operation deleteTransactionCode
     *
     * Delete a transaction&#39;s code
     *
     * @param  string $uuid The transaction uuid (required)
     * @param  string $code The transaction&#39;s code uuid (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/deleteTransactionCode
     */
    public function deleteTransactionCode(
        string $uuid,
        string $code,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling deleteTransactionCode'
            );
        }
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $code when calling deleteTransactionCode'
            );
        }


        $resourcePath = '/transactions/{uuid}/codes/{code}';
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
        if ($code !== null) {
            $resourcePath = str_replace(
                '{' . 'code' . '}',
                rawurlencode($code),
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
     * Operation getTransaction
     *
     * Get a transaction
     *
     * @param  string $uuid The transaction uuid (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/getTransaction
     */
    public function getTransaction(
        string $uuid,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling getTransaction'
            );
        }


        $resourcePath = '/transactions/{uuid}';
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
     * Operation importTransactions
     *
     * Import transactions - INTERNAL
     *
     * @param  array $importTransactionsRequest importTransactionsRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/importTransactions
     */
    public function importTransactions(
        array $importTransactionsRequest,
    ): null|string|array {

        // verify the required parameter 'importTransactionsRequest' is set
        if ($importTransactionsRequest === null || (is_array($importTransactionsRequest) && count($importTransactionsRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $importTransactionsRequest when calling importTransactions'
            );
        }


        $resourcePath = '/transactions/import';
        $queryParams = [];
        $headers = [];
        $options = [];




        $options['json'] = $importTransactionsRequest;



        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("POST", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation listTransactionCodes
     *
     * List transaction&#39;s codes
     *
     * @param  string $uuid The transaction uuid (required)
     * @param  string|null $fields A comma separated list of fields requested in the response (optional)
     * @param  string|null $page The response page (optional)
     * @param  string|null $perPage The number of items per page (optional)
     * @param  string|null $account List to the specified account (optional)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/listTransactionCodes
     */
    public function listTransactionCodes(
        string $uuid,
        string|null $fields = null,
        string|null $page = null,
        string|null $perPage = null,
        string|null $account = null,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling listTransactionCodes'
            );
        }


        $resourcePath = '/transactions/{uuid}/codes';
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
        if ($account !== null) {
            $queryParams['account'] = $account;
        }


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
     * Operation listTransactions
     *
     * List company&#39;s transactions
     *
     * @param  string|null $fields A comma separated list of fields requested in the response (optional)
     * @param  string|null $page The response page (optional)
     * @param  string|null $perPage The number of items per page (optional)
     * @param  string|null $account List to the specified account (optional)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/listTransactions
     */
    public function listTransactions(
        string|null $fields = null,
        string|null $page = null,
        string|null $perPage = null,
        string|null $account = null,
    ): null|string|array {



        $resourcePath = '/transactions';
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
        if ($account !== null) {
            $queryParams['account'] = $account;
        }






        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("GET", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation updateTransaction
     *
     * Update a transaction
     *
     * @param  string $uuid The transaction uuid (required)
     * @param  array $addTransactionRequest addTransactionRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/updateTransaction
     */
    public function updateTransaction(
        string $uuid,
        array $addTransactionRequest,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling updateTransaction'
            );
        }
        // verify the required parameter 'addTransactionRequest' is set
        if ($addTransactionRequest === null || (is_array($addTransactionRequest) && count($addTransactionRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $addTransactionRequest when calling updateTransaction'
            );
        }


        $resourcePath = '/transactions/{uuid}';
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

        $options['json'] = $addTransactionRequest;



        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("PUT", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation updateTransactionCode
     *
     * Update a transaction&#39;s code
     *
     * @param  string $uuid The transaction uuid (required)
     * @param  array $updateTransactionCodeRequest updateTransactionCodeRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/updateTransactionCode
     */
    public function updateTransactionCode(
        string $uuid,
        array $updateTransactionCodeRequest,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling updateTransactionCode'
            );
        }
        // verify the required parameter 'updateTransactionCodeRequest' is set
        if ($updateTransactionCodeRequest === null || (is_array($updateTransactionCodeRequest) && count($updateTransactionCodeRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $updateTransactionCodeRequest when calling updateTransactionCode'
            );
        }


        $resourcePath = '/transactions/{uuid}/codes';
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

        $options['json'] = $updateTransactionCodeRequest;



        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("PUT", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

}

<?php
/**
 * AccountsApi
 * PHP version 8.1
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 */

/**
 * Accounting API
 *
 * The version of the OpenAPI document: VERSION_HERE
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
 * AccountsApi Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 */
class AccountsApi
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
     * Operation addAccount
     *
     * Add an account
     *
     * @param  array $addAccountRequest addAccountRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/addAccount
     */
    public function addAccount(
        array $addAccountRequest,
    ): null|string|array {

        // verify the required parameter 'addAccountRequest' is set
        if ($addAccountRequest === null || (is_array($addAccountRequest) && count($addAccountRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $addAccountRequest when calling addAccount'
            );
        }


        $resourcePath = '/accounts';
        $queryParams = [];
        $headers = [];
        $options = [];




        $options['json'] = $addAccountRequest;



        if(!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("POST", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation deleteAccount
     *
     * Delete an account
     *
     * @param  string $uuid The account uuid (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/deleteAccount
     */
    public function deleteAccount(
        string $uuid,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling deleteAccount'
            );
        }


        $resourcePath = '/accounts/{uuid}';
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




        if(!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("DELETE", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation getAccount
     *
     * Get an account
     *
     * @param  string $uuid The account uuid (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/getAccount
     */
    public function getAccount(
        string $uuid,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling getAccount'
            );
        }


        $resourcePath = '/accounts/{uuid}';
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




        if(!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("GET", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation listAccounts
     *
     * List company&#39;s accounts
     *
     * @param  string|null $fields A comma separated list of fields requested in the response (optional)
     * @param  string|null $page The response page (optional)
     * @param  string|null $perPage The number of items per page (optional)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/listAccounts
     */
    public function listAccounts(
        string|null $fields = null,
        string|null $page = null,
        string|null $perPage = null,
    ): null|string|array {



        $resourcePath = '/accounts';
        $queryParams = [];
        $headers = [];
        $options = [];

        if($fields !== null) {
            $queryParams['fields'] = $fields;
        }
        if($page !== null) {
            $queryParams['page'] = $page;
        }
        if($perPage !== null) {
            $queryParams['per_page'] = $perPage;
        }






        if(!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("GET", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation updateAccount
     *
     * Update an account
     *
     * @param  string $uuid The account uuid (required)
     * @param  array $addAccountRequest addAccountRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/updateAccount
     */
    public function updateAccount(
        string $uuid,
        array $addAccountRequest,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling updateAccount'
            );
        }
        // verify the required parameter 'addAccountRequest' is set
        if ($addAccountRequest === null || (is_array($addAccountRequest) && count($addAccountRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $addAccountRequest when calling updateAccount'
            );
        }


        $resourcePath = '/accounts/{uuid}';
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

        $options['json'] = $addAccountRequest;



        if(!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("PUT", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

}

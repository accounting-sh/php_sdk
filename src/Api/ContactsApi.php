<?php
/**
 * ContactsApi
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
 * ContactsApi Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 */
class ContactsApi
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
     * Operation addContact
     *
     * Create a new contact
     *
     * @param  array $addContactRequest addContactRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/addContact
     */
    public function addContact(
        array $addContactRequest,
    ): null|string|array {

        // verify the required parameter 'addContactRequest' is set
        if ($addContactRequest === null || (is_array($addContactRequest) && count($addContactRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $addContactRequest when calling addContact'
            );
        }


        $resourcePath = '/contacts';
        $queryParams = [];
        $headers = [];
        $options = [];




        $options['json'] = $addContactRequest;



        if(!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("POST", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation deleteContact
     *
     * Delete a contact
     *
     * @param  string $uuid The contact uuid (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/deleteContact
     */
    public function deleteContact(
        string $uuid,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling deleteContact'
            );
        }


        $resourcePath = '/contacts/{uuid}';
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
     * Operation getContact
     *
     * Retrieve a contact
     *
     * @param  string $uuid The contact uuid (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/getContact
     */
    public function getContact(
        string $uuid,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling getContact'
            );
        }


        $resourcePath = '/contacts/{uuid}';
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
     * Operation listContactBills
     *
     * List a contact&#39;s bills
     *
     * @param  string|null $uuid The contact uuid (optional)
     * @param  string|null $fields A comma separated list of fields requested in the response (optional)
     * @param  string|null $page The response page (optional)
     * @param  string|null $perPage The number of items per page (optional)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/listContactBills
     */
    public function listContactBills(
        string|null $uuid = null,
        string|null $fields = null,
        string|null $page = null,
        string|null $perPage = null,
    ): null|string|array {



        $resourcePath = '/contacts/{uuid}/bills';
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
     * Operation listContactInvoices
     *
     * List a contact&#39;s invoices
     *
     * @param  string $uuid The contact uuid (required)
     * @param  string|null $fields A comma separated list of fields requested in the response (optional)
     * @param  string|null $page The response page (optional)
     * @param  string|null $perPage The number of items per page (optional)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/listContactInvoices
     */
    public function listContactInvoices(
        string $uuid,
        string|null $fields = null,
        string|null $page = null,
        string|null $perPage = null,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling listContactInvoices'
            );
        }


        $resourcePath = '/contacts/{uuid}/invoices';
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
     * Operation listContacts
     *
     * List company&#39;s contacts
     *
     * @param  string|null $fields A comma separated list of fields requested in the response (optional)
     * @param  string|null $page The response page (optional)
     * @param  string|null $perPage The number of items per page (optional)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/listContacts
     */
    public function listContacts(
        string|null $fields = null,
        string|null $page = null,
        string|null $perPage = null,
    ): null|string|array {



        $resourcePath = '/contacts';
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
     * Operation updateContact
     *
     * Update a contact
     *
     * @param  string $uuid The contact uuid (required)
     * @param  array $addContactRequest addContactRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/updateContact
     */
    public function updateContact(
        string $uuid,
        array $addContactRequest,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling updateContact'
            );
        }
        // verify the required parameter 'addContactRequest' is set
        if ($addContactRequest === null || (is_array($addContactRequest) && count($addContactRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $addContactRequest when calling updateContact'
            );
        }


        $resourcePath = '/contact/{uuid}';
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

        $options['json'] = $addContactRequest;



        if(!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("PUT", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

}
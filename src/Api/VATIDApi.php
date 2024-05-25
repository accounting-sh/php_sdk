<?php
/**
 * VATIDApi
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
 * VATIDApi Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 */
class VATIDApi
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
     * Operation addCompanyVatId
     *
     * Add a company&#39;s Vat Id
     *
     * @param  array $addCompanyVatIdRequest addCompanyVatIdRequest (required)
     * @param  string|null $uuid The company uuid (optional)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/addCompanyVatId
     */
    public function addCompanyVatId(
        array $addCompanyVatIdRequest,
        string|null $uuid = null,
    ): null|string|array {

        // verify the required parameter 'addCompanyVatIdRequest' is set
        if ($addCompanyVatIdRequest === null || (is_array($addCompanyVatIdRequest) && count($addCompanyVatIdRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $addCompanyVatIdRequest when calling addCompanyVatId'
            );
        }


        $resourcePath = '/companies/{uuid}/vat';
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

        $options['json'] = $addCompanyVatIdRequest;



        if(!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("POST", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation deleteCompanyVatId
     *
     * Delete a company&#39;s Vat Id
     *
     * @param  string $key The VAT ID uuid (required)
     * @param  string|null $uuid The company uuid (optional)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/deleteCompanyVatId
     */
    public function deleteCompanyVatId(
        string $key,
        string|null $uuid = null,
    ): null|string|array {

        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $key when calling deleteCompanyVatId'
            );
        }


        $resourcePath = '/companies/{uuid}/vat/{key}';
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
        if ($key !== null) {
            $resourcePath = str_replace(
                '{' . 'key' . '}',
                rawurlencode($key),
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
     * Operation getCompanyVatId
     *
     * Get a company&#39;s Vat Id
     *
     * @param  string $key The VAT ID uuid (required)
     * @param  string|null $uuid The company uuid (optional)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/getCompanyVatId
     */
    public function getCompanyVatId(
        string $key,
        string|null $uuid = null,
    ): null|string|array {

        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $key when calling getCompanyVatId'
            );
        }


        $resourcePath = '/companies/{uuid}/vat/{key}';
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
        if ($key !== null) {
            $resourcePath = str_replace(
                '{' . 'key' . '}',
                rawurlencode($key),
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
     * Operation listCompanyVatId
     *
     * List company&#39;s Vat Id
     *
     * @param  string|null $fields A comma separated list of fields requested in the response (optional)
     * @param  string|null $page The response page (optional)
     * @param  string|null $perPage The number of items per page (optional)
     * @param  string|null $uuid The company uuid (optional)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/listCompanyVatId
     */
    public function listCompanyVatId(
        string|null $fields = null,
        string|null $page = null,
        string|null $perPage = null,
        string|null $uuid = null,
    ): null|string|array {



        $resourcePath = '/companies/{uuid}/vat';
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
     * Operation updateCompanyVatId
     *
     * Update a company&#39;s Vat Id
     *
     * @param  string $key The VAT ID uuid (required)
     * @param  array $addCompanyVatIdRequest addCompanyVatIdRequest (required)
     * @param  string|null $uuid The company uuid (optional)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/updateCompanyVatId
     */
    public function updateCompanyVatId(
        string $key,
        array $addCompanyVatIdRequest,
        string|null $uuid = null,
    ): null|string|array {

        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $key when calling updateCompanyVatId'
            );
        }
        // verify the required parameter 'addCompanyVatIdRequest' is set
        if ($addCompanyVatIdRequest === null || (is_array($addCompanyVatIdRequest) && count($addCompanyVatIdRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $addCompanyVatIdRequest when calling updateCompanyVatId'
            );
        }


        $resourcePath = '/companies/{uuid}/vat/{key}';
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
        if ($key !== null) {
            $resourcePath = str_replace(
                '{' . 'key' . '}',
                rawurlencode($key),
                $resourcePath
            );
        }

        $options['json'] = $addCompanyVatIdRequest;



        if(!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("PUT", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

}

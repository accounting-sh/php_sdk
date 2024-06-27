<?php
/**
 * SettingsApi
 * PHP version 8.1
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 */

/**
 * Accounting API
 *
 * The version of the OpenAPI document: 7.3.11
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
 * SettingsApi Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 */
class SettingsApi
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
     * Operation getSettings
     *
     * Get a company&#39;s settings
     *
     * @param  string $uuid The company uuid (required)
     * @param  string $key The setting key (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/getSettings
     */
    public function getSettings(
        string $uuid,
        string $key,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling getSettings'
            );
        }
        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $key when calling getSettings'
            );
        }


        $resourcePath = '/companies/{uuid}/settings/{key}';
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
     * Operation listSettings
     *
     * List company&#39;s settings
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
     * @link https://api.accounting.sh/swagger.html#operation/listSettings
     */
    public function listSettings(
        string|null $fields = null,
        string|null $page = null,
        string|null $perPage = null,
        string|null $uuid = null,
    ): null|string|array {



        $resourcePath = '/companies/{uuid}/settings';
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
     * Operation updateSettings
     *
     * Update a company&#39;s settings
     *
     * @param  string $uuid The company uuid (required)
     * @param  string $key The setting key (required)
     * @param  array $updateSettingsRequest updateSettingsRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/updateSettings
     */
    public function updateSettings(
        string $uuid,
        string $key,
        array $updateSettingsRequest,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling updateSettings'
            );
        }
        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $key when calling updateSettings'
            );
        }
        // verify the required parameter 'updateSettingsRequest' is set
        if ($updateSettingsRequest === null || (is_array($updateSettingsRequest) && count($updateSettingsRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $updateSettingsRequest when calling updateSettings'
            );
        }


        $resourcePath = '/companies/{uuid}/settings/{key}';
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

        $options['json'] = $updateSettingsRequest;



        if(!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("PUT", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

}

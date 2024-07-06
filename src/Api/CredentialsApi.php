<?php
/**
 * CredentialsApi
 * PHP version 8.1
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 */

/**
 * Accounting API
 *
 * The version of the OpenAPI document: 7.5.5
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
 * CredentialsApi Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 */
class CredentialsApi
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
     * Operation addCredential
     *
     * Add a credential
     *
     * @param  array $addCredentialRequest addCredentialRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/addCredential
     */
    public function addCredential(
        array $addCredentialRequest,
    ): null|string|array {

        // verify the required parameter 'addCredentialRequest' is set
        if ($addCredentialRequest === null || (is_array($addCredentialRequest) && count($addCredentialRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $addCredentialRequest when calling addCredential'
            );
        }


        $resourcePath = '/credentials';
        $queryParams = [];
        $headers = [];
        $options = [];




        $options['json'] = $addCredentialRequest;



        if(!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("POST", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation deleteCredential
     *
     * Delete a credential
     *
     * @param  string $uuid The credential uuid (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/deleteCredential
     */
    public function deleteCredential(
        string $uuid,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling deleteCredential'
            );
        }


        $resourcePath = '/credentials/{uuid}';
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
     * Operation getCredential
     *
     * Get a credential
     *
     * @param  string $uuid The credential uuid (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/getCredential
     */
    public function getCredential(
        string $uuid,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling getCredential'
            );
        }


        $resourcePath = '/credentials/{uuid}';
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
     * Operation listCredentials
     *
     * List company&#39;s credentials
     *
     * @param  string|null $fields A comma separated list of fields requested in the response (optional)
     * @param  string|null $page The response page (optional)
     * @param  string|null $perPage The number of items per page (optional)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/listCredentials
     */
    public function listCredentials(
        string|null $fields = null,
        string|null $page = null,
        string|null $perPage = null,
    ): null|string|array {



        $resourcePath = '/credentials';
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
     * Operation listPermissions
     *
     * List available permissions
     *
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/listPermissions
     */
    public function listPermissions(
    ): null|string|array {



        $resourcePath = '/credentials/permissions';
        $queryParams = [];
        $headers = [];
        $options = [];







        if(!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("GET", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation me
     *
     * Get current credential informations
     *
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/me
     */
    public function me(
    ): null|string|array {



        $resourcePath = '/me';
        $queryParams = [];
        $headers = [];
        $options = [];







        if(!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("GET", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation updateCredential
     *
     * Update a credential
     *
     * @param  string $uuid The credential uuid (required)
     * @param  array $addCredentialRequest addCredentialRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/updateCredential
     */
    public function updateCredential(
        string $uuid,
        array $addCredentialRequest,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling updateCredential'
            );
        }
        // verify the required parameter 'addCredentialRequest' is set
        if ($addCredentialRequest === null || (is_array($addCredentialRequest) && count($addCredentialRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $addCredentialRequest when calling updateCredential'
            );
        }


        $resourcePath = '/credentials/{uuid}';
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

        $options['json'] = $addCredentialRequest;



        if(!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("PUT", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation userveria
     *
     * Exchange a my stantabcorp (userveria) token for an Accounting Token
     *
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/userveria
     */
    public function userveria(
    ): null|string|array {



        $resourcePath = '/userveria';
        $queryParams = [];
        $headers = [];
        $options = [];







        if(!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("POST", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

}

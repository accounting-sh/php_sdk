<?php

/**
 * PaymentsApi
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
 * PaymentsApi Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 */
class PaymentsApi
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
     * Operation addPayment
     *
     * Add a payment
     *
     * @param  array $addPaymentRequest addPaymentRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/addPayment
     */
    public function addPayment(
        array $addPaymentRequest,
    ): null|string|array {

        // verify the required parameter 'addPaymentRequest' is set
        if ($addPaymentRequest === null || (is_array($addPaymentRequest) && count($addPaymentRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $addPaymentRequest when calling addPayment'
            );
        }


        $resourcePath = '/expenses/payments';
        $queryParams = [];
        $headers = [];
        $options = [];




        $options['json'] = $addPaymentRequest;



        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("POST", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation deletePayment
     *
     * Delete a payment
     *
     * @param  string $uuid The payment uuid (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/deletePayment
     */
    public function deletePayment(
        string $uuid,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling deletePayment'
            );
        }


        $resourcePath = '/expenses/payments/{uuid}';
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
     * Operation getPayment
     *
     * Get a payment
     *
     * @param  string $uuid The payment uuid (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/getPayment
     */
    public function getPayment(
        string $uuid,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling getPayment'
            );
        }


        $resourcePath = '/expenses/payments/{uuid}';
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
     * Operation listPayments
     *
     * List company&#39;s payments
     *
     * @param  string|null $fields A comma separated list of fields requested in the response (optional)
     * @param  string|null $page The response page (optional)
     * @param  string|null $perPage The number of items per page (optional)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/listPayments
     */
    public function listPayments(
        string|null $fields = null,
        string|null $page = null,
        string|null $perPage = null,
    ): null|string|array {



        $resourcePath = '/expenses/payments';
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
     * Operation updatePayment
     *
     * Update a payment
     *
     * @param  string $uuid The payment uuid (required)
     * @param  array $addPaymentRequest addPaymentRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/updatePayment
     */
    public function updatePayment(
        string $uuid,
        array $addPaymentRequest,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling updatePayment'
            );
        }
        // verify the required parameter 'addPaymentRequest' is set
        if ($addPaymentRequest === null || (is_array($addPaymentRequest) && count($addPaymentRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $addPaymentRequest when calling updatePayment'
            );
        }


        $resourcePath = '/expenses/payments/{uuid}';
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

        $options['json'] = $addPaymentRequest;



        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("PUT", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

}

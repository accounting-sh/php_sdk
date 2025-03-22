<?php

/**
 * BillsApi
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
 * BillsApi Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 */
class BillsApi
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
     * Operation addBill
     *
     * Add a bill
     *
     * @param  array $addBillRequest addBillRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/addBill
     */
    public function addBill(
        array $addBillRequest,
    ): null|string|array {

        // verify the required parameter 'addBillRequest' is set
        if ($addBillRequest === null || (is_array($addBillRequest) && count($addBillRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $addBillRequest when calling addBill'
            );
        }


        $resourcePath = '/expenses/bills';
        $queryParams = [];
        $headers = [];
        $options = [];




        $options['json'] = $addBillRequest;



        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("POST", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation addBillPayment
     *
     * Add a bill payment
     *
     * @param  string $uuid The bill uuid (required)
     * @param  array $addBillPaymentRequest addBillPaymentRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/addBillPayment
     */
    public function addBillPayment(
        string $uuid,
        array $addBillPaymentRequest,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling addBillPayment'
            );
        }
        // verify the required parameter 'addBillPaymentRequest' is set
        if ($addBillPaymentRequest === null || (is_array($addBillPaymentRequest) && count($addBillPaymentRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $addBillPaymentRequest when calling addBillPayment'
            );
        }


        $resourcePath = '/expenses/bills/{uuid}/payments';
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

        $options['json'] = $addBillPaymentRequest;



        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("POST", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation deleteBill
     *
     * Delete a bill
     *
     * @param  string $uuid The bill uuid (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/deleteBill
     */
    public function deleteBill(
        string $uuid,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling deleteBill'
            );
        }


        $resourcePath = '/expenses/bills/{uuid}';
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
     * Operation getBill
     *
     * Get a bill
     *
     * @param  string $uuid The bill uuid (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/getBill
     */
    public function getBill(
        string $uuid,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling getBill'
            );
        }


        $resourcePath = '/expenses/bills/{uuid}';
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
     * Operation getBillDocument
     *
     * Get a bill in PDF
     *
     * @param  string $uuid The invoice uuid (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/getBillDocument
     */
    public function getBillDocument(
        string $uuid,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling getBillDocument'
            );
        }


        $resourcePath = '/expenses/bills/{uuid}/document';
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
     * Operation listBills
     *
     * List company&#39;s bills
     *
     * @param  string|null $fields A comma separated list of fields requested in the response (optional)
     * @param  string|null $page The response page (optional)
     * @param  string|null $perPage The number of items per page (optional)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/listBills
     */
    public function listBills(
        string|null $fields = null,
        string|null $page = null,
        string|null $perPage = null,
    ): null|string|array {



        $resourcePath = '/expenses/bills';
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
     * Operation updateBill
     *
     * Update a bill
     *
     * @param  string $uuid The bill uuid (required)
     * @param  array $addBillRequest addBillRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/updateBill
     */
    public function updateBill(
        string $uuid,
        array $addBillRequest,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling updateBill'
            );
        }
        // verify the required parameter 'addBillRequest' is set
        if ($addBillRequest === null || (is_array($addBillRequest) && count($addBillRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $addBillRequest when calling updateBill'
            );
        }


        $resourcePath = '/expenses/bills/{uuid}';
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

        $options['json'] = $addBillRequest;



        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("PUT", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

    /**
     * Operation updateBillPayment
     *
     * Update a bill payment
     *
     * @param  string $uuid The bill uuid (required)
     * @param  string $payment The bill payment uuid (required)
     * @param  array $addBillPaymentRequest addBillPaymentRequest (required)
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return null|string|array
     *
     * @link https://api.accounting.sh/swagger.html#operation/updateBillPayment
     */
    public function updateBillPayment(
        string $uuid,
        string $payment,
        array $addBillPaymentRequest,
    ): null|string|array {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $uuid when calling updateBillPayment'
            );
        }
        // verify the required parameter 'payment' is set
        if ($payment === null || (is_array($payment) && count($payment) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment when calling updateBillPayment'
            );
        }
        // verify the required parameter 'addBillPaymentRequest' is set
        if ($addBillPaymentRequest === null || (is_array($addBillPaymentRequest) && count($addBillPaymentRequest) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $addBillPaymentRequest when calling updateBillPayment'
            );
        }


        $resourcePath = '/expenses/bills/{uuid}/payments/{payment}';
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
        if ($payment !== null) {
            $resourcePath = str_replace(
                '{' . 'payment' . '}',
                rawurlencode($payment),
                $resourcePath
            );
        }

        $options['json'] = $addBillPaymentRequest;



        if (!empty($headers)) {
            $options['headers'] = $headers;
        }
        $query = http_build_query($queryParams);
        return $this->client->request("PUT", $resourcePath . ($query ? "?{$query}" : ''), $options);
    }

}

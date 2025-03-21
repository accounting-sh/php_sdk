<?php

/**
 * PaymentsApiTest
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
 */

namespace Accounting\Test\Api;

use Accounting\ApiException;
use PHPUnit\Framework\TestCase;
use Accounting\Accounting;
use GuzzleHttp\HandlerStack;
use Accounting\Test\TestHandler;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\UsesClass;
use Accounting\Api\PaymentsApi;

/**
 * PaymentsApiTest Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 *
 * @covers PaymentsApi
 * @uses Accounting
 */
class PaymentsApiTest extends TestCase
{
    /**
     * Test case for addPayment
     *
     * Add a payment.
     *
     */
    public function testAddPayment()
    {
        $path = "/expenses/payments";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("POST", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->payments()->addPayment(["test" => true], ));
    }

    /**
     * Test case for deletePayment
     *
     * Delete a payment.
     *
     */
    public function testDeletePayment()
    {
        $path = "/expenses/payments/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("DELETE", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->payments()->deletePayment('uuid_example', ));
    }

    /**
     * Test case for getPayment
     *
     * Get a payment.
     *
     */
    public function testGetPayment()
    {
        $path = "/expenses/payments/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->payments()->getPayment('uuid_example', ));
    }

    /**
     * Test case for listPayments
     *
     * List company's payments.
     *
     */
    public function testListPayments()
    {
        $path = "/expenses/payments";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->payments()->listPayments('fields_example', 'page_example', 'perPage_example', ));
    }

    /**
     * Test case for updatePayment
     *
     * Update a payment.
     *
     */
    public function testUpdatePayment()
    {
        $path = "/expenses/payments/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("PUT", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->payments()->updatePayment('uuid_example', ["test" => true], ));
    }
}

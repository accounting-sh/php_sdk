<?php

/**
 * RevenuesApiTest
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
 */

namespace Accounting\Test\Api;

use Accounting\ApiException;
use PHPUnit\Framework\TestCase;
use Accounting\Accounting;
use GuzzleHttp\HandlerStack;
use Accounting\Test\TestHandler;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\UsesClass;
use Accounting\Api\RevenuesApi;

/**
 * RevenuesApiTest Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 *
 * @covers RevenuesApi
 * @uses Accounting
 */
class RevenuesApiTest extends TestCase
{
    /**
     * Test case for addRevenue
     *
     * Add a revenue.
     *
     */
    public function testAddRevenue()
    {
        $path = "/incomes/revenues";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("POST", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->revenues()->addRevenue(["test" => true], ));
    }

    /**
     * Test case for deleteRevenue
     *
     * Delete a revenue.
     *
     */
    public function testDeleteRevenue()
    {
        $path = "/incomes/revenues/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("DELETE", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->revenues()->deleteRevenue('uuid_example', ));
    }

    /**
     * Test case for getRevenue
     *
     * Get a revenue.
     *
     */
    public function testGetRevenue()
    {
        $path = "/incomes/revenues/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->revenues()->getRevenue('uuid_example', ));
    }

    /**
     * Test case for listRevenues
     *
     * List company's revenues.
     *
     */
    public function testListRevenues()
    {
        $path = "/incomes/revenues";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->revenues()->listRevenues('fields_example', 'page_example', 'perPage_example', ));
    }

    /**
     * Test case for updateRevenue
     *
     * Update a revenue.
     *
     */
    public function testUpdateRevenue()
    {
        $path = "/incomes/revenues/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("PUT", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->revenues()->updateRevenue('uuid_example', ["test" => true], ));
    }
}

<?php
/**
 * ReceiptsApiTest
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
 */

namespace Accounting\Test\Api;

use Accounting\ApiException;
use PHPUnit\Framework\TestCase;
use Accounting\Accounting;
use GuzzleHttp\HandlerStack;
use Accounting\Test\TestHandler;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\UsesClass;
use Accounting\Api\ReceiptsApi;

/**
 * ReceiptsApiTest Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 *
 * @covers ReceiptsApi
 * @uses Accounting
 */
class ReceiptsApiTest extends TestCase
{
    /**
     * Test case for addReceipt
     *
     * Add a receipt.
     *
     */
    public function testAddReceipt()
    {
        $path = "/receipts";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("POST", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->receipts()->addReceipt(["test" => true], ));
    }

    /**
     * Test case for deleteReceipt
     *
     * Delete a receipt.
     *
     */
    public function testDeleteReceipt()
    {
        $path = "/receipts/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("DELETE", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->receipts()->deleteReceipt('uuid_example', ));
    }

    /**
     * Test case for getReceipt
     *
     * Get a receipt.
     *
     */
    public function testGetReceipt()
    {
        $path = "/receipts/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->receipts()->getReceipt('uuid_example', ));
    }

    /**
     * Test case for getReceiptDocument
     *
     * Get a receipt in PDF.
     *
     */
    public function testGetReceiptDocument()
    {
        $path = "/receipts/{uuid}/document";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->receipts()->getReceiptDocument('uuid_example', ));
    }

    /**
     * Test case for listReceipts
     *
     * List company's receipts.
     *
     */
    public function testListReceipts()
    {
        $path = "/receipts";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->receipts()->listReceipts('fields_example', 'page_example', 'perPage_example', ));
    }

    /**
     * Test case for updateReceipt
     *
     * Update a receipt.
     *
     */
    public function testUpdateReceipt()
    {
        $path = "/receipts/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("PUT", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->receipts()->updateReceipt('uuid_example', ["test" => true], ));
    }
}
<?php
/**
 * InvoicesApiTest
 * PHP version 8.1
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 */

/**
 * Accounting API
 *
 * The version of the OpenAPI document: 7.5.10
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
use Accounting\Api\InvoicesApi;

/**
 * InvoicesApiTest Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 *
 * @covers InvoicesApi
 * @uses Accounting
 */
class InvoicesApiTest extends TestCase
{
    /**
     * Test case for addInvoice
     *
     * Add an invoice.
     *
     */
    public function testAddInvoice()
    {
        $path = "/incomes/invoices";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("POST", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->invoices()->addInvoice(["test" => true], ));
    }

    /**
     * Test case for addInvoicePayment
     *
     * Add an invoice payment.
     *
     */
    public function testAddInvoicePayment()
    {
        $path = "/incomes/invoices/{uuid}/payments";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("POST", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->invoices()->addInvoicePayment('uuid_example', ["test" => true], ));
    }

    /**
     * Test case for deleteInvoice
     *
     * Delete an invoice.
     *
     */
    public function testDeleteInvoice()
    {
        $path = "/incomes/invoices/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("DELETE", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->invoices()->deleteInvoice('uuid_example', ));
    }

    /**
     * Test case for getInvoice
     *
     * Get an invoice.
     *
     */
    public function testGetInvoice()
    {
        $path = "/incomes/invoices/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->invoices()->getInvoice('uuid_example', ));
    }

    /**
     * Test case for getInvoiceDocument
     *
     * Get an invoice in PDF.
     *
     */
    public function testGetInvoiceDocument()
    {
        $path = "/incomes/invoices/{uuid}/document";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->invoices()->getInvoiceDocument('uuid_example', ));
    }

    /**
     * Test case for listInvoices
     *
     * List company's invoices.
     *
     */
    public function testListInvoices()
    {
        $path = "/incomes/invoices";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->invoices()->listInvoices('fields_example', 'page_example', 'perPage_example', ));
    }

    /**
     * Test case for listUnpaidInvoices
     *
     * List company's unpaid invoices.
     *
     */
    public function testListUnpaidInvoices()
    {
        $path = "/incomes/invoices/unpaid";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->invoices()->listUnpaidInvoices());
    }

    /**
     * Test case for updateInvoice
     *
     * Update an invoice.
     *
     */
    public function testUpdateInvoice()
    {
        $path = "/incomes/invoices/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("PUT", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->invoices()->updateInvoice('uuid_example', ["test" => true], ));
    }

    /**
     * Test case for updateInvoicePayment
     *
     * Update an invoice payment.
     *
     */
    public function testUpdateInvoicePayment()
    {
        $path = "/incomes/invoices/{uuid}/payments/{payment}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);
        $path = str_replace('{' . 'payment' . '}', 'payment_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("PUT", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->invoices()->updateInvoicePayment('uuid_example', 'payment_example', ["test" => true], ));
    }
}

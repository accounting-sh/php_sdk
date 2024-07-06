<?php
/**
 * QuotesApiTest
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
 */

namespace Accounting\Test\Api;

use Accounting\ApiException;
use PHPUnit\Framework\TestCase;
use Accounting\Accounting;
use GuzzleHttp\HandlerStack;
use Accounting\Test\TestHandler;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\UsesClass;
use Accounting\Api\QuotesApi;

/**
 * QuotesApiTest Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 *
 * @covers QuotesApi
 * @uses Accounting
 */
class QuotesApiTest extends TestCase
{
    /**
     * Test case for addQuote
     *
     * Add a quote.
     *
     */
    public function testAddQuote()
    {
        $path = "/quotes";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("POST", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->quotes()->addQuote(["test" => true], ));
    }

    /**
     * Test case for deleteQuote
     *
     * Delete a quote.
     *
     */
    public function testDeleteQuote()
    {
        $path = "/quotes/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("DELETE", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->quotes()->deleteQuote('uuid_example', ));
    }

    /**
     * Test case for getQuote
     *
     * Get a quote.
     *
     */
    public function testGetQuote()
    {
        $path = "/quotes/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->quotes()->getQuote('uuid_example', ));
    }

    /**
     * Test case for getQuoteDocument
     *
     * Get a quote in PDF.
     *
     */
    public function testGetQuoteDocument()
    {
        $path = "/quotes/{uuid}/document";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->quotes()->getQuoteDocument('uuid_example', ));
    }

    /**
     * Test case for listQuotes
     *
     * List company's quotes.
     *
     */
    public function testListQuotes()
    {
        $path = "/quotes";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->quotes()->listQuotes('fields_example', 'page_example', 'perPage_example', ));
    }

    /**
     * Test case for updateQuote
     *
     * Update a quote.
     *
     */
    public function testUpdateQuote()
    {
        $path = "/quotes/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("PUT", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->quotes()->updateQuote('uuid_example', ["test" => true], ));
    }
}

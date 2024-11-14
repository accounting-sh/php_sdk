<?php
/**
 * VATIDApiTest
 * PHP version 8.1
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 */

/**
 * Accounting API
 *
 * The version of the OpenAPI document: 7.5.8
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
use Accounting\Api\VATIDApi;

/**
 * VATIDApiTest Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 *
 * @covers VATIDApi
 * @uses Accounting
 */
class VATIDApiTest extends TestCase
{
    /**
     * Test case for addCompanyVatId
     *
     * Add a company's Vat Id.
     *
     */
    public function testAddCompanyVatId()
    {
        $path = "/companies/{uuid}/vat";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("POST", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->vATID()->addCompanyVatId(["test" => true], 'uuid_example', ));
    }

    /**
     * Test case for deleteCompanyVatId
     *
     * Delete a company's Vat Id.
     *
     */
    public function testDeleteCompanyVatId()
    {
        $path = "/companies/{uuid}/vat/{key}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);
        $path = str_replace('{' . 'key' . '}', 'key_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("DELETE", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->vATID()->deleteCompanyVatId('key_example', 'uuid_example', ));
    }

    /**
     * Test case for getCompanyVatId
     *
     * Get a company's Vat Id.
     *
     */
    public function testGetCompanyVatId()
    {
        $path = "/companies/{uuid}/vat/{key}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);
        $path = str_replace('{' . 'key' . '}', 'key_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->vATID()->getCompanyVatId('key_example', 'uuid_example', ));
    }

    /**
     * Test case for listCompanyVatId
     *
     * List company's Vat Id.
     *
     */
    public function testListCompanyVatId()
    {
        $path = "/companies/{uuid}/vat";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->vATID()->listCompanyVatId('fields_example', 'page_example', 'perPage_example', 'uuid_example', ));
    }

    /**
     * Test case for updateCompanyVatId
     *
     * Update a company's Vat Id.
     *
     */
    public function testUpdateCompanyVatId()
    {
        $path = "/companies/{uuid}/vat/{key}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);
        $path = str_replace('{' . 'key' . '}', 'key_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("PUT", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->vATID()->updateCompanyVatId('key_example', ["test" => true], 'uuid_example', ));
    }
}

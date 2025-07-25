<?php

/**
 * CompaniesApiTest
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
use Accounting\Api\CompaniesApi;

/**
 * CompaniesApiTest Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 *
 * @covers CompaniesApi
 * @uses Accounting
 */
class CompaniesApiTest extends TestCase
{
    /**
     * Test case for addCompany
     *
     * Add a company.
     *
     */
    public function testAddCompany()
    {
        $path = "/companies";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("POST", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->companies()->addCompany(["test" => true], ));
    }

    /**
     * Test case for deleteCompany
     *
     * Delete a company.
     *
     */
    public function testDeleteCompany()
    {
        $path = "/companies/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("DELETE", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->companies()->deleteCompany('uuid_example', ));
    }

    /**
     * Test case for getCompany
     *
     * Get a company.
     *
     */
    public function testGetCompany()
    {
        $path = "/companies/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->companies()->getCompany('uuid_example', ));
    }

    /**
     * Test case for getCompanyCustomization
     *
     * Get a company's customization parameters.
     *
     */
    public function testGetCompanyCustomization()
    {
        $path = "/companies/{uuid}/customization";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->companies()->getCompanyCustomization('uuid_example', ));
    }

    /**
     * Test case for getCompanyFeatureSet
     *
     * List a company's feature set.
     *
     */
    public function testGetCompanyFeatureSet()
    {
        $path = "/companies/{uuid}/features";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->companies()->getCompanyFeatureSet('uuid_example', ));
    }

    /**
     * Test case for listCompanies
     *
     * List companies on this instance.
     *
     */
    public function testListCompanies()
    {
        $path = "/companies";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->companies()->listCompanies('fields_example', 'page_example', 'perPage_example', ));
    }

    /**
     * Test case for updateCompany
     *
     * Update a company.
     *
     */
    public function testUpdateCompany()
    {
        $path = "/companies/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("PUT", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->companies()->updateCompany('uuid_example', ["test" => true], ));
    }
}

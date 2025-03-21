<?php

/**
 * TaxApiTest
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
use Accounting\Api\TaxApi;

/**
 * TaxApiTest Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 *
 * @covers TaxApi
 * @uses Accounting
 */
class TaxApiTest extends TestCase
{
    /**
     * Test case for getTaxRate
     *
     * Get the latest tax rate for a country.
     *
     */
    public function testGetTaxRate()
    {
        $path = "/tax/{country}";
        $path = str_replace('{' . 'country' . '}', 'country_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->tax()->getTaxRate('country_example', ));
    }

    /**
     * Test case for verifyVatId
     *
     * Verify a VAT ID.
     *
     */
    public function testVerifyVatId()
    {
        $path = "/vat/verify/{number}";
        $path = str_replace('{' . 'number' . '}', 'number_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->tax()->verifyVatId('number_example', ));
    }
}

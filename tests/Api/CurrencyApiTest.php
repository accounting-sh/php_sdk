<?php
/**
 * CurrencyApiTest
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
use Accounting\Api\CurrencyApi;

/**
 * CurrencyApiTest Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 *
 * @covers CurrencyApi
 * @uses Accounting
 */
class CurrencyApiTest extends TestCase
{
    /**
     * Test case for getExchangeRate
     *
     * Get the latest currency exchange rate.
     *
     */
    public function testGetExchangeRate()
    {
        $path = "/currency/{from}/{to}";
        $path = str_replace('{' . 'from' . '}', 'from_example', $path);
        $path = str_replace('{' . 'to' . '}', 'to_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->currency()->getExchangeRate('from_example', 'to_example', ));
    }
}

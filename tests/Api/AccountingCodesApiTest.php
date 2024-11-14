<?php
/**
 * AccountingCodesApiTest
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
use Accounting\Api\AccountingCodesApi;

/**
 * AccountingCodesApiTest Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 *
 * @covers AccountingCodesApi
 * @uses Accounting
 */
class AccountingCodesApiTest extends TestCase
{
    /**
     * Test case for addAccountingCode
     *
     * Add an accounting code.
     *
     */
    public function testAddAccountingCode()
    {
        $path = "/accounting/codes";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("POST", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->accountingCodes()->addAccountingCode(["test" => true], ));
    }

    /**
     * Test case for deleteAccountingCode
     *
     * Delete an accounting code.
     *
     */
    public function testDeleteAccountingCode()
    {
        $path = "/accounting/codes/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("DELETE", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->accountingCodes()->deleteAccountingCode('uuid_example', ));
    }

    /**
     * Test case for getAccountingCode
     *
     * Get an accounting code.
     *
     */
    public function testGetAccountingCode()
    {
        $path = "/accounting/codes/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->accountingCodes()->getAccountingCode('uuid_example', ));
    }

    /**
     * Test case for listAccountingCodes
     *
     * List company's accounting code.
     *
     */
    public function testListAccountingCodes()
    {
        $path = "/accounting/codes";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->accountingCodes()->listAccountingCodes());
    }

    /**
     * Test case for updateAccountingCode
     *
     * Update an accounting code.
     *
     */
    public function testUpdateAccountingCode()
    {
        $path = "/accounting/codes/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("PUT", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->accountingCodes()->updateAccountingCode('uuid_example', ["test" => true], ));
    }
}

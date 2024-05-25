<?php
/**
 * ExpenseReportsApiTest
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
use Accounting\Api\ExpenseReportsApi;

/**
 * ExpenseReportsApiTest Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 *
 * @covers ExpenseReportsApi
 * @uses Accounting
 */
class ExpenseReportsApiTest extends TestCase
{
    /**
     * Test case for addExpenseReport
     *
     * Add an expense report.
     *
     */
    public function testAddExpenseReport()
    {
        $path = "/expenses/expense-reports";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("POST", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->expenseReports()->addExpenseReport(["test" => true], ));
    }

    /**
     * Test case for deleteExpenseReport
     *
     * Delete an expense report.
     *
     */
    public function testDeleteExpenseReport()
    {
        $path = "/expenses/expense-reports/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("DELETE", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->expenseReports()->deleteExpenseReport('uuid_example', ));
    }

    /**
     * Test case for expenseReportOAuthLogin
     *
     * OAuth Login.
     *
     */
    public function testExpenseReportOAuthLogin()
    {
        $path = "/expenses/expense-reports/login/{method}";
        $path = str_replace('{' . 'method' . '}', 'method_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->expenseReports()->expenseReportOAuthLogin('method_example', ));
    }

    /**
     * Test case for getExpenseReport
     *
     * Get an expense report.
     *
     */
    public function testGetExpenseReport()
    {
        $path = "/expenses/expense-reports/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->expenseReports()->getExpenseReport('uuid_example', ));
    }

    /**
     * Test case for getExpenseReportAccount
     *
     * Get the currently connected expense report user details.
     *
     */
    public function testGetExpenseReportAccount()
    {
        $path = "/expenses/expense-reports/me";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->expenseReports()->getExpenseReportAccount());
    }

    /**
     * Test case for getExpenseReportUser
     *
     * Get an user details.
     *
     */
    public function testGetExpenseReportUser()
    {
        $path = "/expenses/expense-reports/users/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->expenseReports()->getExpenseReportUser('uuid_example', ));
    }

    /**
     * Test case for listExpenseReports
     *
     * List company's expense reports..
     *
     */
    public function testListExpenseReports()
    {
        $path = "/expenses/expense-reports";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->expenseReports()->listExpenseReports('fields_example', 'page_example', 'perPage_example', ));
    }

    /**
     * Test case for sendExpenseReportLoginEmail
     *
     * Request login email.
     *
     */
    public function testSendExpenseReportLoginEmail()
    {
        $path = "/expenses/expense-reports/login";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("POST", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->expenseReports()->sendExpenseReportLoginEmail(["test" => true], ));
    }

    /**
     * Test case for updateExpenseReport
     *
     * Update an expense report.
     *
     */
    public function testUpdateExpenseReport()
    {
        $path = "/expenses/expense-reports/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("PUT", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->expenseReports()->updateExpenseReport('uuid_example', ["test" => true], ));
    }

    /**
     * Test case for updateExpenseReportAccount
     *
     * Update the currently connected expense report user.
     *
     */
    public function testUpdateExpenseReportAccount()
    {
        $path = "/expenses/expense-reports/me";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("PUT", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->expenseReports()->updateExpenseReportAccount(["test" => true], ));
    }

    /**
     * Test case for updateExpenseReportSettings
     *
     * Retrieve company settings for expense reports.
     *
     */
    public function testUpdateExpenseReportSettings()
    {
        $path = "/expenses/expense-reports/settings";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("POST", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->expenseReports()->updateExpenseReportSettings(["test" => true], ));
    }

    /**
     * Test case for verifyExpenseReportSettings
     *
     * Verify expense reports settings.
     *
     */
    public function testVerifyExpenseReportSettings()
    {
        $path = "/expenses/expense-reports/verify";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("POST", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->expenseReports()->verifyExpenseReportSettings(["test" => true], ));
    }
}

<?php
/**
 * NotificationApiTest
 * PHP version 8.1
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 */

/**
 * Accounting API
 *
 * The version of the OpenAPI document: 7.3.11
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
use Accounting\Api\NotificationApi;

/**
 * NotificationApiTest Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 *
 * @covers NotificationApi
 * @uses Accounting
 */
class NotificationApiTest extends TestCase
{
    /**
     * Test case for listNotificationPreferences
     *
     * List notification preferences.
     *
     */
    public function testListNotificationPreferences()
    {
        $path = "/notifications/preferences/{notification}";
        $path = str_replace('{' . 'notification' . '}', 'notification_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->notification()->listNotificationPreferences('notification_example', ));
    }

    /**
     * Test case for listNotifications
     *
     * List company's notifications.
     *
     */
    public function testListNotifications()
    {
        $path = "/notifications";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->notification()->listNotifications('fields_example', 'page_example', 'perPage_example', ));
    }

    /**
     * Test case for sendNotification
     *
     * Send a notification.
     *
     */
    public function testSendNotification()
    {
        $path = "/notifications/send";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("POST", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->notification()->sendNotification(["test" => true], ));
    }

    /**
     * Test case for updateNotificationPreferences
     *
     * Update notification preferences.
     *
     */
    public function testUpdateNotificationPreferences()
    {
        $path = "/notifications/preferences/{notification}";
        $path = str_replace('{' . 'notification' . '}', 'notification_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("PUT", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->notification()->updateNotificationPreferences('notification_example', ["test" => true], ));
    }
}

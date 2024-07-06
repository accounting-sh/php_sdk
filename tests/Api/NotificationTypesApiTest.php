<?php
/**
 * NotificationTypesApiTest
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
use Accounting\Api\NotificationTypesApi;

/**
 * NotificationTypesApiTest Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 *
 * @covers NotificationTypesApi
 * @uses Accounting
 */
class NotificationTypesApiTest extends TestCase
{
    /**
     * Test case for addNotificationType
     *
     * Add a notification type.
     *
     */
    public function testAddNotificationType()
    {
        $path = "/notifications/types";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("POST", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->notificationTypes()->addNotificationType(["test" => true], ));
    }

    /**
     * Test case for deleteNotificationType
     *
     * Delete a notification type.
     *
     */
    public function testDeleteNotificationType()
    {
        $path = "/notifications/types/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("DELETE", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->notificationTypes()->deleteNotificationType('uuid_example', ));
    }

    /**
     * Test case for getNotificationType
     *
     * Get a notification type.
     *
     */
    public function testGetNotificationType()
    {
        $path = "/notifications/types/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->notificationTypes()->getNotificationType('uuid_example', ));
    }

    /**
     * Test case for listNotificationTypes
     *
     * List company's notification types.
     *
     */
    public function testListNotificationTypes()
    {
        $path = "/notifications/types";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->notificationTypes()->listNotificationTypes('fields_example', 'page_example', 'perPage_example', ));
    }

    /**
     * Test case for updateNotificationType
     *
     * Update a notification type.
     *
     */
    public function testUpdateNotificationType()
    {
        $path = "/notifications/types/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("PUT", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->notificationTypes()->updateNotificationType('uuid_example', ["test" => true], ));
    }
}

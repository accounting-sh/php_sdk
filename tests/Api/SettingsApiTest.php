<?php
/**
 * SettingsApiTest
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
use Accounting\Api\SettingsApi;

/**
 * SettingsApiTest Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 *
 * @covers SettingsApi
 * @uses Accounting
 */
class SettingsApiTest extends TestCase
{
    /**
     * Test case for getSettings
     *
     * Get a company's settings.
     *
     */
    public function testGetSettings()
    {
        $path = "/companies/{uuid}/settings/{key}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);
        $path = str_replace('{' . 'key' . '}', 'key_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->settings()->getSettings('uuid_example', 'key_example', ));
    }

    /**
     * Test case for listSettings
     *
     * List company's settings.
     *
     */
    public function testListSettings()
    {
        $path = "/companies/{uuid}/settings";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->settings()->listSettings('fields_example', 'page_example', 'perPage_example', 'uuid_example', ));
    }

    /**
     * Test case for updateSettings
     *
     * Update a company's settings.
     *
     */
    public function testUpdateSettings()
    {
        $path = "/companies/{uuid}/settings/{key}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);
        $path = str_replace('{' . 'key' . '}', 'key_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("PUT", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->settings()->updateSettings('uuid_example', 'key_example', ["test" => true], ));
    }
}

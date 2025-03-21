<?php

/**
 * OAuthConfigApiTest
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
use Accounting\Api\OAuthConfigApi;

/**
 * OAuthConfigApiTest Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 *
 * @covers OAuthConfigApi
 * @uses Accounting
 */
class OAuthConfigApiTest extends TestCase
{
    /**
     * Test case for addOAuthConfiguration
     *
     * Add an OAuth configuration.
     *
     */
    public function testAddOAuthConfiguration()
    {
        $path = "/oauth";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("POST", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->oAuthConfig()->addOAuthConfiguration(["test" => true], ));
    }

    /**
     * Test case for deleteOAuthConfiguration
     *
     * Delete an oauth configuration.
     *
     */
    public function testDeleteOAuthConfiguration()
    {
        $path = "/oauth/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("DELETE", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->oAuthConfig()->deleteOAuthConfiguration('uuid_example', ));
    }

    /**
     * Test case for getOAuthConfiguration
     *
     * Get an OAuth configuration.
     *
     */
    public function testGetOAuthConfiguration()
    {
        $path = "/oauth/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->oAuthConfig()->getOAuthConfiguration('uuid_example', ));
    }

    /**
     * Test case for listOAuthConfigurations
     *
     * List company's oauth configurations.
     *
     */
    public function testListOAuthConfigurations()
    {
        $path = "/oauth";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->oAuthConfig()->listOAuthConfigurations('fields_example', 'page_example', 'perPage_example', ));
    }

    /**
     * Test case for listProviders
     *
     * List available providers.
     *
     */
    public function testListProviders()
    {
        $path = "/oauth/providers";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->oAuthConfig()->listProviders());
    }

    /**
     * Test case for updateOAuthConfiguration
     *
     * Update an oauth configuration.
     *
     */
    public function testUpdateOAuthConfiguration()
    {
        $path = "/oauth/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("PUT", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->oAuthConfig()->updateOAuthConfiguration('uuid_example', ["test" => true], ));
    }
}

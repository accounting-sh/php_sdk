<?php
/**
 * CredentialsApiTest
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
use Accounting\Api\CredentialsApi;

/**
 * CredentialsApiTest Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 *
 * @covers CredentialsApi
 * @uses Accounting
 */
class CredentialsApiTest extends TestCase
{
    /**
     * Test case for addCredential
     *
     * Add a credential.
     *
     */
    public function testAddCredential()
    {
        $path = "/credentials";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("POST", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->credentials()->addCredential(["test" => true], ));
    }

    /**
     * Test case for deleteCredential
     *
     * Delete a credential.
     *
     */
    public function testDeleteCredential()
    {
        $path = "/credentials/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("DELETE", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->credentials()->deleteCredential('uuid_example', ));
    }

    /**
     * Test case for getCredential
     *
     * Get a credential.
     *
     */
    public function testGetCredential()
    {
        $path = "/credentials/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->credentials()->getCredential('uuid_example', ));
    }

    /**
     * Test case for listCredentials
     *
     * List company's credentials.
     *
     */
    public function testListCredentials()
    {
        $path = "/credentials";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->credentials()->listCredentials('fields_example', 'page_example', 'perPage_example', ));
    }

    /**
     * Test case for listPermissions
     *
     * List available permissions.
     *
     */
    public function testListPermissions()
    {
        $path = "/credentials/permissions";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->credentials()->listPermissions());
    }

    /**
     * Test case for me
     *
     * Get current credential informations.
     *
     */
    public function testMe()
    {
        $path = "/me";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->credentials()->me());
    }

    /**
     * Test case for updateCredential
     *
     * Update a credential.
     *
     */
    public function testUpdateCredential()
    {
        $path = "/credentials/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("PUT", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->credentials()->updateCredential('uuid_example', ["test" => true], ));
    }

    /**
     * Test case for userveria
     *
     * Exchange a my stantabcorp (userveria) token for an Accounting Token.
     *
     */
    public function testUserveria()
    {
        $path = "/userveria";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("POST", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->credentials()->userveria());
    }
}

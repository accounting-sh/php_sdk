<?php

/**
 * UsersApiTest
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
use Accounting\Api\UsersApi;

/**
 * UsersApiTest Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 *
 * @covers UsersApi
 * @uses Accounting
 */
class UsersApiTest extends TestCase
{
    /**
     * Test case for addUser
     *
     * Add user.
     *
     */
    public function testAddUser()
    {
        $path = "/users";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("POST", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->users()->addUser(["test" => true], ));
    }

    /**
     * Test case for deleteUser
     *
     * Delete user.
     *
     */
    public function testDeleteUser()
    {
        $path = "/users/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("DELETE", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->users()->deleteUser('uuid_example', ));
    }

    /**
     * Test case for getUser
     *
     * View user.
     *
     */
    public function testGetUser()
    {
        $path = "/users/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->users()->getUser('uuid_example', ));
    }

    /**
     * Test case for listUsers
     *
     * List company's users.
     *
     */
    public function testListUsers()
    {
        $path = "/users";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->users()->listUsers('fields_example', 'page_example', 'perPage_example', ));
    }

    /**
     * Test case for updateUser
     *
     * Update user.
     *
     */
    public function testUpdateUser()
    {
        $path = "/users/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("PUT", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->users()->updateUser('uuid_example', ["test" => true], ));
    }

    /**
     * Test case for usersCompanies
     *
     * List current user companies.
     *
     */
    public function testUsersCompanies()
    {
        $path = "/users/me/companies";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->users()->usersCompanies());
    }

    /**
     * Test case for usersMe
     *
     * View current user details.
     *
     */
    public function testUsersMe()
    {
        $path = "/users/me";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->users()->usersMe());
    }
}

<?php
/**
 * AttachmentsApiTest
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
use Accounting\Api\AttachmentsApi;

/**
 * AttachmentsApiTest Class Doc Comment
 *
 * @package  Accounting
 * @author   STAN-TAB CORP. LTD
 * @link     https://accounting.sh
 *
 * @covers AttachmentsApi
 * @uses Accounting
 */
class AttachmentsApiTest extends TestCase
{
    /**
     * Test case for addAttachment
     *
     * Add an attachment.
     *
     */
    public function testAddAttachment()
    {
        $path = "/attachments";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("POST", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->attachments()->addAttachment(["test" => true], ));
    }

    /**
     * Test case for deleteAttachment
     *
     * Delete an attachment.
     *
     */
    public function testDeleteAttachment()
    {
        $path = "/attachments/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("DELETE", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->attachments()->deleteAttachment('uuid_example', ));
    }

    /**
     * Test case for getAttachment
     *
     * Get an attachment.
     *
     */
    public function testGetAttachment()
    {
        $path = "/attachments/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->attachments()->getAttachment('uuid_example', ));
    }

    /**
     * Test case for listAttachments
     *
     * List company's attachments.
     *
     */
    public function testListAttachments()
    {
        $path = "/attachments";

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->attachments()->listAttachments('fields_example', 'page_example', 'perPage_example', ));
    }

    /**
     * Test case for retrieveAttachments
     *
     * List company's attachments link to resource.
     *
     */
    public function testRetrieveAttachments()
    {
        $path = "/attachments/resource/{resource}";
        $path = str_replace('{' . 'resource' . '}', 'resource_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("GET", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->attachments()->retrieveAttachments('resource_example', 'fields_example', 'page_example', 'perPage_example', ));
    }

    /**
     * Test case for updateAttachment
     *
     * Update an attachment.
     *
     */
    public function testUpdateAttachment()
    {
        $path = "/attachments/{uuid}";
        $path = str_replace('{' . 'uuid' . '}', 'uuid_example', $path);

        $api = new Accounting("fake-token", options: [
            'handler' => HandlerStack::create(new TestHandler("PUT", $path, null, "fake-token"))
        ]);
        $this->assertNotNull($api->attachments()->updateAttachment('uuid_example', ["test" => true], ));
    }
}

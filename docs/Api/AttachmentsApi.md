# Accounting\AttachmentsApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAttachment()**](AttachmentsApi.md#addAttachment) | **POST** /attachments | Add an attachment |
| [**deleteAttachment()**](AttachmentsApi.md#deleteAttachment) | **DELETE** /attachments/{uuid} | Delete an attachment |
| [**getAttachment()**](AttachmentsApi.md#getAttachment) | **GET** /attachments/{uuid} | Get an attachment |
| [**listAttachments()**](AttachmentsApi.md#listAttachments) | **GET** /attachments | List company&#39;s attachments |
| [**retrieveAttachments()**](AttachmentsApi.md#retrieveAttachments) | **GET** /attachments/resource/{resource} | List company&#39;s attachments link to resource |
| [**updateAttachment()**](AttachmentsApi.md#updateAttachment) | **PUT** /attachments/{uuid} | Update an attachment |


## `addAttachment()`

```php
addAttachment($addAttachmentRequest): null|string|array
```

Add an attachment

Add an attachment. Send the resource fields in the request body; the response contains the saved record. Requires at least one permission: `attachment.add`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addAttachmentRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->attachments()->addAttachment($addAttachmentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->attachments->addAttachment: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addAttachmentRequest** | [see addAttachment](https://api.accounting.sh/swagger.html#operation/addAttachment)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAttachment()`

```php
deleteAttachment($uuid): null|string|array
```

Delete an attachment

Delete an attachment. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `attachment.delete`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The attachment uuid

try {
    $result = $api->attachments()->deleteAttachment($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->attachments->deleteAttachment: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The attachment uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttachment()`

```php
getAttachment($uuid): null|string|array
```

Get an attachment

Get an attachment. Use the identifier returned by the corresponding list or create operation. Requires at least one permission: `attachment.view`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The attachment uuid

try {
    $result = $api->attachments()->getAttachment($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->attachments->getAttachment: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The attachment uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAttachments()`

```php
listAttachments($fields, $page, $perPage, $orderBy): null|string|array
```

List company's attachments

List company's attachments. Retrieve records using the query parameters below. Requires at least one permission: `attachment.list`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,document,attached_to; // string | Comma-separated fields to include in each record. Default fields: uuid, document, attached_to.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->attachments()->listAttachments($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->attachments->listAttachments: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, document, attached_to. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveAttachments()`

```php
retrieveAttachments($resource, $fields, $page, $perPage, $orderBy): null|string|array
```

List company's attachments link to resource

List company's attachments link to resource. Use the parameters and response fields below for this operation. Requires at least one permission: `attachment.list`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$resource = 'resource_example'; // string | The resource
$fields = uuid,document,attached_to; // string | Comma-separated fields to include in each record. Default fields: uuid, document, attached_to.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->attachments()->retrieveAttachments($resource, $fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->attachments->retrieveAttachments: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource** | **string**| The resource | |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, document, attached_to. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAttachment()`

```php
updateAttachment($uuid, $addAttachmentRequest): null|string|array
```

Update an attachment

Update an attachment. Send the fields accepted by this operation in the request body. Requires at least one permission: `attachment.edit`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The attachment uuid
$addAttachmentRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->attachments()->updateAttachment($uuid, $addAttachmentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->attachments->updateAttachment: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The attachment uuid | |
| **addAttachmentRequest** | [see updateAttachment](https://api.accounting.sh/swagger.html#operation/updateAttachment)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

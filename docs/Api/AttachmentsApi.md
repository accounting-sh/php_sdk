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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$addAttachmentRequest = [/*...*/]; // array

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
| **addAttachmentRequest** | [see addAttachment](https://api.accounting.sh/swagger.html#operation/addAttachment)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAttachment()`

```php
deleteAttachment($uuid): null|string|array
```

Delete an attachment

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
listAttachments($fields, $page, $perPage): null|string|array
```

List company's attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->attachments()->listAttachments($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->attachments->listAttachments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| A comma separated list of fields requested in the response | [optional] |
| **page** | **string**| The response page | [optional] |
| **perPage** | **string**| The number of items per page | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveAttachments()`

```php
retrieveAttachments($resource, $fields, $page, $perPage): null|string|array
```

List company's attachments link to resource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$resource = 'resource_example'; // string | The resource
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->attachments()->retrieveAttachments($resource, $fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->attachments->retrieveAttachments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource** | **string**| The resource | |
| **fields** | **string**| A comma separated list of fields requested in the response | [optional] |
| **page** | **string**| The response page | [optional] |
| **perPage** | **string**| The number of items per page | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAttachment()`

```php
updateAttachment($uuid, $addAttachmentRequest): null|string|array
```

Update an attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The attachment uuid
$addAttachmentRequest = [/*...*/]; // array

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
| **addAttachmentRequest** | [see updateAttachment](https://api.accounting.sh/swagger.html#operation/updateAttachment)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

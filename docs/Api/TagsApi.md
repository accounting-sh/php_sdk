# Accounting\TagsApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addTag()**](TagsApi.md#addTag) | **POST** /tags | Add a tag |
| [**deleteTag()**](TagsApi.md#deleteTag) | **DELETE** /tags/{uuid} | Delete a tag |
| [**getTag()**](TagsApi.md#getTag) | **GET** /tags/{uuid} | Get a tag |
| [**listTags()**](TagsApi.md#listTags) | **GET** /tags | List company&#39;s tags |
| [**listTagsByResource()**](TagsApi.md#listTagsByResource) | **GET** /tags/attachments/{resource} | List company&#39;s tags by resource attachment |
| [**updateTag()**](TagsApi.md#updateTag) | **PUT** /tags/{uuid} | Update a tag |


## `addTag()`

```php
addTag($addTagRequest): null|string|array
```

Add a tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$addTagRequest = [/*...*/]; // array

try {
    $result = $api->tags()->addTag($addTagRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->tags->addTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addTagRequest** | [see addTag](https://api.accounting.sh/swagger.html#operation/addTag)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTag()`

```php
deleteTag($uuid): null|string|array
```

Delete a tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The tag uuid

try {
    $result = $api->tags()->deleteTag($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->tags->deleteTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The tag uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTag()`

```php
getTag($uuid): null|string|array
```

Get a tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The tag uuid

try {
    $result = $api->tags()->getTag($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->tags->getTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The tag uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTags()`

```php
listTags($fields, $page, $perPage): null|string|array
```

List company's tags

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->tags()->listTags($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->tags->listTags: ', $e->getMessage(), PHP_EOL;
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

## `listTagsByResource()`

```php
listTagsByResource($resource, $fields, $page, $perPage): null|string|array
```

List company's tags by resource attachment

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
    $result = $api->tags()->listTagsByResource($resource, $fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->tags->listTagsByResource: ', $e->getMessage(), PHP_EOL;
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

## `updateTag()`

```php
updateTag($uuid, $addTagRequest): null|string|array
```

Update a tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The tag uuid
$addTagRequest = [/*...*/]; // array

try {
    $result = $api->tags()->updateTag($uuid, $addTagRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->tags->updateTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The tag uuid | |
| **addTagRequest** | [see updateTag](https://api.accounting.sh/swagger.html#operation/updateTag)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

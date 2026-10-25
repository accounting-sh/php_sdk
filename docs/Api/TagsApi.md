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

Add a tag. Send the resource fields in the request body; the response contains the saved record. Requires at least one permission: `add.tag`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addTagRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **addTagRequest** | [see addTag](https://api.accounting.sh/swagger.html#operation/addTag)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTag()`

```php
deleteTag($uuid): null|string|array
```

Delete a tag

Delete a tag. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `delete.tag`.

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

Get a tag. Use the identifier returned by the corresponding list or create operation. Requires at least one permission: `view.tag`.

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
listTags($fields, $page, $perPage, $orderBy): null|string|array
```

List company's tags

List company's tags. Retrieve records using the query parameters below. Requires at least one permission: `list.tags`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,key,value,attached_at; // string | Comma-separated fields to include in each record. Default fields: uuid, key, value, attached_at.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->tags()->listTags($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->tags->listTags: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, key, value, attached_at. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTagsByResource()`

```php
listTagsByResource($resource, $fields, $page, $perPage, $orderBy): null|string|array
```

List company's tags by resource attachment

List company's tags by resource attachment. Use the parameters and response fields below for this operation. Requires at least one permission: `list.tags`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$resource = 'resource_example'; // string | The resource
$fields = uuid,key,value,attached_at; // string | Comma-separated fields to include in each record. Default fields: uuid, key, value, attached_at.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->tags()->listTagsByResource($resource, $fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->tags->listTagsByResource: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource** | **string**| The resource | |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, key, value, attached_at. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTag()`

```php
updateTag($uuid, $addTagRequest): null|string|array
```

Update a tag

Update a tag. Send the fields accepted by this operation in the request body. Requires at least one permission: `edit.tag`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The tag uuid
$addTagRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **addTagRequest** | [see updateTag](https://api.accounting.sh/swagger.html#operation/updateTag)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

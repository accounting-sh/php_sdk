# Accounting\CategoriesApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addCategory()**](CategoriesApi.md#addCategory) | **POST** /categories | Add a category |
| [**deleteCategory()**](CategoriesApi.md#deleteCategory) | **DELETE** /categories/{uuid} | Delete a category |
| [**getCategory()**](CategoriesApi.md#getCategory) | **GET** /categories/{uuid} | Get a category |
| [**listCategories()**](CategoriesApi.md#listCategories) | **GET** /categories | List company&#39;s categories |
| [**updateCategory()**](CategoriesApi.md#updateCategory) | **PUT** /categories/{uuid} | Update a category |


## `addCategory()`

```php
addCategory($addCategoryRequest): null|string|array
```

Add a category

Add a category. Send the resource fields in the request body; the response contains the saved record. Requires at least one permission: `add.category`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addCategoryRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->categories()->addCategory($addCategoryRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->categories->addCategory: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addCategoryRequest** | [see addCategory](https://api.accounting.sh/swagger.html#operation/addCategory)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCategory()`

```php
deleteCategory($uuid): null|string|array
```

Delete a category

Delete a category. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `delete.category`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The category uuid

try {
    $result = $api->categories()->deleteCategory($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->categories->deleteCategory: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The category uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategory()`

```php
getCategory($uuid): null|string|array
```

Get a category

Get a category. Use the identifier returned by the corresponding list or create operation. Requires at least one permission: `view.category`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The category uuid

try {
    $result = $api->categories()->getCategory($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->categories->getCategory: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The category uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCategories()`

```php
listCategories($fields, $page, $perPage, $orderBy): null|string|array
```

List company's categories

List company's categories. Retrieve records using the query parameters below. Requires at least one permission: `list.categories`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,name,type,color; // string | Comma-separated fields to include in each record. Default fields: uuid, name, type, color.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->categories()->listCategories($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->categories->listCategories: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, name, type, color. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCategory()`

```php
updateCategory($uuid, $addCategoryRequest): null|string|array
```

Update a category

Update a category. Send the fields accepted by this operation in the request body. Requires at least one permission: `edit.category`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The category uuid
$addCategoryRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->categories()->updateCategory($uuid, $addCategoryRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->categories->updateCategory: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The category uuid | |
| **addCategoryRequest** | [see updateCategory](https://api.accounting.sh/swagger.html#operation/updateCategory)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

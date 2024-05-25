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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$addCategoryRequest = [...]; // array

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
| **addCategoryRequest** | [see addCategory](https://api.accounting.sh/swagger.html#operation/addCategory)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCategory()`

```php
deleteCategory($uuid): null|string|array
```

Delete a category

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
listCategories($fields, $page, $perPage): null|string|array
```

List company's categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->categories()->listCategories($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->categories->listCategories: ', $e->getMessage(), PHP_EOL;
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

## `updateCategory()`

```php
updateCategory($uuid, $addCategoryRequest): null|string|array
```

Update a category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The category uuid
$addCategoryRequest = [...]; // array

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
| **addCategoryRequest** | [see updateCategory](https://api.accounting.sh/swagger.html#operation/updateCategory)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

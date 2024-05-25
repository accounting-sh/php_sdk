# Accounting\RevenuesApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addRevenue()**](RevenuesApi.md#addRevenue) | **POST** /incomes/revenues | Add a revenue |
| [**deleteRevenue()**](RevenuesApi.md#deleteRevenue) | **DELETE** /incomes/revenues/{uuid} | Delete a revenue |
| [**getRevenue()**](RevenuesApi.md#getRevenue) | **GET** /incomes/revenues/{uuid} | Get a revenue |
| [**listRevenues()**](RevenuesApi.md#listRevenues) | **GET** /incomes/revenues | List company&#39;s revenues |
| [**updateRevenue()**](RevenuesApi.md#updateRevenue) | **PUT** /incomes/revenues/{uuid} | Update a revenue |


## `addRevenue()`

```php
addRevenue($addRevenueRequest): null|string|array
```

Add a revenue

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$addRevenueRequest = [...]; // array

try {
    $result = $api->revenues()->addRevenue($addRevenueRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->revenues->addRevenue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addRevenueRequest** | [see addRevenue](https://api.accounting.sh/swagger.html#operation/addRevenue)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRevenue()`

```php
deleteRevenue($uuid): null|string|array
```

Delete a revenue

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The revenue uuid

try {
    $result = $api->revenues()->deleteRevenue($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->revenues->deleteRevenue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The revenue uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRevenue()`

```php
getRevenue($uuid): null|string|array
```

Get a revenue

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The revenue uuid

try {
    $result = $api->revenues()->getRevenue($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->revenues->getRevenue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The revenue uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRevenues()`

```php
listRevenues($fields, $page, $perPage): null|string|array
```

List company's revenues

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->revenues()->listRevenues($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->revenues->listRevenues: ', $e->getMessage(), PHP_EOL;
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

## `updateRevenue()`

```php
updateRevenue($uuid, $addRevenueRequest): null|string|array
```

Update a revenue

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The revenue uuid
$addRevenueRequest = [...]; // array

try {
    $result = $api->revenues()->updateRevenue($uuid, $addRevenueRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->revenues->updateRevenue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The revenue uuid | |
| **addRevenueRequest** | [see updateRevenue](https://api.accounting.sh/swagger.html#operation/updateRevenue)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

Add a revenue. Send the resource fields in the request body; the response contains the saved record. Requires at least one permission: `add.revenue`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addRevenueRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **addRevenueRequest** | [see addRevenue](https://api.accounting.sh/swagger.html#operation/addRevenue)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRevenue()`

```php
deleteRevenue($uuid): null|string|array
```

Delete a revenue

Delete a revenue. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `revenue.delete`.

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

Get a revenue. Use the identifier returned by the corresponding list or create operation. Requires at least one permission: `view.revenue`.

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
listRevenues($fields, $page, $perPage, $orderBy): null|string|array
```

List company's revenues

List company's revenues. Retrieve records using the query parameters below. Requires at least one permission: `list.revenues`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,paid_at,amount,currency; // string | Comma-separated fields to include in each record. Default fields: uuid, paid_at, amount, currency.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->revenues()->listRevenues($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->revenues->listRevenues: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, paid_at, amount, currency. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRevenue()`

```php
updateRevenue($uuid, $addRevenueRequest): null|string|array
```

Update a revenue

Update a revenue. Send the fields accepted by this operation in the request body. Requires at least one permission: `edit.revenue`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The revenue uuid
$addRevenueRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **addRevenueRequest** | [see updateRevenue](https://api.accounting.sh/swagger.html#operation/updateRevenue)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

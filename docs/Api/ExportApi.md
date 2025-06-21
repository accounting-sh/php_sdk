# Accounting\ExportApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listExports()**](ExportApi.md#listExports) | **GET** /export | List company&#39;s exports |
| [**requestExport()**](ExportApi.md#requestExport) | **POST** /export | Request an export |


## `listExports()`

```php
listExports($fields, $page, $perPage): null|string|array
```

List company's exports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->export()->listExports($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->export->listExports: ', $e->getMessage(), PHP_EOL;
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

## `requestExport()`

```php
requestExport($requestExportRequest): null|string|array
```

Request an export

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$requestExportRequest = [/*...*/]; // array

try {
    $result = $api->export()->requestExport($requestExportRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->export->requestExport: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requestExportRequest** | [see requestExport](https://api.accounting.sh/swagger.html#operation/requestExport)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

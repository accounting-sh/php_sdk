# Accounting\ExportApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listExports()**](ExportApi.md#listExports) | **GET** /export | List company&#39;s exports |
| [**requestExport()**](ExportApi.md#requestExport) | **POST** /export | Request an export |


## `listExports()`

```php
listExports($fields, $page, $perPage, $orderBy): null|string|array
```

List company's exports

List company's exports. Retrieve records using the query parameters below. Requires at least one permission: `export`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,status,document,created_at,updated_at; // string | Comma-separated fields to include in each record. Default fields: uuid, status, document, created_at, updated_at.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->export()->listExports($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->export->listExports: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, status, document, created_at, updated_at. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestExport()`

```php
requestExport($requestExportRequest): null|string|array
```

Request an export

Queue an accounting ZIP using the supplied options. For companies with Journal, the ZIP also includes posted lines in journal.csv and an integrity/completeness manifest in journal-metadata.json, filtered by the export accounting-date range. Journal snapshots exceeding 50000 lines fail rather than truncate. HTTP 202 acknowledges the job. Use GET /export to find the export and its generation status. Requires at least one permission: `export`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$requestExportRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **requestExportRequest** | [see requestExport](https://api.accounting.sh/swagger.html#operation/requestExport)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

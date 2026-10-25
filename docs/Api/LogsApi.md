# Accounting\LogsApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**logs()**](LogsApi.md#logs) | **GET** /logs | List company&#39;s logs |


## `logs()`

```php
logs($fields, $page, $perPage, $channel, $level, $resource, $before, $after, $format, $orderBy): null|string|array
```

List company's logs

List company's logs. Retrieve records using the query parameters below. Requires at least one permission: `log.view`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,channel,level,message,recorded_at; // string | Comma-separated fields to include in each record. Default fields: uuid, channel, level, message, recorded_at.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$channel = 'channel_example'; // string | The channel to retrieve the logs from
$level = 'level_example'; // string | The log level to retrieve
$resource = 'resource_example'; // string | Retrive logs linked to that resource
$before = 'before_example'; // string | Retrive logs before the provided date
$after = 'after_example'; // string | Retrive logs after the provided date
$format = 'format_example'; // string | In which format to retrieve the logs, available: json or txt
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->logs()->logs($fields, $page, $perPage, $channel, $level, $resource, $before, $after, $format, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->logs->logs: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, channel, level, message, recorded_at. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **channel** | **string**| The channel to retrieve the logs from | [optional] |
| **level** | **string**| The log level to retrieve | [optional] |
| **resource** | **string**| Retrive logs linked to that resource | [optional] |
| **before** | **string**| Retrive logs before the provided date | [optional] |
| **after** | **string**| Retrive logs after the provided date | [optional] |
| **format** | **string**| In which format to retrieve the logs, available: json or txt | [optional] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

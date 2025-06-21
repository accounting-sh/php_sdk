# Accounting\LogsApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**logs()**](LogsApi.md#logs) | **GET** /logs | List company&#39;s logs |


## `logs()`

```php
logs($fields, $page, $perPage, $channel, $level, $resource, $before, $after, $format): null|string|array
```

List company's logs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page
$channel = 'channel_example'; // string | The channel to retrieve the logs from
$level = 'level_example'; // string | The log level to retrieve
$resource = 'resource_example'; // string | Retrive logs linked to that resource
$before = 'before_example'; // string | Retrive logs before the provided date
$after = 'after_example'; // string | Retrive logs after the provided date
$format = 'format_example'; // string | In which format to retrieve the logs, available: json or txt

try {
    $result = $api->logs()->logs($fields, $page, $perPage, $channel, $level, $resource, $before, $after, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->logs->logs: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| A comma separated list of fields requested in the response | [optional] |
| **page** | **string**| The response page | [optional] |
| **perPage** | **string**| The number of items per page | [optional] |
| **channel** | **string**| The channel to retrieve the logs from | [optional] |
| **level** | **string**| The log level to retrieve | [optional] |
| **resource** | **string**| Retrive logs linked to that resource | [optional] |
| **before** | **string**| Retrive logs before the provided date | [optional] |
| **after** | **string**| Retrive logs after the provided date | [optional] |
| **format** | **string**| In which format to retrieve the logs, available: json or txt | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

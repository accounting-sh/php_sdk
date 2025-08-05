# Accounting\StatisticsApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**summaryStatisticsPeriod()**](StatisticsApi.md#summaryStatisticsPeriod) | **GET** /companies/{uuid}/statistics/summary | Company&#39;s summary statistics |


## `summaryStatisticsPeriod()`

```php
summaryStatisticsPeriod($uuid, $start, $end): null|string|array
```

Company's summary statistics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date

try {
    $result = $api->statistics()->summaryStatisticsPeriod($uuid, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->statistics->summaryStatisticsPeriod: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The company uuid | |
| **start** | **\DateTime**| The start date | [optional] |
| **end** | **\DateTime**| The end date | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

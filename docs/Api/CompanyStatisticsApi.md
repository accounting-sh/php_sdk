# Accounting\CompanyStatisticsApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getStatistics()**](CompanyStatisticsApi.md#getStatistics) | **GET** /companies/{uuid}/statistics/period | Get company&#39;s statistic |


## `getStatistics()`

```php
getStatistics($uuid, $start, $end): null|string|array
```

Get company's statistic

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$start = 'start_example'; // string | Start date
$end = 'end_example'; // string | End date

try {
    $result = $api->companyStatistics()->getStatistics($uuid, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->companyStatistics->getStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The company uuid | |
| **start** | **string**| Start date | [optional] |
| **end** | **string**| End date | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

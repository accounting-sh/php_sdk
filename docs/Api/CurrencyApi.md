# Accounting\CurrencyApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getExchangeRate()**](CurrencyApi.md#getExchangeRate) | **GET** /currency/{from}/{to} | Get the latest currency exchange rate |


## `getExchangeRate()`

```php
getExchangeRate($from, $to): null|string|array
```

Get the latest currency exchange rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$from = 'from_example'; // string | The currency to convert from
$to = 'to_example'; // string | The currency to convert to

try {
    $result = $api->currency()->getExchangeRate($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->currency->getExchangeRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **string**| The currency to convert from | |
| **to** | **string**| The currency to convert to | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

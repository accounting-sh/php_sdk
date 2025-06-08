# Accounting\TaxApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTaxRate()**](TaxApi.md#getTaxRate) | **GET** /tax/{country} | Get the latest tax rate for a country |
| [**verifyVatId()**](TaxApi.md#verifyVatId) | **GET** /vat/verify/{number} | Verify a VAT ID |


## `getTaxRate()`

```php
getTaxRate($country): null|string|array
```

Get the latest tax rate for a country

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$country = 'country_example'; // string | The country

try {
    $result = $api->tax()->getTaxRate($country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->tax->getTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country** | **string**| The country | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyVatId()`

```php
verifyVatId($number): null|string|array
```

Verify a VAT ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$number = 'number_example'; // string | The VAT ID

try {
    $result = $api->tax()->verifyVatId($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->tax->verifyVatId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **string**| The VAT ID | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

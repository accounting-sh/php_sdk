# Accounting\CountriesApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTranslatedCountries()**](CountriesApi.md#getTranslatedCountries) | **GET** /countries/{lang} | Get translated list of countries |


## `getTranslatedCountries()`

```php
getTranslatedCountries($lang): null|string|array
```

Get translated list of countries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$lang = 'lang_example'; // string | The target language

try {
    $result = $api->countries()->getTranslatedCountries($lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->countries->getTranslatedCountries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lang** | **string**| The target language | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

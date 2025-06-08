# Accounting\SettingsApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSettings()**](SettingsApi.md#getSettings) | **GET** /companies/{uuid}/settings/{key} | Get a company&#39;s settings |
| [**listSettings()**](SettingsApi.md#listSettings) | **GET** /companies/{uuid}/settings | List company&#39;s settings |
| [**updateSettings()**](SettingsApi.md#updateSettings) | **PUT** /companies/{uuid}/settings/{key} | Update a company&#39;s settings |


## `getSettings()`

```php
getSettings($uuid, $key): null|string|array
```

Get a company's settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$key = 'key_example'; // string | The setting key

try {
    $result = $api->settings()->getSettings($uuid, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->settings->getSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The company uuid | |
| **key** | **string**| The setting key | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSettings()`

```php
listSettings($fields, $page, $perPage, $uuid): null|string|array
```

List company's settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page
$uuid = 'uuid_example'; // string | The company uuid

try {
    $result = $api->settings()->listSettings($fields, $page, $perPage, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->settings->listSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| A comma separated list of fields requested in the response | [optional] |
| **page** | **string**| The response page | [optional] |
| **perPage** | **string**| The number of items per page | [optional] |
| **uuid** | **string**| The company uuid | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSettings()`

```php
updateSettings($uuid, $key, $updateSettingsRequest): null|string|array
```

Update a company's settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$key = 'key_example'; // string | The setting key
$updateSettingsRequest = [/*...*/]; // array

try {
    $result = $api->settings()->updateSettings($uuid, $key, $updateSettingsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->settings->updateSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The company uuid | |
| **key** | **string**| The setting key | |
| **updateSettingsRequest** | [see updateSettings](https://api.accounting.sh/swagger.html#operation/updateSettings)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

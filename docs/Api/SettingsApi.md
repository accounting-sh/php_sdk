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

Get a company's settings. Use the parameters and response fields below for this operation. Requires at least one permission: `view.company.settings`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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
listSettings($uuid, $fields, $page, $perPage, $orderBy): null|string|array
```

List company's settings

List company's settings. Retrieve records using the query parameters below. Requires at least one permission: `list.company.settings`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$fields = uuid,key,value; // string | Comma-separated fields to include in each record. Default fields: uuid, key, value.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->settings()->listSettings($uuid, $fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->settings->listSettings: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The company uuid | |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, key, value. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSettings()`

```php
updateSettings($uuid, $key, $updateSettingsRequest): null|string|array
```

Update a company's settings

Update a company's settings. Send the fields accepted by this operation in the request body. Requires at least one permission: `edit.company.settings`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$key = 'key_example'; // string | The setting key
$updateSettingsRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **updateSettingsRequest** | [see updateSettings](https://api.accounting.sh/swagger.html#operation/updateSettings)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

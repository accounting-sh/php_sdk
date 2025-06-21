# Accounting\AccountConnectionsApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteAccountConnection()**](AccountConnectionsApi.md#deleteAccountConnection) | **DELETE** /accounts/{uuid}/connect | Delete an account&#39;s connection |
| [**listAccountConnections()**](AccountConnectionsApi.md#listAccountConnections) | **GET** /accounts/{uuid}/connect | List account&#39;s connections |
| [**listBanks()**](AccountConnectionsApi.md#listBanks) | **GET** /accounts/{uuid}/connect/banks | List available bank connections |


## `deleteAccountConnection()`

```php
deleteAccountConnection($uuid): null|string|array
```

Delete an account's connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The account uuid

try {
    $result = $api->accountConnections()->deleteAccountConnection($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountConnections->deleteAccountConnection: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The account uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccountConnections()`

```php
listAccountConnections($uuid, $fields, $page, $perPage): null|string|array
```

List account's connections

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The account uuid
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->accountConnections()->listAccountConnections($uuid, $fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountConnections->listAccountConnections: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The account uuid | |
| **fields** | **string**| A comma separated list of fields requested in the response | [optional] |
| **page** | **string**| The response page | [optional] |
| **perPage** | **string**| The number of items per page | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBanks()`

```php
listBanks($uuid, $country): null|string|array
```

List available bank connections

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The account uuid
$country = 'country_example'; // string | A two letter country code, if none are specified, the company's country is used

try {
    $result = $api->accountConnections()->listBanks($uuid, $country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountConnections->listBanks: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The account uuid | |
| **country** | **string**| A two letter country code, if none are specified, the company&#39;s country is used | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# Accounting\AccountsApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAccount()**](AccountsApi.md#addAccount) | **POST** /accounts | Add an account |
| [**deleteAccount()**](AccountsApi.md#deleteAccount) | **DELETE** /accounts/{uuid} | Delete an account |
| [**getAccount()**](AccountsApi.md#getAccount) | **GET** /accounts/{uuid} | Get an account |
| [**listAccounts()**](AccountsApi.md#listAccounts) | **GET** /accounts | List company&#39;s accounts |
| [**updateAccount()**](AccountsApi.md#updateAccount) | **PUT** /accounts/{uuid} | Update an account |


## `addAccount()`

```php
addAccount($addAccountRequest): null|string|array
```

Add an account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$addAccountRequest = [...]; // array

try {
    $result = $api->accounts()->addAccount($addAccountRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accounts->addAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addAccountRequest** | [see addAccount](https://api.accounting.sh/swagger.html#operation/addAccount)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccount()`

```php
deleteAccount($uuid): null|string|array
```

Delete an account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The account uuid

try {
    $result = $api->accounts()->deleteAccount($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accounts->deleteAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The account uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccount()`

```php
getAccount($uuid): null|string|array
```

Get an account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The account uuid

try {
    $result = $api->accounts()->getAccount($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accounts->getAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The account uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccounts()`

```php
listAccounts($fields, $page, $perPage): null|string|array
```

List company's accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->accounts()->listAccounts($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accounts->listAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| A comma separated list of fields requested in the response | [optional] |
| **page** | **string**| The response page | [optional] |
| **perPage** | **string**| The number of items per page | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccount()`

```php
updateAccount($uuid, $addAccountRequest): null|string|array
```

Update an account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The account uuid
$addAccountRequest = [...]; // array

try {
    $result = $api->accounts()->updateAccount($uuid, $addAccountRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accounts->updateAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The account uuid | |
| **addAccountRequest** | [see updateAccount](https://api.accounting.sh/swagger.html#operation/updateAccount)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

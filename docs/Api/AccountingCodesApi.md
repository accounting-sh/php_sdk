# Accounting\AccountingCodesApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAccountingCode()**](AccountingCodesApi.md#addAccountingCode) | **POST** /accounting/codes | Add an accounting code |
| [**deleteAccountingCode()**](AccountingCodesApi.md#deleteAccountingCode) | **DELETE** /accounting/codes/{uuid} | Delete an accounting code |
| [**getAccountingCode()**](AccountingCodesApi.md#getAccountingCode) | **GET** /accounting/codes/{uuid} | Get an accounting code |
| [**listAccountingCodes()**](AccountingCodesApi.md#listAccountingCodes) | **GET** /accounting/codes | List company&#39;s accounting code |
| [**updateAccountingCode()**](AccountingCodesApi.md#updateAccountingCode) | **PUT** /accounting/codes/{uuid} | Update an accounting code |


## `addAccountingCode()`

```php
addAccountingCode($addAccountingCodeRequest): null|string|array
```

Add an accounting code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$addAccountingCodeRequest = [/*...*/]; // array

try {
    $result = $api->accountingCodes()->addAccountingCode($addAccountingCodeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountingCodes->addAccountingCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addAccountingCodeRequest** | [see addAccountingCode](https://api.accounting.sh/swagger.html#operation/addAccountingCode)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccountingCode()`

```php
deleteAccountingCode($uuid): null|string|array
```

Delete an accounting code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The accounting code uuid

try {
    $result = $api->accountingCodes()->deleteAccountingCode($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountingCodes->deleteAccountingCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The accounting code uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountingCode()`

```php
getAccountingCode($uuid): null|string|array
```

Get an accounting code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The accounting code uuid

try {
    $result = $api->accountingCodes()->getAccountingCode($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountingCodes->getAccountingCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The accounting code uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccountingCodes()`

```php
listAccountingCodes(): null|string|array
```

List company's accounting code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");

try {
    $result = $api->accountingCodes()->listAccountingCodes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountingCodes->listAccountingCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountingCode()`

```php
updateAccountingCode($uuid, $addAccountingCodeRequest): null|string|array
```

Update an accounting code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The accounting code uuid
$addAccountingCodeRequest = [/*...*/]; // array

try {
    $result = $api->accountingCodes()->updateAccountingCode($uuid, $addAccountingCodeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountingCodes->updateAccountingCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The accounting code uuid | |
| **addAccountingCodeRequest** | [see updateAccountingCode](https://api.accounting.sh/swagger.html#operation/updateAccountingCode)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

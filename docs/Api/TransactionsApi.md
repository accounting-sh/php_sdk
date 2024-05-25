# Accounting\TransactionsApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addTransaction()**](TransactionsApi.md#addTransaction) | **POST** /transactions | Add a transaction |
| [**addTransactionCode()**](TransactionsApi.md#addTransactionCode) | **POST** /transactions/{uuid}/codes | Add a transaction&#39;s code |
| [**deleteTransaction()**](TransactionsApi.md#deleteTransaction) | **DELETE** /transactions/{uuid} | Delete a transaction |
| [**deleteTransactionCode()**](TransactionsApi.md#deleteTransactionCode) | **DELETE** /transactions/{uuid}/codes/{code} | Delete a transaction&#39;s code |
| [**getTransaction()**](TransactionsApi.md#getTransaction) | **GET** /transactions/{uuid} | Get a transaction |
| [**importTransactions()**](TransactionsApi.md#importTransactions) | **POST** /transactions/import | Import transactions - INTERNAL |
| [**listTransactionCodes()**](TransactionsApi.md#listTransactionCodes) | **GET** /transactions/{uuid}/codes | List transaction&#39;s codes |
| [**listTransactions()**](TransactionsApi.md#listTransactions) | **GET** /transactions | List company&#39;s transactions |
| [**updateTransaction()**](TransactionsApi.md#updateTransaction) | **PUT** /transactions/{uuid} | Update a transaction |
| [**updateTransactionCode()**](TransactionsApi.md#updateTransactionCode) | **PUT** /transactions/{uuid}/codes | Update a transaction&#39;s code |


## `addTransaction()`

```php
addTransaction($addTransactionRequest): null|string|array
```

Add a transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$addTransactionRequest = [...]; // array

try {
    $result = $api->transactions()->addTransaction($addTransactionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->addTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addTransactionRequest** | [see addTransaction](https://api.accounting.sh/swagger.html#operation/addTransaction)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addTransactionCode()`

```php
addTransactionCode($uuid, $updateTransactionCodeRequest): null|string|array
```

Add a transaction's code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transaction uuid
$updateTransactionCodeRequest = [...]; // array

try {
    $result = $api->transactions()->addTransactionCode($uuid, $updateTransactionCodeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->addTransactionCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The transaction uuid | |
| **updateTransactionCodeRequest** | [see addTransactionCode](https://api.accounting.sh/swagger.html#operation/addTransactionCode)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTransaction()`

```php
deleteTransaction($uuid): null|string|array
```

Delete a transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transaction uuid

try {
    $result = $api->transactions()->deleteTransaction($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->deleteTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The transaction uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTransactionCode()`

```php
deleteTransactionCode($uuid, $code): null|string|array
```

Delete a transaction's code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transaction uuid
$code = 'code_example'; // string | The transaction's code uuid

try {
    $result = $api->transactions()->deleteTransactionCode($uuid, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->deleteTransactionCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The transaction uuid | |
| **code** | **string**| The transaction&#39;s code uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransaction()`

```php
getTransaction($uuid): null|string|array
```

Get a transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transaction uuid

try {
    $result = $api->transactions()->getTransaction($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->getTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The transaction uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importTransactions()`

```php
importTransactions($importTransactionsRequest): null|string|array
```

Import transactions - INTERNAL

Import transaction from a file or directly from extracted details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$importTransactionsRequest = [...]; // array

try {
    $result = $api->transactions()->importTransactions($importTransactionsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->importTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **importTransactionsRequest** | [see importTransactions](https://api.accounting.sh/swagger.html#operation/importTransactions)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTransactionCodes()`

```php
listTransactionCodes($uuid, $fields, $page, $perPage, $account): null|string|array
```

List transaction's codes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transaction uuid
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page
$account = 'account_example'; // string | List to the specified account

try {
    $result = $api->transactions()->listTransactionCodes($uuid, $fields, $page, $perPage, $account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->listTransactionCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The transaction uuid | |
| **fields** | **string**| A comma separated list of fields requested in the response | [optional] |
| **page** | **string**| The response page | [optional] |
| **perPage** | **string**| The number of items per page | [optional] |
| **account** | **string**| List to the specified account | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTransactions()`

```php
listTransactions($fields, $page, $perPage, $account): null|string|array
```

List company's transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page
$account = 'account_example'; // string | List to the specified account

try {
    $result = $api->transactions()->listTransactions($fields, $page, $perPage, $account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->listTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| A comma separated list of fields requested in the response | [optional] |
| **page** | **string**| The response page | [optional] |
| **perPage** | **string**| The number of items per page | [optional] |
| **account** | **string**| List to the specified account | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTransaction()`

```php
updateTransaction($uuid, $addTransactionRequest): null|string|array
```

Update a transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transaction uuid
$addTransactionRequest = [...]; // array

try {
    $result = $api->transactions()->updateTransaction($uuid, $addTransactionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->updateTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The transaction uuid | |
| **addTransactionRequest** | [see updateTransaction](https://api.accounting.sh/swagger.html#operation/updateTransaction)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTransactionCode()`

```php
updateTransactionCode($uuid, $updateTransactionCodeRequest): null|string|array
```

Update a transaction's code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transaction uuid
$updateTransactionCodeRequest = [...]; // array

try {
    $result = $api->transactions()->updateTransactionCode($uuid, $updateTransactionCodeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->updateTransactionCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The transaction uuid | |
| **updateTransactionCodeRequest** | [see updateTransactionCode](https://api.accounting.sh/swagger.html#operation/updateTransactionCode)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

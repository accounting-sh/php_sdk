# Accounting\TransactionsApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addLink()**](TransactionsApi.md#addLink) | **POST** /transactions/{uuid}/links | Add a new transaction link |
| [**addTransaction()**](TransactionsApi.md#addTransaction) | **POST** /transactions | Add a transaction |
| [**addTransactionCode()**](TransactionsApi.md#addTransactionCode) | **POST** /transactions/{uuid}/codes | Add a transaction&#39;s code |
| [**deleteLink()**](TransactionsApi.md#deleteLink) | **DELETE** /transactions/{uuid}/links/{link_uuid} | Delete a transaction link |
| [**deleteTransaction()**](TransactionsApi.md#deleteTransaction) | **DELETE** /transactions/{uuid} | Delete a transaction |
| [**deleteTransactionCode()**](TransactionsApi.md#deleteTransactionCode) | **DELETE** /transactions/{uuid}/codes/{code} | Delete a transaction&#39;s code |
| [**getTransaction()**](TransactionsApi.md#getTransaction) | **GET** /transactions/{uuid} | Get a transaction |
| [**importTransactions()**](TransactionsApi.md#importTransactions) | **POST** /transactions/import | Import transactions - INTERNAL |
| [**ledger()**](TransactionsApi.md#ledger) | **GET** /transactions/ledger | List company&#39;s transactions and transfers |
| [**listLinks()**](TransactionsApi.md#listLinks) | **GET** /transactions/{uuid}/links | List a transaction links |
| [**listTransactionCodes()**](TransactionsApi.md#listTransactionCodes) | **GET** /transactions/{uuid}/codes | List transaction&#39;s codes |
| [**listTransactions()**](TransactionsApi.md#listTransactions) | **GET** /transactions | List company&#39;s transactions |
| [**updateLink()**](TransactionsApi.md#updateLink) | **PUT** /transactions/{uuid}/links/{link_uuid} | Update a transaction link |
| [**updateTransaction()**](TransactionsApi.md#updateTransaction) | **PUT** /transactions/{uuid} | Update a transaction |
| [**updateTransactionCode()**](TransactionsApi.md#updateTransactionCode) | **PUT** /transactions/{uuid}/codes | Update a transaction&#39;s code |
| [**viewLink()**](TransactionsApi.md#viewLink) | **GET** /transactions/{uuid}/links/{link_uuid} | View a transaction link |


## `addLink()`

```php
addLink($listLinks200ResponseLinksInner, $uuid): null|string|array
```

Add a new transaction link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$listLinks200ResponseLinksInner = [/*...*/]; // array
$uuid = 'uuid_example'; // string | A transaction uuid

try {
    $result = $api->transactions()->addLink($listLinks200ResponseLinksInner, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->addLink: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **listLinks200ResponseLinksInner** | [see addLink](https://api.accounting.sh/swagger.html#operation/addLink)|  | |
| **uuid** | **string**| A transaction uuid | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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
$addTransactionRequest = [/*...*/]; // array

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
$updateTransactionCodeRequest = [/*...*/]; // array

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

## `deleteLink()`

```php
deleteLink($uuid, $linkUuid): null|string|array
```

Delete a transaction link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | A transaction uuid
$linkUuid = 'linkUuid_example'; // string | A transaction link uuid OR the target uuid

try {
    $result = $api->transactions()->deleteLink($uuid, $linkUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->deleteLink: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| A transaction uuid | [optional] |
| **linkUuid** | **string**| A transaction link uuid OR the target uuid | [optional] |

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
$importTransactionsRequest = [/*...*/]; // array

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

## `ledger()`

```php
ledger($fields, $page, $perPage, $account): null|string|array
```

List company's transactions and transfers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page
$account = 'account_example'; // string | An account uuid to filter results

try {
    $result = $api->transactions()->ledger($fields, $page, $perPage, $account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->ledger: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| A comma separated list of fields requested in the response | [optional] |
| **page** | **string**| The response page | [optional] |
| **perPage** | **string**| The number of items per page | [optional] |
| **account** | **string**| An account uuid to filter results | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLinks()`

```php
listLinks($fields, $page, $perPage, $uuid): null|string|array
```

List a transaction links

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page
$uuid = 'uuid_example'; // string | A transaction uuid

try {
    $result = $api->transactions()->listLinks($fields, $page, $perPage, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->listLinks: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| A comma separated list of fields requested in the response | [optional] |
| **page** | **string**| The response page | [optional] |
| **perPage** | **string**| The number of items per page | [optional] |
| **uuid** | **string**| A transaction uuid | [optional] |

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

## `updateLink()`

```php
updateLink($listLinks200ResponseLinksInner, $uuid, $linkUuid): null|string|array
```

Update a transaction link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$listLinks200ResponseLinksInner = [/*...*/]; // array
$uuid = 'uuid_example'; // string | A transaction uuid
$linkUuid = 'linkUuid_example'; // string | A transaction link uuid OR the target uuid

try {
    $result = $api->transactions()->updateLink($listLinks200ResponseLinksInner, $uuid, $linkUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->updateLink: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **listLinks200ResponseLinksInner** | [see updateLink](https://api.accounting.sh/swagger.html#operation/updateLink)|  | |
| **uuid** | **string**| A transaction uuid | [optional] |
| **linkUuid** | **string**| A transaction link uuid OR the target uuid | [optional] |

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
$addTransactionRequest = [/*...*/]; // array

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
$updateTransactionCodeRequest = [/*...*/]; // array

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

## `viewLink()`

```php
viewLink($uuid, $linkUuid): null|string|array
```

View a transaction link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | A transaction uuid
$linkUuid = 'linkUuid_example'; // string | A transaction link uuid OR the target uuid

try {
    $result = $api->transactions()->viewLink($uuid, $linkUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->viewLink: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| A transaction uuid | [optional] |
| **linkUuid** | **string**| A transaction link uuid OR the target uuid | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

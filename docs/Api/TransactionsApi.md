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
| [**reconciliationReject()**](TransactionsApi.md#reconciliationReject) | **POST** /transactions/{uuid}/reconciliation/rejections | Remember a rejected transaction/document candidate |
| [**reconciliationRun()**](TransactionsApi.md#reconciliationRun) | **POST** /transactions/{uuid}/reconciliation | Schedule background matching for human review |
| [**reconciliationSuggestions()**](TransactionsApi.md#reconciliationSuggestions) | **GET** /transactions/{uuid}/reconciliation/suggestions | Rank document and payment matches without creating links |
| [**reverseTransactionLink()**](TransactionsApi.md#reverseTransactionLink) | **POST** /transactions/{uuid}/links/{link_uuid}/reverse | Reverse a human-confirmed match and its generated payment |
| [**updateLink()**](TransactionsApi.md#updateLink) | **PUT** /transactions/{uuid}/links/{link_uuid} | Update a transaction link |
| [**updateTransaction()**](TransactionsApi.md#updateTransaction) | **PUT** /transactions/{uuid} | Update a transaction |
| [**updateTransactionCode()**](TransactionsApi.md#updateTransactionCode) | **PUT** /transactions/{uuid}/codes/{code} | Update a transaction&#39;s code |
| [**viewLink()**](TransactionsApi.md#viewLink) | **GET** /transactions/{uuid}/links/{link_uuid} | View a transaction link |


## `addLink()`

```php
addLink($uuid, $addLinkRequest): null|string|array
```

Add a new transaction link

Add a new transaction link. Send the resource fields in the request body; the response contains the saved record. Requires at least one permission: `transaction_link.add`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | A transaction uuid
$addLinkRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->transactions()->addLink($uuid, $addLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->addLink: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| A transaction uuid | |
| **addLinkRequest** | [see addLink](https://api.accounting.sh/swagger.html#operation/addLink)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addTransaction()`

```php
addTransaction($addTransactionRequest): null|string|array
```

Add a transaction

Add a transaction. Send the resource fields in the request body; the response contains the saved record. Requires at least one permission: `transaction.add`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addTransactionRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **addTransactionRequest** | [see addTransaction](https://api.accounting.sh/swagger.html#operation/addTransaction)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addTransactionCode()`

```php
addTransactionCode($uuid, $addTransactionCodeRequest): null|string|array
```

Add a transaction's code

Add a transaction's code. Send the resource fields in the request body; the response contains the saved record. Requires at least one permission: `transaction_code.add`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transaction uuid
$addTransactionCodeRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->transactions()->addTransactionCode($uuid, $addTransactionCodeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->addTransactionCode: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The transaction uuid | |
| **addTransactionCodeRequest** | [see addTransactionCode](https://api.accounting.sh/swagger.html#operation/addTransactionCode)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLink()`

```php
deleteLink($uuid, $linkUuid): null|string|array
```

Delete a transaction link

Delete a transaction link. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `transaction_link.delete`.

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
| **uuid** | **string**| A transaction uuid | |
| **linkUuid** | **string**| A transaction link uuid OR the target uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTransaction()`

```php
deleteTransaction($uuid): null|string|array
```

Delete a transaction

Delete a transaction. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `transaction.delete`.

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

Delete a transaction's code. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `transaction_code.delete`.

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

Get a transaction. Use the identifier returned by the corresponding list or create operation. Requires at least one permission: `transaction.view`.

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

Import transaction records using the internal import payload. This operation is intended for the application import workflow. Requires at least one permission: `transaction.add`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$importTransactionsRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **importTransactionsRequest** | [see importTransactions](https://api.accounting.sh/swagger.html#operation/importTransactions)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ledger()`

```php
ledger($fields, $page, $perPage, $account, $orderBy): null|string|array
```

List company's transactions and transfers

Retrieve ledger entries combining transactions and transfers. Optionally filter by the account query parameter. Requires at least one permission: `transaction.list`, `list.transfers`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,account,amount,event_date; // string | Comma-separated fields to include in each record. Default fields: uuid, account, amount, event_date.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$account = 'account_example'; // string | An account uuid to filter results
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->transactions()->ledger($fields, $page, $perPage, $account, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->ledger: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, account, amount, event_date. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **account** | **string**| An account uuid to filter results | [optional] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLinks()`

```php
listLinks($uuid, $fields, $page, $perPage, $orderBy): null|string|array
```

List a transaction links

List a transaction links. Retrieve records using the query parameters below. Requires at least one permission: `transaction_link.list`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | A transaction uuid
$fields = target_type,target,link_status; // string | Comma-separated fields to include in each record. Default fields: target_type, target, link_status.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->transactions()->listLinks($uuid, $fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->listLinks: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| A transaction uuid | |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: target_type, target, link_status. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTransactionCodes()`

```php
listTransactionCodes($uuid, $fields, $page, $perPage, $account, $orderBy): null|string|array
```

List transaction's codes

List transaction's codes. Retrieve records using the query parameters below. Requires at least one permission: `transaction_code.list`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transaction uuid
$fields = uuid,code,description,amount; // string | Comma-separated fields to include in each record. Default fields: uuid, code, description, amount.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$account = 'account_example'; // string | List to the specified account
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->transactions()->listTransactionCodes($uuid, $fields, $page, $perPage, $account, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->listTransactionCodes: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The transaction uuid | |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, code, description, amount. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **account** | **string**| List to the specified account | [optional] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTransactions()`

```php
listTransactions($fields, $page, $perPage, $account, $orderBy): null|string|array
```

List company's transactions

List company's transactions. Retrieve records using the query parameters below. Requires at least one permission: `transaction.list`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,account,amount,transaction_date; // string | Comma-separated fields to include in each record. Default fields: uuid, account, amount, transaction_date.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$account = 'account_example'; // string | List to the specified account
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->transactions()->listTransactions($fields, $page, $perPage, $account, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->listTransactions: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, account, amount, transaction_date. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **account** | **string**| List to the specified account | [optional] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reconciliationReject()`

```php
reconciliationReject($uuid, $reconciliationRejectRequest): null|string|array
```

Remember a rejected transaction/document candidate

Exclude a bill or invoice candidate from subsequent automatic matching. Confirmed financial links cannot be rejected through this operation. Requires `transaction_link.delete`, `transaction.view`, `view.bill` and `view.invoice` permissions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string
$reconciliationRejectRequest = [/*...*/]; // array

try {
    $result = $api->transactions()->reconciliationReject($uuid, $reconciliationRejectRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->reconciliationReject: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **reconciliationRejectRequest** | [see reconciliationReject](https://api.accounting.sh/swagger.html#operation/reconciliationReject)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reconciliationRun()`

```php
reconciliationRun($uuid): null|string|array
```

Schedule background matching for human review

Queue transaction matching in the background. Inspect transaction links after processing; suggestions have no financial effects until human confirmation. Requires `transaction_link.add`, `transaction.view`, `view.bill` and `view.invoice` permissions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->transactions()->reconciliationRun($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->reconciliationRun: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reconciliationSuggestions()`

```php
reconciliationSuggestions($uuid): null|string|array
```

Rank document and payment matches without creating links

Rank candidate documents and existing payments for review without creating links or payments. Requires `transaction.view`, `view.bill` and `view.invoice` permissions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->transactions()->reconciliationSuggestions($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->reconciliationSuggestions: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reverseTransactionLink()`

```php
reverseTransactionLink($uuid, $linkUuid): null|string|array
```

Reverse a human-confirmed match and its generated payment

Reverse a confirmed match and its generated payment while preserving a reused payment. Requires `transaction_link.edit`, `edit.invoice.revenues` and the target document viewing permission (`view.bill` or `view.invoice`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string
$linkUuid = 'linkUuid_example'; // string

try {
    $result = $api->transactions()->reverseTransactionLink($uuid, $linkUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->reverseTransactionLink: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **linkUuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLink()`

```php
updateLink($uuid, $linkUuid, $addLinkRequest): null|string|array
```

Update a transaction link

Update a transaction link. Send the fields accepted by this operation in the request body. Requires at least one permission: `transaction_link.edit`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | A transaction uuid
$linkUuid = 'linkUuid_example'; // string | A transaction link uuid OR the target uuid
$addLinkRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->transactions()->updateLink($uuid, $linkUuid, $addLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->updateLink: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| A transaction uuid | |
| **linkUuid** | **string**| A transaction link uuid OR the target uuid | |
| **addLinkRequest** | [see updateLink](https://api.accounting.sh/swagger.html#operation/updateLink)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTransaction()`

```php
updateTransaction($uuid, $addTransactionRequest): null|string|array
```

Update a transaction

Update a transaction. Send the fields accepted by this operation in the request body. Requires at least one permission: `transaction.edit`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transaction uuid
$addTransactionRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **addTransactionRequest** | [see updateTransaction](https://api.accounting.sh/swagger.html#operation/updateTransaction)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTransactionCode()`

```php
updateTransactionCode($uuid, $code, $addTransactionCodeRequest): null|string|array
```

Update a transaction's code

Update a transaction's code. Send the fields accepted by this operation in the request body. Requires at least one permission: `transaction_code.edit`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transaction uuid
$code = 'code_example'; // string | Identifier of the code selected by this route.
$addTransactionCodeRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->transactions()->updateTransactionCode($uuid, $code, $addTransactionCodeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->updateTransactionCode: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The transaction uuid | |
| **code** | **string**| Identifier of the code selected by this route. | |
| **addTransactionCodeRequest** | [see updateTransactionCode](https://api.accounting.sh/swagger.html#operation/updateTransactionCode)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewLink()`

```php
viewLink($uuid, $linkUuid): null|string|array
```

View a transaction link

View a transaction link. Use the identifier returned by the corresponding list or create operation. Requires at least one permission: `transaction_link.view`.

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
| **uuid** | **string**| A transaction uuid | |
| **linkUuid** | **string**| A transaction link uuid OR the target uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

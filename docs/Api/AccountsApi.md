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

Add an account. Send the resource fields in the request body; the response contains the saved record. Requires at least one permission: `add.account`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addAccountRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **addAccountRequest** | [see addAccount](https://api.accounting.sh/swagger.html#operation/addAccount)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccount()`

```php
deleteAccount($uuid): null|string|array
```

Delete an account

Delete an account. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `delete.account`.

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

Get an account. Use the identifier returned by the corresponding list or create operation. Requires at least one permission: `view.account`.

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
listAccounts($fields, $page, $perPage, $orderBy): null|string|array
```

List company's accounts

List company's accounts. Retrieve records using the query parameters below. Requires at least one permission: `list.accounts`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,name,bank,currency,journal_number; // string | Comma-separated fields to include in each record. Default fields: uuid, name, bank, currency, journal_number.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->accounts()->listAccounts($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accounts->listAccounts: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, name, bank, currency, journal_number. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccount()`

```php
updateAccount($uuid, $addAccountRequest): null|string|array
```

Update an account

Update an account. Send the fields accepted by this operation in the request body. Requires at least one permission: `edit.account`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The account uuid
$addAccountRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **addAccountRequest** | [see updateAccount](https://api.accounting.sh/swagger.html#operation/updateAccount)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

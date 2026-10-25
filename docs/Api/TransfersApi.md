# Accounting\TransfersApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addTransfer()**](TransfersApi.md#addTransfer) | **POST** /transfers | Add a transfer |
| [**deleteTransfer()**](TransfersApi.md#deleteTransfer) | **DELETE** /transfers/{uuid} | Delete a transfer |
| [**getTransfer()**](TransfersApi.md#getTransfer) | **GET** /transfers/{uuid} | Get a transfer |
| [**listTransfers()**](TransfersApi.md#listTransfers) | **GET** /transfers | List company&#39;s transfers |
| [**updateTransfer()**](TransfersApi.md#updateTransfer) | **PUT** /transfers/{uuid} | Update a transfer |


## `addTransfer()`

```php
addTransfer($addTransferRequest): null|string|array
```

Add a transfer

Add a transfer. Send the resource fields in the request body; the response contains the saved record. Requires at least one permission: `add.transfer`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addTransferRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->transfers()->addTransfer($addTransferRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transfers->addTransfer: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addTransferRequest** | [see addTransfer](https://api.accounting.sh/swagger.html#operation/addTransfer)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTransfer()`

```php
deleteTransfer($uuid): null|string|array
```

Delete a transfer

Delete a transfer. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `delete.transfer`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transfer uuid

try {
    $result = $api->transfers()->deleteTransfer($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transfers->deleteTransfer: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The transfer uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransfer()`

```php
getTransfer($uuid): null|string|array
```

Get a transfer

Get a transfer. Use the identifier returned by the corresponding list or create operation. Requires at least one permission: `view.transfer`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transfer uuid

try {
    $result = $api->transfers()->getTransfer($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transfers->getTransfer: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The transfer uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTransfers()`

```php
listTransfers($fields, $page, $perPage, $orderBy): null|string|array
```

List company's transfers

List company's transfers. Retrieve records using the query parameters below. Requires at least one permission: `list.transfers`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,from,to,amount; // string | Comma-separated fields to include in each record. Default fields: uuid, from, to, amount.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->transfers()->listTransfers($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transfers->listTransfers: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, from, to, amount. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTransfer()`

```php
updateTransfer($uuid, $addTransferRequest): null|string|array
```

Update a transfer

Update a transfer. Send the fields accepted by this operation in the request body. Requires at least one permission: `edit.transfer`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transfer uuid
$addTransferRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->transfers()->updateTransfer($uuid, $addTransferRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transfers->updateTransfer: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The transfer uuid | |
| **addTransferRequest** | [see updateTransfer](https://api.accounting.sh/swagger.html#operation/updateTransfer)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

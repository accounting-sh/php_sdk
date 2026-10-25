# Accounting\ReceiptsApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addReceipt()**](ReceiptsApi.md#addReceipt) | **POST** /receipts | Add a receipt |
| [**deleteReceipt()**](ReceiptsApi.md#deleteReceipt) | **DELETE** /receipts/{uuid} | Delete a receipt |
| [**getReceipt()**](ReceiptsApi.md#getReceipt) | **GET** /receipts/{uuid} | Get a receipt |
| [**getReceiptDocument()**](ReceiptsApi.md#getReceiptDocument) | **GET** /receipts/{uuid}/document | Get a receipt in PDF |
| [**listReceipts()**](ReceiptsApi.md#listReceipts) | **GET** /receipts | List company&#39;s receipts |
| [**updateReceipt()**](ReceiptsApi.md#updateReceipt) | **PUT** /receipts/{uuid} | Update a receipt |


## `addReceipt()`

```php
addReceipt($addReceiptRequest): null|string|array
```

Add a receipt

Add a receipt. Send the resource fields in the request body; the response contains the saved record. Requires at least one permission: `add.receipt`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addReceiptRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->receipts()->addReceipt($addReceiptRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->receipts->addReceipt: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addReceiptRequest** | [see addReceipt](https://api.accounting.sh/swagger.html#operation/addReceipt)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteReceipt()`

```php
deleteReceipt($uuid): null|string|array
```

Delete a receipt

Delete a receipt. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `receipt.delete`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The receipt uuid

try {
    $result = $api->receipts()->deleteReceipt($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->receipts->deleteReceipt: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The receipt uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReceipt()`

```php
getReceipt($uuid): null|string|array
```

Get a receipt

Get a receipt. Use the identifier returned by the corresponding list or create operation. Requires at least one permission: `view.receipt`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The receipt uuid

try {
    $result = $api->receipts()->getReceipt($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->receipts->getReceipt: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The receipt uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReceiptDocument()`

```php
getReceiptDocument($uuid): null|string|array
```

Get a receipt in PDF

Retrieve the generated PDF for this record. HTTP 200 returns application/pdf. If generation is still pending, HTTP 202 returns JSON with success=false and an explanation; retry later. Requires at least one permission: `regenerate.receipt`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The receipt uuid

try {
    $result = $api->receipts()->getReceiptDocument($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->receipts->getReceiptDocument: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The receipt uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listReceipts()`

```php
listReceipts($fields, $page, $perPage, $orderBy): null|string|array
```

List company's receipts

List company's receipts. Retrieve records using the query parameters below. Requires at least one permission: `list.receipts`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,for,from,receipt_number; // string | Comma-separated fields to include in each record. Default fields: uuid, for, from, receipt_number.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->receipts()->listReceipts($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->receipts->listReceipts: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, for, from, receipt_number. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateReceipt()`

```php
updateReceipt($uuid, $updateReceiptRequest): null|string|array
```

Update a receipt

Update a receipt. Send the fields accepted by this operation in the request body. Requires at least one permission: `edit.receipt`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The receipt uuid
$updateReceiptRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->receipts()->updateReceipt($uuid, $updateReceiptRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->receipts->updateReceipt: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The receipt uuid | |
| **updateReceiptRequest** | [see updateReceipt](https://api.accounting.sh/swagger.html#operation/updateReceipt)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

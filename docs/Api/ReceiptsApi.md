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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$addReceiptRequest = [/*...*/]; // array

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
| **addReceiptRequest** | [see addReceipt](https://api.accounting.sh/swagger.html#operation/addReceipt)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteReceipt()`

```php
deleteReceipt($uuid): null|string|array
```

Delete a receipt

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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
getReceiptDocument($uuid)
```

Get a receipt in PDF

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The receipt uuid

try {
    $api->receipts()->getReceiptDocument($uuid);
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
listReceipts($fields, $page, $perPage): null|string|array
```

List company's receipts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->receipts()->listReceipts($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->receipts->listReceipts: ', $e->getMessage(), PHP_EOL;
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

## `updateReceipt()`

```php
updateReceipt($uuid, $addReceiptRequest): null|string|array
```

Update a receipt

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The receipt uuid
$addReceiptRequest = [/*...*/]; // array

try {
    $result = $api->receipts()->updateReceipt($uuid, $addReceiptRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->receipts->updateReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The receipt uuid | |
| **addReceiptRequest** | [see updateReceipt](https://api.accounting.sh/swagger.html#operation/updateReceipt)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

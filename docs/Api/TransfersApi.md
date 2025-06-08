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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$addTransferRequest = [/*...*/]; // array

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
| **addTransferRequest** | [see addTransfer](https://api.accounting.sh/swagger.html#operation/addTransfer)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTransfer()`

```php
deleteTransfer($uuid): null|string|array
```

Delete a transfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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
listTransfers($fields, $page, $perPage): null|string|array
```

List company's transfers

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
    $result = $api->transfers()->listTransfers($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transfers->listTransfers: ', $e->getMessage(), PHP_EOL;
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

## `updateTransfer()`

```php
updateTransfer($uuid, $addTransferRequest): null|string|array
```

Update a transfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transfer uuid
$addTransferRequest = [/*...*/]; // array

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
| **addTransferRequest** | [see updateTransfer](https://api.accounting.sh/swagger.html#operation/updateTransfer)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

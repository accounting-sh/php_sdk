# Accounting\BillsApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addBill()**](BillsApi.md#addBill) | **POST** /expenses/bills | Add a bill |
| [**addBillPayment()**](BillsApi.md#addBillPayment) | **POST** /expenses/bills/{uuid}/payments | Add a bill payment |
| [**deleteBill()**](BillsApi.md#deleteBill) | **DELETE** /expenses/bills/{uuid} | Delete a bill |
| [**getBill()**](BillsApi.md#getBill) | **GET** /expenses/bills/{uuid} | Get a bill |
| [**getBillDocument()**](BillsApi.md#getBillDocument) | **GET** /expenses/bills/{uuid}/document | Get a bill in PDF |
| [**listBills()**](BillsApi.md#listBills) | **GET** /expenses/bills | List company&#39;s bills |
| [**updateBill()**](BillsApi.md#updateBill) | **PUT** /expenses/bills/{uuid} | Update a bill |
| [**updateBillPayment()**](BillsApi.md#updateBillPayment) | **PUT** /expenses/bills/{uuid}/payments/{payment} | Update a bill payment |


## `addBill()`

```php
addBill($addBillRequest): null|string|array
```

Add a bill

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$addBillRequest = [...]; // array

try {
    $result = $api->bills()->addBill($addBillRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->bills->addBill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addBillRequest** | [see addBill](https://api.accounting.sh/swagger.html#operation/addBill)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addBillPayment()`

```php
addBillPayment($uuid, $addBillPaymentRequest): null|string|array
```

Add a bill payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The bill uuid
$addBillPaymentRequest = [...]; // array

try {
    $result = $api->bills()->addBillPayment($uuid, $addBillPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->bills->addBillPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The bill uuid | |
| **addBillPaymentRequest** | [see addBillPayment](https://api.accounting.sh/swagger.html#operation/addBillPayment)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBill()`

```php
deleteBill($uuid): null|string|array
```

Delete a bill

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The bill uuid

try {
    $result = $api->bills()->deleteBill($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->bills->deleteBill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The bill uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBill()`

```php
getBill($uuid): null|string|array
```

Get a bill

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The bill uuid

try {
    $result = $api->bills()->getBill($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->bills->getBill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The bill uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillDocument()`

```php
getBillDocument($uuid)
```

Get a bill in PDF

This endpoint generate a bill in PDF if `selfbilling` is set to true

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The invoice uuid

try {
    $api->bills()->getBillDocument($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->bills->getBillDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The invoice uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBills()`

```php
listBills($fields, $page, $perPage): null|string|array
```

List company's bills

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->bills()->listBills($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->bills->listBills: ', $e->getMessage(), PHP_EOL;
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

## `updateBill()`

```php
updateBill($uuid, $addBillRequest): null|string|array
```

Update a bill

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The bill uuid
$addBillRequest = [...]; // array

try {
    $result = $api->bills()->updateBill($uuid, $addBillRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->bills->updateBill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The bill uuid | |
| **addBillRequest** | [see updateBill](https://api.accounting.sh/swagger.html#operation/updateBill)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBillPayment()`

```php
updateBillPayment($uuid, $payment, $addBillPaymentRequest): null|string|array
```

Update a bill payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The bill uuid
$payment = 'payment_example'; // string | The bill payment uuid
$addBillPaymentRequest = [...]; // array

try {
    $result = $api->bills()->updateBillPayment($uuid, $payment, $addBillPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->bills->updateBillPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The bill uuid | |
| **payment** | **string**| The bill payment uuid | |
| **addBillPaymentRequest** | [see updateBillPayment](https://api.accounting.sh/swagger.html#operation/updateBillPayment)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

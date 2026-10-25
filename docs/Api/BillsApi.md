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

Add a bill. Send the resource fields in the request body; the response contains the saved record. Requires at least one permission: `add.bill`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addBillRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **addBillRequest** | [see addBill](https://api.accounting.sh/swagger.html#operation/addBill)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addBillPayment()`

```php
addBillPayment($uuid, $addBillPaymentRequest): null|string|array
```

Add a bill payment

Add a bill payment. Use the parameters and response fields below for this operation. Requires at least one permission: `add.invoice.payment`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The bill uuid
$addBillPaymentRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **addBillPaymentRequest** | [see addBillPayment](https://api.accounting.sh/swagger.html#operation/addBillPayment)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBill()`

```php
deleteBill($uuid): null|string|array
```

Delete a bill

Delete a bill. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `delete.bill`.

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

Get a bill. Use the identifier returned by the corresponding list or create operation. Requires at least one permission: `view.bill`.

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
getBillDocument($uuid): null|string|array
```

Get a bill in PDF

Retrieve the generated PDF for this record. HTTP 200 returns application/pdf. If generation is still pending, HTTP 202 returns JSON with success=false and an explanation; retry later. Requires at least one permission: `regenerate.invoice`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The invoice uuid

try {
    $result = $api->bills()->getBillDocument($uuid);
    print_r($result);
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
listBills($fields, $page, $perPage, $orderBy): null|string|array
```

List company's bills

List company's bills. Retrieve records using the query parameters below. Requires at least one permission: `list.bills`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,contact,bill_number,status; // string | Comma-separated fields to include in each record. Default fields: uuid, contact, bill_number, status.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->bills()->listBills($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->bills->listBills: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, contact, bill_number, status. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBill()`

```php
updateBill($uuid, $updateBillRequest): null|string|array
```

Update a bill

Update a bill. Send the fields accepted by this operation in the request body. Requires at least one permission: `edit.bill`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The bill uuid
$updateBillRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->bills()->updateBill($uuid, $updateBillRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->bills->updateBill: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The bill uuid | |
| **updateBillRequest** | [see updateBill](https://api.accounting.sh/swagger.html#operation/updateBill)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBillPayment()`

```php
updateBillPayment($uuid, $payment, $addBillPaymentRequest): null|string|array
```

Update a bill payment

Update a bill payment. Send the fields accepted by this operation in the request body. Requires at least one permission: `edit.invoice.revenues`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The bill uuid
$payment = 'payment_example'; // string | The bill payment uuid
$addBillPaymentRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **addBillPaymentRequest** | [see updateBillPayment](https://api.accounting.sh/swagger.html#operation/updateBillPayment)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

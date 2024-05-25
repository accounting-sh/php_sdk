# Accounting\InvoicesApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addInvoice()**](InvoicesApi.md#addInvoice) | **POST** /incomes/invoices | Add an invoice |
| [**addInvoicePayment()**](InvoicesApi.md#addInvoicePayment) | **POST** /incomes/invoices/{uuid}/payments | Add an invoice payment |
| [**deleteInvoice()**](InvoicesApi.md#deleteInvoice) | **DELETE** /incomes/invoices/{uuid} | Delete an invoice |
| [**getInvoice()**](InvoicesApi.md#getInvoice) | **GET** /incomes/invoices/{uuid} | Get an invoice |
| [**getInvoiceDocument()**](InvoicesApi.md#getInvoiceDocument) | **GET** /incomes/invoices/{uuid}/document | Get an invoice in PDF |
| [**listInvoices()**](InvoicesApi.md#listInvoices) | **GET** /incomes/invoices | List company&#39;s invoices |
| [**listUnpaidInvoices()**](InvoicesApi.md#listUnpaidInvoices) | **GET** /incomes/invoices/unpaid | List company&#39;s unpaid invoices |
| [**updateInvoice()**](InvoicesApi.md#updateInvoice) | **PUT** /incomes/invoices/{uuid} | Update an invoice |
| [**updateInvoicePayment()**](InvoicesApi.md#updateInvoicePayment) | **PUT** /incomes/invoices/{uuid}/payments/{payment} | Update an invoice payment |


## `addInvoice()`

```php
addInvoice($addInvoiceRequest): null|string|array
```

Add an invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$addInvoiceRequest = [...]; // array

try {
    $result = $api->invoices()->addInvoice($addInvoiceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->addInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addInvoiceRequest** | [see addInvoice](https://api.accounting.sh/swagger.html#operation/addInvoice)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addInvoicePayment()`

```php
addInvoicePayment($uuid, $addBillPaymentRequest): null|string|array
```

Add an invoice payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The invoice uuid
$addBillPaymentRequest = [...]; // array

try {
    $result = $api->invoices()->addInvoicePayment($uuid, $addBillPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->addInvoicePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The invoice uuid | |
| **addBillPaymentRequest** | [see addInvoicePayment](https://api.accounting.sh/swagger.html#operation/addInvoicePayment)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInvoice()`

```php
deleteInvoice($uuid): null|string|array
```

Delete an invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The invoice uuid

try {
    $result = $api->invoices()->deleteInvoice($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->deleteInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The invoice uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoice()`

```php
getInvoice($uuid): null|string|array
```

Get an invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The invoice uuid

try {
    $result = $api->invoices()->getInvoice($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->getInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The invoice uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceDocument()`

```php
getInvoiceDocument($uuid)
```

Get an invoice in PDF

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The invoice uuid

try {
    $api->invoices()->getInvoiceDocument($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->getInvoiceDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The invoice uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInvoices()`

```php
listInvoices($fields, $page, $perPage): null|string|array
```

List company's invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->invoices()->listInvoices($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->listInvoices: ', $e->getMessage(), PHP_EOL;
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

## `listUnpaidInvoices()`

```php
listUnpaidInvoices(): null|string|array
```

List company's unpaid invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");

try {
    $result = $api->invoices()->listUnpaidInvoices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->listUnpaidInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInvoice()`

```php
updateInvoice($uuid, $addInvoiceRequest): null|string|array
```

Update an invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The invoice uuid
$addInvoiceRequest = [...]; // array

try {
    $result = $api->invoices()->updateInvoice($uuid, $addInvoiceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->updateInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The invoice uuid | |
| **addInvoiceRequest** | [see updateInvoice](https://api.accounting.sh/swagger.html#operation/updateInvoice)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInvoicePayment()`

```php
updateInvoicePayment($uuid, $payment, $addBillPaymentRequest): null|string|array
```

Update an invoice payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The invoice uuid
$payment = 'payment_example'; // string | The invoice payment uuid
$addBillPaymentRequest = [...]; // array

try {
    $result = $api->invoices()->updateInvoicePayment($uuid, $payment, $addBillPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->updateInvoicePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The invoice uuid | |
| **payment** | **string**| The invoice payment uuid | |
| **addBillPaymentRequest** | [see updateInvoicePayment](https://api.accounting.sh/swagger.html#operation/updateInvoicePayment)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# Accounting\InvoicesApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addInvoice()**](InvoicesApi.md#addInvoice) | **POST** /incomes/invoices | Add an invoice |
| [**addInvoicePayment()**](InvoicesApi.md#addInvoicePayment) | **POST** /incomes/invoices/{uuid}/payments | Add an invoice payment |
| [**deleteInvoice()**](InvoicesApi.md#deleteInvoice) | **DELETE** /incomes/invoices/{uuid} | Delete an invoice |
| [**getInvoice()**](InvoicesApi.md#getInvoice) | **GET** /incomes/invoices/{uuid} | Get an invoice |
| [**getInvoiceDocument()**](InvoicesApi.md#getInvoiceDocument) | **GET** /incomes/invoices/{uuid}/document | Get an invoice in PDF |
| [**getInvoiceIssuance()**](InvoicesApi.md#getInvoiceIssuance) | **GET** /incomes/invoices/{uuid}/issuance | Retrieve the immutable source snapshot and original document fingerprints |
| [**listInvoices()**](InvoicesApi.md#listInvoices) | **GET** /incomes/invoices | List company&#39;s invoices |
| [**listUnpaidInvoices()**](InvoicesApi.md#listUnpaidInvoices) | **GET** /incomes/invoices/unpaid | List company&#39;s unpaid invoices |
| [**updateInvoice()**](InvoicesApi.md#updateInvoice) | **PUT** /incomes/invoices/{uuid} | Update an invoice |
| [**updateInvoicePayment()**](InvoicesApi.md#updateInvoicePayment) | **PUT** /incomes/invoices/{uuid}/payments/{payment} | Update an invoice payment |


## `addInvoice()`

```php
addInvoice($addInvoiceRequest): null|string|array
```

Add an invoice

Create an invoice. Send status=draft to keep it editable with a temporary draft reference. The default status is received and triggers issuance, allocating a legal number and freezing invoice facts and original documents. French issuance requires resolved supply, buyer and VAT particulars. UK foreign-currency invoices retain sterling VAT conversion evidence. Requires at least one permission: `add.invoice`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addInvoiceRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **addInvoiceRequest** | [see addInvoice](https://api.accounting.sh/swagger.html#operation/addInvoice)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addInvoicePayment()`

```php
addInvoicePayment($uuid, $addBillPaymentRequest): null|string|array
```

Add an invoice payment

Add an invoice payment. Use the parameters and response fields below for this operation. Requires at least one permission: `add.invoice.payment`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The invoice uuid
$addBillPaymentRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **addBillPaymentRequest** | [see addInvoicePayment](https://api.accounting.sh/swagger.html#operation/addInvoicePayment)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInvoice()`

```php
deleteInvoice($uuid): null|string|array
```

Delete an invoice

Delete an unissued draft. Issued invoices cannot be deleted; use a credit note to correct them. Requires at least one permission: `invoice.delete`.

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

Get an invoice. Use the identifier returned by the corresponding list or create operation. Requires at least one permission: `view.invoice`.

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
getInvoiceDocument($uuid): null|string|array
```

Get an invoice in PDF

Retrieve the generated PDF for this record. HTTP 200 returns application/pdf. If generation is still pending, HTTP 202 returns JSON with success=false and an explanation; retry later. Requires at least one permission: `regenerate.invoice`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The invoice uuid

try {
    $result = $api->invoices()->getInvoiceDocument($uuid);
    print_r($result);
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

## `getInvoiceIssuance()`

```php
getInvoiceIssuance($uuid): null|string|array
```

Retrieve the immutable source snapshot and original document fingerprints

Read the frozen invoice facts, document hashes and archive provenance. Requires permission: `view.invoice`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->invoices()->getInvoiceIssuance($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->getInvoiceIssuance: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInvoices()`

```php
listInvoices($fields, $page, $perPage, $orderBy): null|string|array
```

List company's invoices

List company's invoices. Retrieve records using the query parameters below. Requires at least one permission: `list.invoices`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,contact,status,emitted; // string | Comma-separated fields to include in each record. Default fields: uuid, contact, status, emitted.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->invoices()->listInvoices($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->listInvoices: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, contact, status, emitted. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUnpaidInvoices()`

```php
listUnpaidInvoices(): null|string|array
```

List company's unpaid invoices

List company's unpaid invoices. Use the parameters and response fields below for this operation. Requires at least one permission: `list.invoices`.

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
updateInvoice($uuid, $updateInvoiceRequest): null|string|array
```

Update an invoice

Update a draft or replay unchanged issued facts. Issued invoice facts, lines and original documents are immutable; corrections require a credit note. Omit particulars and vat_conversion to retain existing values; supplying particulars replaces the whole object. Requires at least one permission: `edit.invoice`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The invoice uuid
$updateInvoiceRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->invoices()->updateInvoice($uuid, $updateInvoiceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->updateInvoice: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The invoice uuid | |
| **updateInvoiceRequest** | [see updateInvoice](https://api.accounting.sh/swagger.html#operation/updateInvoice)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInvoicePayment()`

```php
updateInvoicePayment($uuid, $payment, $addBillPaymentRequest): null|string|array
```

Update an invoice payment

Update an invoice payment. Send the fields accepted by this operation in the request body. Requires at least one permission: `edit.invoice.revenues`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The invoice uuid
$payment = 'payment_example'; // string | The invoice payment uuid
$addBillPaymentRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **addBillPaymentRequest** | [see updateInvoicePayment](https://api.accounting.sh/swagger.html#operation/updateInvoicePayment)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

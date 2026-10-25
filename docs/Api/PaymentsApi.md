# Accounting\PaymentsApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addPayment()**](PaymentsApi.md#addPayment) | **POST** /expenses/payments | Add a payment |
| [**deletePayment()**](PaymentsApi.md#deletePayment) | **DELETE** /expenses/payments/{uuid} | Delete a payment |
| [**getPayment()**](PaymentsApi.md#getPayment) | **GET** /expenses/payments/{uuid} | Get a payment |
| [**listPayments()**](PaymentsApi.md#listPayments) | **GET** /expenses/payments | List company&#39;s payments |
| [**updatePayment()**](PaymentsApi.md#updatePayment) | **PUT** /expenses/payments/{uuid} | Update a payment |


## `addPayment()`

```php
addPayment($addPaymentRequest): null|string|array
```

Add a payment

Add a payment. Send the resource fields in the request body; the response contains the saved record. Requires at least one permission: `add.payment`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addPaymentRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->payments()->addPayment($addPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->payments->addPayment: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addPaymentRequest** | [see addPayment](https://api.accounting.sh/swagger.html#operation/addPayment)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePayment()`

```php
deletePayment($uuid): null|string|array
```

Delete a payment

Delete a payment. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `delete.payment`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The payment uuid

try {
    $result = $api->payments()->deletePayment($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->payments->deletePayment: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The payment uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayment()`

```php
getPayment($uuid): null|string|array
```

Get a payment

Get a payment. Use the identifier returned by the corresponding list or create operation. Requires at least one permission: `view.payment`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The payment uuid

try {
    $result = $api->payments()->getPayment($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->payments->getPayment: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The payment uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPayments()`

```php
listPayments($fields, $page, $perPage, $orderBy): null|string|array
```

List company's payments

List company's payments. Retrieve records using the query parameters below. Requires at least one permission: `list.payments`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,amount,currency,contact; // string | Comma-separated fields to include in each record. Default fields: uuid, amount, currency, contact.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->payments()->listPayments($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->payments->listPayments: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, amount, currency, contact. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePayment()`

```php
updatePayment($uuid, $addPaymentRequest): null|string|array
```

Update a payment

Update a payment. Send the fields accepted by this operation in the request body. Requires at least one permission: `edit.payment`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The payment uuid
$addPaymentRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->payments()->updatePayment($uuid, $addPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->payments->updatePayment: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The payment uuid | |
| **addPaymentRequest** | [see updatePayment](https://api.accounting.sh/swagger.html#operation/updatePayment)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

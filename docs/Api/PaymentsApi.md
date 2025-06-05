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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$addPaymentRequest = [/*...*/]; // array

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
| **addPaymentRequest** | [see addPayment](https://api.accounting.sh/swagger.html#operation/addPayment)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePayment()`

```php
deletePayment($uuid): null|string|array
```

Delete a payment

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
listPayments($fields, $page, $perPage): null|string|array
```

List company's payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->payments()->listPayments($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->payments->listPayments: ', $e->getMessage(), PHP_EOL;
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

## `updatePayment()`

```php
updatePayment($uuid, $addPaymentRequest): null|string|array
```

Update a payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The payment uuid
$addPaymentRequest = [/*...*/]; // array

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
| **addPaymentRequest** | [see updatePayment](https://api.accounting.sh/swagger.html#operation/updatePayment)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

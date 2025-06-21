# Accounting\VATIDApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addCompanyVatId()**](VATIDApi.md#addCompanyVatId) | **POST** /companies/{uuid}/vat | Add a company&#39;s Vat Id |
| [**deleteCompanyVatId()**](VATIDApi.md#deleteCompanyVatId) | **DELETE** /companies/{uuid}/vat/{key} | Delete a company&#39;s Vat Id |
| [**getCompanyVatId()**](VATIDApi.md#getCompanyVatId) | **GET** /companies/{uuid}/vat/{key} | Get a company&#39;s Vat Id |
| [**listCompanyVatId()**](VATIDApi.md#listCompanyVatId) | **GET** /companies/{uuid}/vat | List company&#39;s Vat Id |
| [**updateCompanyVatId()**](VATIDApi.md#updateCompanyVatId) | **PUT** /companies/{uuid}/vat/{key} | Update a company&#39;s Vat Id |


## `addCompanyVatId()`

```php
addCompanyVatId($addCompanyVatIdRequest, $uuid): null|string|array
```

Add a company's Vat Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addCompanyVatIdRequest = [/*...*/]; // array
$uuid = 'uuid_example'; // string | The company uuid

try {
    $result = $api->vATID()->addCompanyVatId($addCompanyVatIdRequest, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->vATID->addCompanyVatId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addCompanyVatIdRequest** | [see addCompanyVatId](https://api.accounting.sh/swagger.html#operation/addCompanyVatId)|  | |
| **uuid** | **string**| The company uuid | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCompanyVatId()`

```php
deleteCompanyVatId($key, $uuid): null|string|array
```

Delete a company's Vat Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$key = 'key_example'; // string | The VAT ID uuid
$uuid = 'uuid_example'; // string | The company uuid

try {
    $result = $api->vATID()->deleteCompanyVatId($key, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->vATID->deleteCompanyVatId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The VAT ID uuid | |
| **uuid** | **string**| The company uuid | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompanyVatId()`

```php
getCompanyVatId($key, $uuid): null|string|array
```

Get a company's Vat Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$key = 'key_example'; // string | The VAT ID uuid
$uuid = 'uuid_example'; // string | The company uuid

try {
    $result = $api->vATID()->getCompanyVatId($key, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->vATID->getCompanyVatId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The VAT ID uuid | |
| **uuid** | **string**| The company uuid | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompanyVatId()`

```php
listCompanyVatId($fields, $page, $perPage, $uuid): null|string|array
```

List company's Vat Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page
$uuid = 'uuid_example'; // string | The company uuid

try {
    $result = $api->vATID()->listCompanyVatId($fields, $page, $perPage, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->vATID->listCompanyVatId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| A comma separated list of fields requested in the response | [optional] |
| **page** | **string**| The response page | [optional] |
| **perPage** | **string**| The number of items per page | [optional] |
| **uuid** | **string**| The company uuid | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCompanyVatId()`

```php
updateCompanyVatId($key, $addCompanyVatIdRequest, $uuid): null|string|array
```

Update a company's Vat Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$key = 'key_example'; // string | The VAT ID uuid
$addCompanyVatIdRequest = [/*...*/]; // array
$uuid = 'uuid_example'; // string | The company uuid

try {
    $result = $api->vATID()->updateCompanyVatId($key, $addCompanyVatIdRequest, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->vATID->updateCompanyVatId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The VAT ID uuid | |
| **addCompanyVatIdRequest** | [see updateCompanyVatId](https://api.accounting.sh/swagger.html#operation/updateCompanyVatId)|  | |
| **uuid** | **string**| The company uuid | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

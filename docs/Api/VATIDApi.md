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
addCompanyVatId($uuid, $addCompanyVatIdRequest): null|string|array
```

Add a company's Vat Id

Add a company's Vat Id. Send the resource fields in the request body; the response contains the saved record. Requires at least one permission: `vat.add`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$addCompanyVatIdRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->vATID()->addCompanyVatId($uuid, $addCompanyVatIdRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->vATID->addCompanyVatId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The company uuid | |
| **addCompanyVatIdRequest** | [see addCompanyVatId](https://api.accounting.sh/swagger.html#operation/addCompanyVatId)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCompanyVatId()`

```php
deleteCompanyVatId($uuid, $key): null|string|array
```

Delete a company's Vat Id

Delete a company's Vat Id. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `vat.delete`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$key = 'key_example'; // string | The VAT ID uuid

try {
    $result = $api->vATID()->deleteCompanyVatId($uuid, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->vATID->deleteCompanyVatId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The company uuid | |
| **key** | **string**| The VAT ID uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompanyVatId()`

```php
getCompanyVatId($uuid, $key): null|string|array
```

Get a company's Vat Id

Get a company's Vat Id. Use the identifier returned by the corresponding list or create operation. Requires at least one permission: `vat.view`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$key = 'key_example'; // string | The VAT ID uuid

try {
    $result = $api->vATID()->getCompanyVatId($uuid, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->vATID->getCompanyVatId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The company uuid | |
| **key** | **string**| The VAT ID uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompanyVatId()`

```php
listCompanyVatId($uuid, $fields, $page, $perPage, $orderBy): null|string|array
```

List company's Vat Id

List company's Vat Id. Retrieve records using the query parameters below. Requires at least one permission: `vat.list`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$fields = uuid,vat_id,country; // string | Comma-separated fields to include in each record. Default fields: uuid, vat_id, country.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->vATID()->listCompanyVatId($uuid, $fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->vATID->listCompanyVatId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The company uuid | |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, vat_id, country. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCompanyVatId()`

```php
updateCompanyVatId($uuid, $key, $addCompanyVatIdRequest): null|string|array
```

Update a company's Vat Id

Update a company's Vat Id. Send the fields accepted by this operation in the request body. Requires at least one permission: `vat.edit`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$key = 'key_example'; // string | The VAT ID uuid
$addCompanyVatIdRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->vATID()->updateCompanyVatId($uuid, $key, $addCompanyVatIdRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->vATID->updateCompanyVatId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The company uuid | |
| **key** | **string**| The VAT ID uuid | |
| **addCompanyVatIdRequest** | [see updateCompanyVatId](https://api.accounting.sh/swagger.html#operation/updateCompanyVatId)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

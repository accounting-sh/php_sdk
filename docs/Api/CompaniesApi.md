# Accounting\CompaniesApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addCompany()**](CompaniesApi.md#addCompany) | **POST** /companies | Add a company (resellers only) |
| [**deleteCompany()**](CompaniesApi.md#deleteCompany) | **DELETE** /companies/{uuid} | Delete a company |
| [**getCompany()**](CompaniesApi.md#getCompany) | **GET** /companies/{uuid} | Get a company |
| [**getCompanyCustomization()**](CompaniesApi.md#getCompanyCustomization) | **GET** /companies/{uuid}/customization | Get a company&#39;s customization parameters |
| [**getCompanyFeatureSet()**](CompaniesApi.md#getCompanyFeatureSet) | **GET** /companies/{uuid}/features | List a company&#39;s feature set |
| [**getCompanyOnboarding()**](CompaniesApi.md#getCompanyOnboarding) | **GET** /companies/{uuid}/onboarding | Get company onboarding status |
| [**listCompanies()**](CompaniesApi.md#listCompanies) | **GET** /companies | List companies on this instance (resellers only) |
| [**updateCompany()**](CompaniesApi.md#updateCompany) | **PUT** /companies/{uuid} | Update a company |


## `addCompany()`

```php
addCompany($addCompanyRequest): null|string|array
```

Add a company (resellers only)

Restricted to resellers. Add a company. Send the resource fields in the request body; the response contains the saved record. Requires at least one permission: `add.company`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addCompanyRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->companies()->addCompany($addCompanyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->companies->addCompany: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addCompanyRequest** | [see addCompany](https://api.accounting.sh/swagger.html#operation/addCompany)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCompany()`

```php
deleteCompany($uuid): null|string|array
```

Delete a company

Delete a company. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `company.delete`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid

try {
    $result = $api->companies()->deleteCompany($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->companies->deleteCompany: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The company uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompany()`

```php
getCompany($uuid): null|string|array
```

Get a company

Get a company. Use the identifier returned by the corresponding list or create operation. Requires at least one permission: `view.company`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid

try {
    $result = $api->companies()->getCompany($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->companies->getCompany: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The company uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompanyCustomization()`

```php
getCompanyCustomization($uuid): null|string|array
```

Get a company's customization parameters

Get a company's customization parameters. Use the parameters and response fields below for this operation. Requires authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid

try {
    $result = $api->companies()->getCompanyCustomization($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->companies->getCompanyCustomization: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The company uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompanyFeatureSet()`

```php
getCompanyFeatureSet($uuid): null|string|array
```

List a company's feature set

Retrieve the features enabled for the authenticated company. The company identifier must match the company associated with your authentication. Requires authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | Identifier of the authenticated company.

try {
    $result = $api->companies()->getCompanyFeatureSet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->companies->getCompanyFeatureSet: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Identifier of the authenticated company. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompanyOnboarding()`

```php
getCompanyOnboarding($uuid): null|string|array
```

Get company onboarding status

Get the company's current onboarding version and completion status. When incomplete, returns missing setting keys and the fiscal year end (default 31/12). French companies are checked for invoice.FR.franchise_en_base and invoice.FR.vat_on_debits; all companies are checked for preferred.locale. A completed response omits missing_settings and fiscal_year_end. Requires at least one permission: `view.company`, `edit.company`, `edit.company.settings`, `view.company.settings`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The authenticated company's UUID.

try {
    $result = $api->companies()->getCompanyOnboarding($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->companies->getCompanyOnboarding: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The authenticated company&#39;s UUID. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompanies()`

```php
listCompanies($fields, $page, $perPage, $orderBy): null|string|array
```

List companies on this instance (resellers only)

Restricted to resellers. List companies on this instance. Retrieve records using the query parameters below. Requires at least one permission: `list.companies`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,name,currency,prefix; // string | Comma-separated fields to include in each record. Default fields: uuid, name, currency, prefix.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->companies()->listCompanies($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->companies->listCompanies: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, name, currency, prefix. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCompany()`

```php
updateCompany($uuid, $addCompanyRequest): null|string|array
```

Update a company

Update a company. Send the fields accepted by this operation in the request body. Omitted optional fields retain their existing values. Requires at least one permission: `edit.company`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$addCompanyRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->companies()->updateCompany($uuid, $addCompanyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->companies->updateCompany: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The company uuid | |
| **addCompanyRequest** | [see updateCompany](https://api.accounting.sh/swagger.html#operation/updateCompany)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# Accounting\CompaniesApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addCompany()**](CompaniesApi.md#addCompany) | **POST** /companies | Add a company |
| [**deleteCompany()**](CompaniesApi.md#deleteCompany) | **DELETE** /companies/{uuid} | Delete a company |
| [**getCompany()**](CompaniesApi.md#getCompany) | **GET** /companies/{uuid} | Get a company |
| [**getCompanyCustomization()**](CompaniesApi.md#getCompanyCustomization) | **GET** /companies/{uuid}/customization | Get a company&#39;s customization parameters |
| [**getCompanyFeatureSet()**](CompaniesApi.md#getCompanyFeatureSet) | **GET** /companies/{uuid}/features | List a company&#39;s feature set |
| [**listCompanies()**](CompaniesApi.md#listCompanies) | **GET** /companies | List companies on this instance |
| [**updateCompany()**](CompaniesApi.md#updateCompany) | **PUT** /companies/{uuid} | Update a company |


## `addCompany()`

```php
addCompany($addCompanyRequest): null|string|array
```

Add a company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$addCompanyRequest = [/*...*/]; // array

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
| **addCompanyRequest** | [see addCompany](https://api.accounting.sh/swagger.html#operation/addCompany)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCompany()`

```php
deleteCompany($uuid): null|string|array
```

Delete a company

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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid

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
| **uuid** | **string**| The company uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompanies()`

```php
listCompanies($fields, $page, $perPage): null|string|array
```

List companies on this instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->companies()->listCompanies($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->companies->listCompanies: ', $e->getMessage(), PHP_EOL;
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

## `updateCompany()`

```php
updateCompany($uuid, $addCompanyRequest): null|string|array
```

Update a company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$addCompanyRequest = [/*...*/]; // array

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
| **addCompanyRequest** | [see updateCompany](https://api.accounting.sh/swagger.html#operation/updateCompany)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# Accounting\ContactsApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addContact()**](ContactsApi.md#addContact) | **POST** /contacts | Create a new contact |
| [**deleteContact()**](ContactsApi.md#deleteContact) | **DELETE** /contacts/{uuid} | Delete a contact |
| [**getContact()**](ContactsApi.md#getContact) | **GET** /contacts/{uuid} | Retrieve a contact |
| [**listContactBills()**](ContactsApi.md#listContactBills) | **GET** /contacts/{uuid}/bills | List a contact&#39;s bills |
| [**listContactInvoices()**](ContactsApi.md#listContactInvoices) | **GET** /contacts/{uuid}/invoices | List a contact&#39;s invoices |
| [**listContacts()**](ContactsApi.md#listContacts) | **GET** /contacts | List company&#39;s contacts |
| [**updateContact()**](ContactsApi.md#updateContact) | **PUT** /contacts/{uuid} | Update a contact |


## `addContact()`

```php
addContact($addContactRequest): null|string|array
```

Create a new contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$addContactRequest = [/*...*/]; // array

try {
    $result = $api->contacts()->addContact($addContactRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->contacts->addContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addContactRequest** | [see addContact](https://api.accounting.sh/swagger.html#operation/addContact)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContact()`

```php
deleteContact($uuid): null|string|array
```

Delete a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The contact uuid

try {
    $result = $api->contacts()->deleteContact($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->contacts->deleteContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The contact uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContact()`

```php
getContact($uuid): null|string|array
```

Retrieve a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The contact uuid

try {
    $result = $api->contacts()->getContact($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->contacts->getContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The contact uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContactBills()`

```php
listContactBills($uuid, $fields, $page, $perPage): null|string|array
```

List a contact's bills

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The contact uuid
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->contacts()->listContactBills($uuid, $fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->contacts->listContactBills: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The contact uuid | [optional] |
| **fields** | **string**| A comma separated list of fields requested in the response | [optional] |
| **page** | **string**| The response page | [optional] |
| **perPage** | **string**| The number of items per page | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContactInvoices()`

```php
listContactInvoices($uuid, $fields, $page, $perPage): null|string|array
```

List a contact's invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The contact uuid
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->contacts()->listContactInvoices($uuid, $fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->contacts->listContactInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The contact uuid | |
| **fields** | **string**| A comma separated list of fields requested in the response | [optional] |
| **page** | **string**| The response page | [optional] |
| **perPage** | **string**| The number of items per page | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContacts()`

```php
listContacts($fields, $page, $perPage): null|string|array
```

List company's contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->contacts()->listContacts($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->contacts->listContacts: ', $e->getMessage(), PHP_EOL;
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

## `updateContact()`

```php
updateContact($uuid, $addContactRequest): null|string|array
```

Update a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The contact uuid
$addContactRequest = [/*...*/]; // array

try {
    $result = $api->contacts()->updateContact($uuid, $addContactRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->contacts->updateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The contact uuid | |
| **addContactRequest** | [see updateContact](https://api.accounting.sh/swagger.html#operation/updateContact)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

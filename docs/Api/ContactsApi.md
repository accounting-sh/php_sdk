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

Create a new contact. Send the resource fields in the request body; the response contains the saved record. Requires at least one permission: `add.contact`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addContactRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **addContactRequest** | [see addContact](https://api.accounting.sh/swagger.html#operation/addContact)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContact()`

```php
deleteContact($uuid): null|string|array
```

Delete a contact

Delete a contact. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `delete.contact`.

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

Retrieve a contact. Use the identifier returned by the corresponding list or create operation. Requires at least one permission: `view.contact`.

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
listContactBills($uuid, $fields, $page, $perPage, $orderBy): null|string|array
```

List a contact's bills

List a contact's bills. Use the parameters and response fields below for this operation. Requires at least one permission: `list.bills`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The contact uuid
$fields = uuid,vendor,bill_number,status; // string | Comma-separated fields to include in each record. Default fields: uuid, vendor, bill_number, status.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->contacts()->listContactBills($uuid, $fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->contacts->listContactBills: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The contact uuid | |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, vendor, bill_number, status. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContactInvoices()`

```php
listContactInvoices($uuid, $fields, $page, $perPage, $orderBy): null|string|array
```

List a contact's invoices

List a contact's invoices. Use the parameters and response fields below for this operation. Requires at least one permission: `list.invoices`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The contact uuid
$fields = uuid,customer,status,emitted; // string | Comma-separated fields to include in each record. Default fields: uuid, customer, status, emitted.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->contacts()->listContactInvoices($uuid, $fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->contacts->listContactInvoices: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The contact uuid | |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, customer, status, emitted. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContacts()`

```php
listContacts($fields, $page, $perPage, $orderBy): null|string|array
```

List company's contacts

List company's contacts. Retrieve records using the query parameters below. Requires at least one permission: `list.contacts`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,name,prefix,currency,registration_number; // string | Comma-separated fields to include in each record. Default fields: uuid, name, prefix, currency, registration_number. Optional buyer_type is the explicit business/consumer override; null uses automatic inference.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->contacts()->listContacts($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->contacts->listContacts: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, name, prefix, currency, registration_number. Optional buyer_type is the explicit business/consumer override; null uses automatic inference. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContact()`

```php
updateContact($uuid, $addContactRequest): null|string|array
```

Update a contact

Update a contact. Send the fields accepted by this operation in the request body. Requires at least one permission: `edit.contact`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The contact uuid
$addContactRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **addContactRequest** | [see updateContact](https://api.accounting.sh/swagger.html#operation/updateContact)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

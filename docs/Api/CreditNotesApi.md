# Accounting\CreditNotesApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addCreditNote()**](CreditNotesApi.md#addCreditNote) | **POST** /incomes/credit-notes | Issue a partial credit note or credit the remaining invoice balance |
| [**deleteCreditNote()**](CreditNotesApi.md#deleteCreditNote) | **DELETE** /incomes/credit-notes/{uuid} | Issued credit notes cannot be deleted |
| [**getCreditNote()**](CreditNotesApi.md#getCreditNote) | **GET** /incomes/credit-notes/{uuid} | Retrieve an issued credit note |
| [**getCreditNoteDocument()**](CreditNotesApi.md#getCreditNoteDocument) | **GET** /incomes/credit-notes/{uuid}/document | Download the immutable credit note PDF |
| [**listCreditNotes()**](CreditNotesApi.md#listCreditNotes) | **GET** /incomes/credit-notes | List this company&#39;s issued credit notes |
| [**updateCreditNote()**](CreditNotesApi.md#updateCreditNote) | **PUT** /incomes/credit-notes/{uuid} | Issued credit notes cannot be updated |


## `addCreditNote()`

```php
addCreditNote($addCreditNoteRequest): null|string|array
```

Issue a partial credit note or credit the remaining invoice balance

Issue an immutable credit note against an issued invoice. Omit items to credit the remaining balance or select original line UUIDs with positive quantities and optional positive net unit prices. Returned credit amounts are negative. replacement=true also creates a replacement draft for a full reversal with no previous credit notes. Requires permission: `correct.invoice`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addCreditNoteRequest = [/*...*/]; // array

try {
    $result = $api->creditNotes()->addCreditNote($addCreditNoteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->creditNotes->addCreditNote: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addCreditNoteRequest** | [see addCreditNote](https://api.accounting.sh/swagger.html#operation/addCreditNote)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCreditNote()`

```php
deleteCreditNote($uuid)
```

Issued credit notes cannot be deleted

Issued credit notes are immutable. Returns 404 for unknown or other-company identifiers and 409 for owned issued notes. Requires permission: `correct.invoice`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $api->creditNotes()->deleteCreditNote($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->creditNotes->deleteCreditNote: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreditNote()`

```php
getCreditNote($uuid): null|string|array
```

Retrieve an issued credit note

Retrieve the frozen credit note and its signed line amounts. Requires permission: `view.invoice`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->creditNotes()->getCreditNote($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->creditNotes->getCreditNote: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreditNoteDocument()`

```php
getCreditNoteDocument($uuid): null|string|array
```

Download the immutable credit note PDF

Download the archived original PDF after integrity verification; returns HTTP 202 JSON while Async generation is pending. Requires permission: `view.invoice`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->creditNotes()->getCreditNoteDocument($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->creditNotes->getCreditNoteDocument: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCreditNotes()`

```php
listCreditNotes($page, $perPage): null|string|array
```

List this company's issued credit notes

List issued credit notes for the authenticated company. Pages start at 1, default page size is 10, and page size is clamped to 1–100. Requires permission: `list.invoices`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$page = 56; // int
$perPage = 56; // int

try {
    $result = $api->creditNotes()->listCreditNotes($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->creditNotes->listCreditNotes: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **perPage** | **int**|  | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCreditNote()`

```php
updateCreditNote($uuid)
```

Issued credit notes cannot be updated

Issued credit notes are immutable. Returns 404 for unknown or other-company identifiers and 409 for owned issued notes. Requires permission: `correct.invoice`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $api->creditNotes()->updateCreditNote($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->creditNotes->updateCreditNote: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

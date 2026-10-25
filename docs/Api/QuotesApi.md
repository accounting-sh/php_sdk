# Accounting\QuotesApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addQuote()**](QuotesApi.md#addQuote) | **POST** /quotes | Add a quote |
| [**deleteQuote()**](QuotesApi.md#deleteQuote) | **DELETE** /quotes/{uuid} | Delete a quote |
| [**getQuote()**](QuotesApi.md#getQuote) | **GET** /quotes/{uuid} | Get a quote |
| [**getQuoteDocument()**](QuotesApi.md#getQuoteDocument) | **GET** /quotes/{uuid}/document | Get a quote in PDF |
| [**listQuotes()**](QuotesApi.md#listQuotes) | **GET** /quotes | List company&#39;s quotes |
| [**updateQuote()**](QuotesApi.md#updateQuote) | **PUT** /quotes/{uuid} | Update a quote |


## `addQuote()`

```php
addQuote($addQuoteRequest): null|string|array
```

Add a quote

Add a quote. Send the resource fields in the request body; the response contains the saved record. Requires at least one permission: `add.quote`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addQuoteRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->quotes()->addQuote($addQuoteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->quotes->addQuote: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addQuoteRequest** | [see addQuote](https://api.accounting.sh/swagger.html#operation/addQuote)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteQuote()`

```php
deleteQuote($uuid): null|string|array
```

Delete a quote

Delete a quote. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `quote.delete`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The quote uuid

try {
    $result = $api->quotes()->deleteQuote($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->quotes->deleteQuote: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The quote uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getQuote()`

```php
getQuote($uuid): null|string|array
```

Get a quote

Get a quote. Use the identifier returned by the corresponding list or create operation. Requires at least one permission: `view.quote`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The quote uuid

try {
    $result = $api->quotes()->getQuote($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->quotes->getQuote: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The quote uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getQuoteDocument()`

```php
getQuoteDocument($uuid): null|string|array
```

Get a quote in PDF

Retrieve the generated PDF for this record. HTTP 200 returns application/pdf. If generation is still pending, HTTP 202 returns JSON with success=false and an explanation; retry later. Requires at least one permission: `regenerate.quote`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The quote uuid

try {
    $result = $api->quotes()->getQuoteDocument($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->quotes->getQuoteDocument: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The quote uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listQuotes()`

```php
listQuotes($fields, $page, $perPage, $orderBy): null|string|array
```

List company's quotes

List company's quotes. Retrieve records using the query parameters below. Requires at least one permission: `list.quotes`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,contact,quote_number,status; // string | Comma-separated fields to include in each record. Default fields: uuid, contact, quote_number, status.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->quotes()->listQuotes($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->quotes->listQuotes: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, contact, quote_number, status. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateQuote()`

```php
updateQuote($uuid, $updateQuoteRequest): null|string|array
```

Update a quote

Update a quote. Send the fields accepted by this operation in the request body. Requires at least one permission: `edit.quote`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The quote uuid
$updateQuoteRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->quotes()->updateQuote($uuid, $updateQuoteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->quotes->updateQuote: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The quote uuid | |
| **updateQuoteRequest** | [see updateQuote](https://api.accounting.sh/swagger.html#operation/updateQuote)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

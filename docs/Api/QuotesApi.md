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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addQuoteRequest = [/*...*/]; // array

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
| **addQuoteRequest** | [see addQuote](https://api.accounting.sh/swagger.html#operation/addQuote)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteQuote()`

```php
deleteQuote($uuid): null|string|array
```

Delete a quote

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
getQuoteDocument($uuid)
```

Get a quote in PDF

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The quote uuid

try {
    $api->quotes()->getQuoteDocument($uuid);
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
listQuotes($fields, $page, $perPage): null|string|array
```

List company's quotes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->quotes()->listQuotes($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->quotes->listQuotes: ', $e->getMessage(), PHP_EOL;
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

## `updateQuote()`

```php
updateQuote($uuid, $addQuoteRequest): null|string|array
```

Update a quote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The quote uuid
$addQuoteRequest = [/*...*/]; // array

try {
    $result = $api->quotes()->updateQuote($uuid, $addQuoteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->quotes->updateQuote: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The quote uuid | |
| **addQuoteRequest** | [see updateQuote](https://api.accounting.sh/swagger.html#operation/updateQuote)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

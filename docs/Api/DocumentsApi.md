# Accounting\DocumentsApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelReview()**](DocumentsApi.md#cancelReview) | **DELETE** /documents/{uuid}/review | Cancel document review |
| [**deleteDocument()**](DocumentsApi.md#deleteDocument) | **DELETE** /documents/{uuid} | Delete a document |
| [**getDocument()**](DocumentsApi.md#getDocument) | **GET** /documents/{uuid} | Get a document |
| [**listDocuments()**](DocumentsApi.md#listDocuments) | **GET** /documents | List company&#39;s documents |
| [**processDocument()**](DocumentsApi.md#processDocument) | **GET** /documents/{uuid}/process | Process a document |
| [**reviewUrl()**](DocumentsApi.md#reviewUrl) | **GET** /documents/{uuid}/review | Get url to review a document |
| [**updateDocument()**](DocumentsApi.md#updateDocument) | **PUT** /documents/{uuid} | Update a document |
| [**uploadDocument()**](DocumentsApi.md#uploadDocument) | **POST** /documents | Upload a document |
| [**viewDocument()**](DocumentsApi.md#viewDocument) | **GET** /documents/{uuid}/view | View a document |


## `cancelReview()`

```php
cancelReview($uuid): null|string|array
```

Cancel document review

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The document uuid

try {
    $result = $api->documents()->cancelReview($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->documents->cancelReview: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The document uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDocument()`

```php
deleteDocument($uuid): null|string|array
```

Delete a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The document uuid

try {
    $result = $api->documents()->deleteDocument($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->documents->deleteDocument: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The document uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocument()`

```php
getDocument($uuid): null|string|array
```

Get a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The document uuid

try {
    $result = $api->documents()->getDocument($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->documents->getDocument: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The document uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDocuments()`

```php
listDocuments($fields, $page, $perPage): null|string|array
```

List company's documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->documents()->listDocuments($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->documents->listDocuments: ', $e->getMessage(), PHP_EOL;
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

## `processDocument()`

```php
processDocument($uuid): null|string|array
```

Process a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The document uuid

try {
    $result = $api->documents()->processDocument($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->documents->processDocument: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The document uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reviewUrl()`

```php
reviewUrl($uuid): null|string|array
```

Get url to review a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The document uuid

try {
    $result = $api->documents()->reviewUrl($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->documents->reviewUrl: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The document uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDocument()`

```php
updateDocument($uuid, $updateDocumentRequest): null|string|array
```

Update a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The document uuid
$updateDocumentRequest = [/*...*/]; // array

try {
    $result = $api->documents()->updateDocument($uuid, $updateDocumentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->documents->updateDocument: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The document uuid | |
| **updateDocumentRequest** | [see updateDocument](https://api.accounting.sh/swagger.html#operation/updateDocument)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadDocument()`

```php
uploadDocument($name, $file): null|string|array
```

Upload a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$name = 'name_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $api->documents()->uploadDocument($name, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->documents->uploadDocument: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
| **file** | [see uploadDocument](https://api.accounting.sh/swagger.html#operation/uploadDocument)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewDocument()`

```php
viewDocument($uuid)
```

View a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The document uuid

try {
    $api->documents()->viewDocument($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->documents->viewDocument: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The document uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

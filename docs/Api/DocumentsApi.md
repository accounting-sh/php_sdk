# Accounting\DocumentsApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteDocument()**](DocumentsApi.md#deleteDocument) | **DELETE** /documents/{uuid} | Delete a document |
| [**getDocument()**](DocumentsApi.md#getDocument) | **GET** /documents/{uuid} | Get a document |
| [**listDocuments()**](DocumentsApi.md#listDocuments) | **GET** /documents | List company&#39;s documents |
| [**processDocument()**](DocumentsApi.md#processDocument) | **GET** /documents/{uuid}/process | Process a document |
| [**reviewDocumentRetention()**](DocumentsApi.md#reviewDocumentRetention) | **PUT** /documents/{uuid}/retention | Review accounting retention or a legal hold |
| [**updateDocument()**](DocumentsApi.md#updateDocument) | **PUT** /documents/{uuid} | Update a document |
| [**uploadDocument()**](DocumentsApi.md#uploadDocument) | **POST** /documents | Upload a document |
| [**viewDocument()**](DocumentsApi.md#viewDocument) | **GET** /documents/{uuid}/view | View a document |


## `deleteDocument()`

```php
deleteDocument($uuid): null|string|array
```

Delete a document

Delete a document. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `delete.document`.

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

Get a document. Use the identifier returned by the corresponding list or create operation. Requires at least one permission: `view.document`.

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
listDocuments($fields, $page, $perPage, $orderBy): null|string|array
```

List company's documents

List company's documents. Retrieve records using the query parameters below. Requires at least one permission: `list.documents`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,name,mimetype; // string | Comma-separated fields to include in each record. Default fields: uuid, name, mimetype.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->documents()->listDocuments($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->documents->listDocuments: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, name, mimetype. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processDocument()`

```php
processDocument($uuid): null|string|array
```

Process a document

Queue background processing of the uploaded document. A successful response acknowledges the queued job, not completed extraction. Already processed documents return 400. This GET starts work; avoid automatic retries. Requires at least one permission: `process.document`.

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

## `reviewDocumentRetention()`

```php
reviewDocumentRetention($uuid, $reviewDocumentRetentionRequest): null|string|array
```

Review accounting retention or a legal hold

Review the accounting anchor, retention category or legal hold. This cannot shorten existing protection or change the frozen jurisdiction. Send hold=null explicitly to release a hold. Requires permission: `manage.document.retention`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string
$reviewDocumentRetentionRequest = [/*...*/]; // array

try {
    $result = $api->documents()->reviewDocumentRetention($uuid, $reviewDocumentRetentionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->documents->reviewDocumentRetention: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **reviewDocumentRetentionRequest** | [see reviewDocumentRetention](https://api.accounting.sh/swagger.html#operation/reviewDocumentRetention)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDocument()`

```php
updateDocument($uuid, $updateDocumentRequest): null|string|array
```

Update a document

Update a document. Send the fields accepted by this operation in the request body. Requires at least one permission: `edit.document`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The document uuid
$updateDocumentRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **updateDocumentRequest** | [see updateDocument](https://api.accounting.sh/swagger.html#operation/updateDocument)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadDocument()`

```php
uploadDocument($name, $file): null|string|array
```

Upload a document

Upload a document. Send the resource fields in the request body; the response contains the saved record. Requires at least one permission: `add.document`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$name = 'name_example'; // string | Human-readable name or label.
$file = "/path/to/file.txt"; // \SplFileObject | File to upload. Send this field as a file part in a multipart/form-data request.

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
| **name** | **string**| Human-readable name or label. | |
| **file** | **\SplFileObject****\SplFileObject**| File to upload. Send this field as a file part in a multipart/form-data request. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewDocument()`

```php
viewDocument($uuid)
```

View a document

Download the stored document content. The response is a file, rather than a JSON resource envelope. Requires at least one permission: `view.document`.

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

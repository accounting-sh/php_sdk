# Accounting\FRSuperPDPApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**frSuperPdpApprove()**](FRSuperPDPApi.md#frSuperPdpApprove) | **PUT** /fr/superpdp/inbox/{uuid}/approve | Approve a received invoice |
| [**frSuperPdpAuthorize()**](FRSuperPDPApi.md#frSuperPdpAuthorize) | **POST** /fr/superpdp/authorize | Create a SuperPDP consent URL |
| [**frSuperPdpCallback()**](FRSuperPDPApi.md#frSuperPdpCallback) | **POST** /fr/superpdp/callback | Complete SuperPDP consent |
| [**frSuperPdpClassify()**](FRSuperPDPApi.md#frSuperPdpClassify) | **PUT** /fr/superpdp/operations/{uuid}/classification | Classify reporting lines |
| [**frSuperPdpConfigure()**](FRSuperPDPApi.md#frSuperPdpConfigure) | **PUT** /fr/superpdp/settings | Configure SuperPDP synchronization |
| [**frSuperPdpDisconnect()**](FRSuperPDPApi.md#frSuperPdpDisconnect) | **DELETE** /fr/superpdp | Disconnect SuperPDP |
| [**frSuperPdpInbox()**](FRSuperPDPApi.md#frSuperPdpInbox) | **GET** /fr/superpdp/inbox | List received invoices |
| [**frSuperPdpLifecycle()**](FRSuperPDPApi.md#frSuperPdpLifecycle) | **POST** /fr/superpdp/operations/{uuid}/events | Queue a buyer lifecycle event |
| [**frSuperPdpOperations()**](FRSuperPDPApi.md#frSuperPdpOperations) | **GET** /fr/superpdp/operations | List SuperPDP operations |
| [**frSuperPdpReceipt()**](FRSuperPDPApi.md#frSuperPdpReceipt) | **GET** /fr/superpdp/inbox/{uuid} | Get a received invoice |
| [**frSuperPdpReceiptHistory()**](FRSuperPDPApi.md#frSuperPdpReceiptHistory) | **GET** /fr/superpdp/inbox/{uuid}/history | Get received invoice history |
| [**frSuperPdpReceiptPdf()**](FRSuperPDPApi.md#frSuperPdpReceiptPdf) | **GET** /fr/superpdp/inbox/{uuid}/pdf | Get a received invoice PDF |
| [**frSuperPdpReconcile()**](FRSuperPDPApi.md#frSuperPdpReconcile) | **PUT** /fr/superpdp/operations/{uuid}/reconcile | Reconcile a reporting submission |
| [**frSuperPdpRefuse()**](FRSuperPDPApi.md#frSuperPdpRefuse) | **PUT** /fr/superpdp/inbox/{uuid}/refuse | Refuse a received invoice |
| [**frSuperPdpRetry()**](FRSuperPDPApi.md#frSuperPdpRetry) | **PUT** /fr/superpdp/operations/{uuid}/retry | Retry a SuperPDP operation |
| [**frSuperPdpSettings()**](FRSuperPDPApi.md#frSuperPdpSettings) | **GET** /fr/superpdp/settings | Get SuperPDP settings |
| [**frSuperPdpStatus()**](FRSuperPDPApi.md#frSuperPdpStatus) | **GET** /fr/superpdp | Get SuperPDP connection status |
| [**frSuperPdpSubmit()**](FRSuperPDPApi.md#frSuperPdpSubmit) | **POST** /fr/superpdp/submit | Submit an issued invoice |
| [**frSuperPdpSync()**](FRSuperPDPApi.md#frSuperPdpSync) | **POST** /fr/superpdp/sync | Queue SuperPDP synchronization |
| [**frSuperPdpVerify()**](FRSuperPDPApi.md#frSuperPdpVerify) | **POST** /fr/superpdp/verify | Queue SuperPDP verification |


## `frSuperPdpApprove()`

```php
frSuperPdpApprove($uuid)
```

Approve a received invoice

Record human approval and queue import of the exact reviewed PDF; duplicate approvals do not create another bill. Requires the `add.bill` permission and the `einvoicing` company feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $api->fRSuperPDP()->frSuperPdpApprove($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->fRSuperPDP->frSuperPdpApprove: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `frSuperPdpAuthorize()`

```php
frSuperPdpAuthorize()
```

Create a SuperPDP consent URL

Create a consent URL for the authenticated company without exposing provider credentials. Requires the `edit.company` permission and the `einvoicing` company feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $api->fRSuperPDP()->frSuperPdpAuthorize();
} catch (Exception $e) {
    echo 'Exception when calling Accounting->fRSuperPDP->frSuperPdpAuthorize: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

This endpoint does not need any parameter.

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `frSuperPdpCallback()`

```php
frSuperPdpCallback($frSuperPdpCallbackRequest)
```

Complete SuperPDP consent

The configured frontend callback forwards code/state using its existing authenticated company session. Requires the `edit.company` permission and the `einvoicing` company feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$frSuperPdpCallbackRequest = [/*...*/]; // array

try {
    $api->fRSuperPDP()->frSuperPdpCallback($frSuperPdpCallbackRequest);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->fRSuperPDP->frSuperPdpCallback: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **frSuperPdpCallbackRequest** | [see frSuperPdpCallback](https://api.accounting.sh/swagger.html#operation/frSuperPdpCallback)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `frSuperPdpClassify()`

```php
frSuperPdpClassify($uuid, $frSuperPdpClassifyRequest)
```

Classify reporting lines

Validate a complete per-line goods/services classification for a mixed consumer sale awaiting submission. Requires the `edit.company` permission and the `einvoicing` company feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string
$frSuperPdpClassifyRequest = [/*...*/]; // array

try {
    $api->fRSuperPDP()->frSuperPdpClassify($uuid, $frSuperPdpClassifyRequest);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->fRSuperPDP->frSuperPdpClassify: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **frSuperPdpClassifyRequest** | [see frSuperPdpClassify](https://api.accounting.sh/swagger.html#operation/frSuperPdpClassify)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `frSuperPdpConfigure()`

```php
frSuperPdpConfigure($frSuperPdpConfigureRequest)
```

Configure SuperPDP synchronization

Validate backfill/routing; legacy frequency inputs are adapted to shared settings with their standard edit permission. Requires the `edit.company` permission and the `einvoicing` company feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$frSuperPdpConfigureRequest = [/*...*/]; // array

try {
    $api->fRSuperPDP()->frSuperPdpConfigure($frSuperPdpConfigureRequest);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->fRSuperPDP->frSuperPdpConfigure: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **frSuperPdpConfigureRequest** | [see frSuperPdpConfigure](https://api.accounting.sh/swagger.html#operation/frSuperPdpConfigure)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `frSuperPdpDisconnect()`

```php
frSuperPdpDisconnect()
```

Disconnect SuperPDP

Delete local OAuth secrets; provider-side consent remains manageable from SuperPDP. Requires the `edit.company` permission and the `einvoicing` company feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $api->fRSuperPDP()->frSuperPdpDisconnect();
} catch (Exception $e) {
    echo 'Exception when calling Accounting->fRSuperPDP->frSuperPdpDisconnect: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

This endpoint does not need any parameter.

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `frSuperPdpInbox()`

```php
frSuperPdpInbox($page, $reviewStatus)
```

List received invoices

List owned received invoices, defaulting to pending review while allowing all historical review states. Requires the `list.bills` permission and the `einvoicing` company feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$page = 56; // int
$reviewStatus = 'pending'; // string

try {
    $api->fRSuperPDP()->frSuperPdpInbox($page, $reviewStatus);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->fRSuperPDP->frSuperPdpInbox: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **reviewStatus** | **string**|  | [optional] [default to &#39;pending&#39;] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `frSuperPdpLifecycle()`

```php
frSuperPdpLifecycle($uuid, $frSuperPdpLifecycleRequest)
```

Queue a buyer lifecycle event

Queue a buyer lifecycle decision with a client UUID to make repeated HTTP requests idempotent. Requires the `edit.company` permission and the `einvoicing` company feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string
$frSuperPdpLifecycleRequest = [/*...*/]; // array

try {
    $api->fRSuperPDP()->frSuperPdpLifecycle($uuid, $frSuperPdpLifecycleRequest);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->fRSuperPDP->frSuperPdpLifecycle: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **frSuperPdpLifecycleRequest** | [see frSuperPdpLifecycle](https://api.accounting.sh/swagger.html#operation/frSuperPdpLifecycle)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `frSuperPdpOperations()`

```php
frSuperPdpOperations($page, $kind)
```

List SuperPDP operations

Return bounded local invoice, inbox, lifecycle, reporting and failure records. Requires the `edit.company` permission and the `einvoicing` company feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$page = 56; // int
$kind = 'kind_example'; // string

try {
    $api->fRSuperPDP()->frSuperPdpOperations($page, $kind);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->fRSuperPDP->frSuperPdpOperations: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **kind** | **string**|  | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `frSuperPdpReceipt()`

```php
frSuperPdpReceipt($uuid)
```

Get a received invoice

Return structured supplier/line/total facts and review/import state without creating accounting resources. Requires the `view.bill` permission and the `einvoicing` company feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $api->fRSuperPDP()->frSuperPdpReceipt($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->fRSuperPDP->frSuperPdpReceipt: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `frSuperPdpReceiptHistory()`

```php
frSuperPdpReceiptHistory($uuid, $page)
```

Get received invoice history

Retrieve one receipt's retained provider events and local lifecycle delivery outcomes without any provider calls. Requires the `view.bill` permission and the `einvoicing` company feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string
$page = 56; // int

try {
    $api->fRSuperPDP()->frSuperPdpReceiptHistory($uuid, $page);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->fRSuperPDP->frSuperPdpReceiptHistory: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **page** | **int**|  | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `frSuperPdpReceiptPdf()`

```php
frSuperPdpReceiptPdf($uuid)
```

Get a received invoice PDF

Serve the exact private S3 PDF used for approval; callers should display it in a sandboxed PDF viewer. Requires the `view.bill` permission and the `einvoicing` company feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $api->fRSuperPDP()->frSuperPdpReceiptPdf($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->fRSuperPDP->frSuperPdpReceiptPdf: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `frSuperPdpReconcile()`

```php
frSuperPdpReconcile($uuid, $frSuperPdpReconcileRequest)
```

Reconcile a reporting submission

Queue proof checking for an ambiguous reporting submission, without posting its tax facts again. Requires the `edit.company` permission and the `einvoicing` company feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string
$frSuperPdpReconcileRequest = [/*...*/]; // array

try {
    $api->fRSuperPDP()->frSuperPdpReconcile($uuid, $frSuperPdpReconcileRequest);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->fRSuperPDP->frSuperPdpReconcile: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **frSuperPdpReconcileRequest** | [see frSuperPdpReconcile](https://api.accounting.sh/swagger.html#operation/frSuperPdpReconcile)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `frSuperPdpRefuse()`

```php
frSuperPdpRefuse($uuid, $frSuperPdpRefuseRequest)
```

Refuse a received invoice

Record a reason-coded refusal and queue fr:210 without creating a bill, contact or document. Requires the `edit.bill` permission and the `einvoicing` company feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string
$frSuperPdpRefuseRequest = [/*...*/]; // array

try {
    $api->fRSuperPDP()->frSuperPdpRefuse($uuid, $frSuperPdpRefuseRequest);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->fRSuperPDP->frSuperPdpRefuse: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **frSuperPdpRefuseRequest** | [see frSuperPdpRefuse](https://api.accounting.sh/swagger.html#operation/frSuperPdpRefuse)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `frSuperPdpRetry()`

```php
frSuperPdpRetry($uuid, $frSuperPdpRetryRequest)
```

Retry a SuperPDP operation

Retry failures, requiring an explicit provider nonreceipt check before replaying an ambiguous POST. Requires the `edit.company` permission and the `einvoicing` company feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string
$frSuperPdpRetryRequest = [/*...*/]; // array

try {
    $api->fRSuperPDP()->frSuperPdpRetry($uuid, $frSuperPdpRetryRequest);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->fRSuperPDP->frSuperPdpRetry: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **frSuperPdpRetryRequest** | [see frSuperPdpRetry](https://api.accounting.sh/swagger.html#operation/frSuperPdpRetry)|  | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `frSuperPdpSettings()`

```php
frSuperPdpSettings()
```

Get SuperPDP settings

Read the synchronized projection of company VAT settings, provider filing frequency and the local backfill boundary. Requires the `edit.company` permission and the `einvoicing` company feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $api->fRSuperPDP()->frSuperPdpSettings();
} catch (Exception $e) {
    echo 'Exception when calling Accounting->fRSuperPDP->frSuperPdpSettings: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

This endpoint does not need any parameter.

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `frSuperPdpStatus()`

```php
frSuperPdpStatus()
```

Get SuperPDP connection status

Read safe local status and request a throttled asynchronous refresh when verification/synchronization is stale. Requires the `view.company` permission and the `einvoicing` company feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $api->fRSuperPDP()->frSuperPdpStatus();
} catch (Exception $e) {
    echo 'Exception when calling Accounting->fRSuperPDP->frSuperPdpStatus: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

This endpoint does not need any parameter.

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `frSuperPdpSubmit()`

```php
frSuperPdpSubmit($frSuperPdpSubmitRequest)
```

Submit an issued invoice

Opt an existing issued source into delivery/reporting; drafts and foreign-owned UUIDs are rejected. Requires the `edit.company` permission and the `einvoicing` company feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$frSuperPdpSubmitRequest = [/*...*/]; // array

try {
    $api->fRSuperPDP()->frSuperPdpSubmit($frSuperPdpSubmitRequest);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->fRSuperPDP->frSuperPdpSubmit: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **frSuperPdpSubmitRequest** | [see frSuperPdpSubmit](https://api.accounting.sh/swagger.html#operation/frSuperPdpSubmit)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `frSuperPdpSync()`

```php
frSuperPdpSync()
```

Queue SuperPDP synchronization

Queue synchronization; callers poll local operations instead of waiting for provider network calls. Requires the `edit.company` permission and the `einvoicing` company feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $api->fRSuperPDP()->frSuperPdpSync();
} catch (Exception $e) {
    echo 'Exception when calling Accounting->fRSuperPDP->frSuperPdpSync: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

This endpoint does not need any parameter.

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `frSuperPdpVerify()`

```php
frSuperPdpVerify()
```

Queue SuperPDP verification

Enqueue verification and resume invoice synchronization immediately once the grant becomes ready. Requires the `edit.company` permission and the `einvoicing` company feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $api->fRSuperPDP()->frSuperPdpVerify();
} catch (Exception $e) {
    echo 'Exception when calling Accounting->fRSuperPDP->frSuperPdpVerify: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

This endpoint does not need any parameter.

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

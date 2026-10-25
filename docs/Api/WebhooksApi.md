# Accounting\WebhooksApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addWebhook()**](WebhooksApi.md#addWebhook) | **POST** /webhooks | Add a webhook |
| [**deleteWebhook()**](WebhooksApi.md#deleteWebhook) | **DELETE** /webhooks/{uuid} | Delete a webhook |
| [**getWebhook()**](WebhooksApi.md#getWebhook) | **GET** /webhooks/{uuid} | Get a webhook |
| [**getWebhookHistory()**](WebhooksApi.md#getWebhookHistory) | **GET** /webhooks/{uuid}/history | Get webhook&#39;s history |
| [**listWebhookEvents()**](WebhooksApi.md#listWebhookEvents) | **GET** /webhooks/events | List available webhook events |
| [**listWebhooks()**](WebhooksApi.md#listWebhooks) | **GET** /webhooks | List company&#39;s webhooks |
| [**updateWebhook()**](WebhooksApi.md#updateWebhook) | **PUT** /webhooks/{uuid} | Update a webhook |


## `addWebhook()`

```php
addWebhook($addWebhookRequest): null|string|array
```

Add a webhook

Add a webhook. Send the resource fields in the request body; the response contains the saved record. Requires at least one permission: `add.webhook`. Requires company feature(s): `webhooks`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addWebhookRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->webhooks()->addWebhook($addWebhookRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->webhooks->addWebhook: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addWebhookRequest** | [see addWebhook](https://api.accounting.sh/swagger.html#operation/addWebhook)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebhook()`

```php
deleteWebhook($uuid): null|string|array
```

Delete a webhook

Delete a webhook. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `delete.webhook`. Requires company feature(s): `webhooks`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The webhook uuid

try {
    $result = $api->webhooks()->deleteWebhook($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->webhooks->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The webhook uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhook()`

```php
getWebhook($uuid): null|string|array
```

Get a webhook

Get a webhook. Use the identifier returned by the corresponding list or create operation. Requires at least one permission: `view.webhook`. Requires company feature(s): `webhooks`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The webhook uuid

try {
    $result = $api->webhooks()->getWebhook($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->webhooks->getWebhook: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The webhook uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhookHistory()`

```php
getWebhookHistory($uuid): null|string|array
```

Get webhook's history

Retrieve delivery history for this webhook to inspect previous attempts and troubleshoot delivery failures. Requires at least one permission: `view.webhook`. Requires company feature(s): `webhooks`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The webhook uuid

try {
    $result = $api->webhooks()->getWebhookHistory($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->webhooks->getWebhookHistory: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The webhook uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebhookEvents()`

```php
listWebhookEvents(): null|string|array
```

List available webhook events

Retrieve event identifiers accepted when creating or updating a webhook subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->webhooks()->listWebhookEvents();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->webhooks->listWebhookEvents: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

This endpoint does not need any parameter.

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebhooks()`

```php
listWebhooks($fields, $page, $perPage, $orderBy): null|string|array
```

List company's webhooks

List company's webhooks. Retrieve records using the query parameters below. Requires at least one permission: `list.webhooks`. Requires company feature(s): `webhooks`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,link,events; // string | Comma-separated fields to include in each record. Default fields: uuid, link, events.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->webhooks()->listWebhooks($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->webhooks->listWebhooks: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, link, events. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhook()`

```php
updateWebhook($uuid, $addWebhookRequest): null|string|array
```

Update a webhook

Update a webhook. Send the fields accepted by this operation in the request body. Requires at least one permission: `edit.webhook`. Requires company feature(s): `webhooks`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The webhook uuid
$addWebhookRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->webhooks()->updateWebhook($uuid, $addWebhookRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->webhooks->updateWebhook: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The webhook uuid | |
| **addWebhookRequest** | [see updateWebhook](https://api.accounting.sh/swagger.html#operation/updateWebhook)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

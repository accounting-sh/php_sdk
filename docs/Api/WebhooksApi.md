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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$addWebhookRequest = [...]; // array

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
| **addWebhookRequest** | [see addWebhook](https://api.accounting.sh/swagger.html#operation/addWebhook)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebhook()`

```php
deleteWebhook($uuid): null|string|array
```

Delete a webhook

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
| **uuid** | **string**| The webhook uuid | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhook()`

```php
getWebhook($uuid): null|string|array
```

Get a webhook

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
| **uuid** | **string**| The webhook uuid | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhookHistory()`

```php
getWebhookHistory($uuid): null|string|array
```

Get webhook's history

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
| **uuid** | **string**| The webhook uuid | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebhookEvents()`

```php
listWebhookEvents(): null|string|array
```

List available webhook events

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
listWebhooks($fields, $page, $perPage): null|string|array
```

List company's webhooks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->webhooks()->listWebhooks($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->webhooks->listWebhooks: ', $e->getMessage(), PHP_EOL;
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

## `updateWebhook()`

```php
updateWebhook($addWebhookRequest, $uuid): null|string|array
```

Update a webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$addWebhookRequest = [...]; // array
$uuid = 'uuid_example'; // string | The webhook uuid

try {
    $result = $api->webhooks()->updateWebhook($addWebhookRequest, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->webhooks->updateWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addWebhookRequest** | [see updateWebhook](https://api.accounting.sh/swagger.html#operation/updateWebhook)|  | |
| **uuid** | **string**| The webhook uuid | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

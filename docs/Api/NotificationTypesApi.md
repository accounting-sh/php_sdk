# Accounting\NotificationTypesApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addNotificationType()**](NotificationTypesApi.md#addNotificationType) | **POST** /notifications/types | Add a notification type |
| [**deleteNotificationType()**](NotificationTypesApi.md#deleteNotificationType) | **DELETE** /notifications/types/{uuid} | Delete a notification type |
| [**getNotificationType()**](NotificationTypesApi.md#getNotificationType) | **GET** /notifications/types/{uuid} | Get a notification type |
| [**listNotificationTypes()**](NotificationTypesApi.md#listNotificationTypes) | **GET** /notifications/types | List company&#39;s notification types |
| [**updateNotificationType()**](NotificationTypesApi.md#updateNotificationType) | **PUT** /notifications/types/{uuid} | Update a notification type |


## `addNotificationType()`

```php
addNotificationType($addNotificationTypeRequest): null|string|array
```

Add a notification type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$addNotificationTypeRequest = [/*...*/]; // array

try {
    $result = $api->notificationTypes()->addNotificationType($addNotificationTypeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notificationTypes->addNotificationType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addNotificationTypeRequest** | [see addNotificationType](https://api.accounting.sh/swagger.html#operation/addNotificationType)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNotificationType()`

```php
deleteNotificationType($uuid): null|string|array
```

Delete a notification type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The notification type uuid

try {
    $result = $api->notificationTypes()->deleteNotificationType($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notificationTypes->deleteNotificationType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The notification type uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNotificationType()`

```php
getNotificationType($uuid): null|string|array
```

Get a notification type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The notification type uuid

try {
    $result = $api->notificationTypes()->getNotificationType($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notificationTypes->getNotificationType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The notification type uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listNotificationTypes()`

```php
listNotificationTypes($fields, $page, $perPage): null|string|array
```

List company's notification types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->notificationTypes()->listNotificationTypes($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notificationTypes->listNotificationTypes: ', $e->getMessage(), PHP_EOL;
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

## `updateNotificationType()`

```php
updateNotificationType($uuid, $addNotificationTypeRequest): null|string|array
```

Update a notification type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The notification type uuid
$addNotificationTypeRequest = [/*...*/]; // array

try {
    $result = $api->notificationTypes()->updateNotificationType($uuid, $addNotificationTypeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notificationTypes->updateNotificationType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The notification type uuid | |
| **addNotificationTypeRequest** | [see updateNotificationType](https://api.accounting.sh/swagger.html#operation/updateNotificationType)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

Add a notification type. Send the resource fields in the request body; the response contains the saved record. Requires at least one permission: `add.notification_type`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addNotificationTypeRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **addNotificationTypeRequest** | [see addNotificationType](https://api.accounting.sh/swagger.html#operation/addNotificationType)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNotificationType()`

```php
deleteNotificationType($uuid): null|string|array
```

Delete a notification type

Delete a notification type. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `delete.notification_type`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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

Get a notification type. Use the identifier returned by the corresponding list or create operation. Requires at least one permission: `view.notification_type`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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
listNotificationTypes($fields, $page, $perPage, $orderBy): null|string|array
```

List company's notification types

List company's notification types. Retrieve records using the query parameters below. Requires at least one permission: `list.notification_type`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = name,title,description,allowed_methods,internal; // string | Comma-separated fields to include in each record. Default fields: name, title, description, allowed_methods, internal.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->notificationTypes()->listNotificationTypes($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notificationTypes->listNotificationTypes: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: name, title, description, allowed_methods, internal. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNotificationType()`

```php
updateNotificationType($uuid, $updateNotificationTypeRequest): null|string|array
```

Update a notification type

Update a notification type. Send the fields accepted by this operation in the request body. Requires at least one permission: `edit.notification_type`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The notification type uuid
$updateNotificationTypeRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->notificationTypes()->updateNotificationType($uuid, $updateNotificationTypeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notificationTypes->updateNotificationType: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The notification type uuid | |
| **updateNotificationTypeRequest** | [see updateNotificationType](https://api.accounting.sh/swagger.html#operation/updateNotificationType)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

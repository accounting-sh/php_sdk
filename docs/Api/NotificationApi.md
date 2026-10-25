# Accounting\NotificationApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listNotificationPreferences()**](NotificationApi.md#listNotificationPreferences) | **GET** /notifications/preferences/{notification} | List notification preferences |
| [**listNotifications()**](NotificationApi.md#listNotifications) | **GET** /notifications | List company&#39;s notifications |
| [**sendNotification()**](NotificationApi.md#sendNotification) | **POST** /notifications/send | Send a notification |
| [**updateNotificationPreferences()**](NotificationApi.md#updateNotificationPreferences) | **PUT** /notifications/preferences/{notification} | Update notification preferences |


## `listNotificationPreferences()`

```php
listNotificationPreferences($notification): null|string|array
```

List notification preferences

List notification preferences. Use the parameters and response fields below for this operation. Requires at least one permission: `manage.notification_preferences`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$notification = 'notification_example'; // string | The notification name

try {
    $result = $api->notification()->listNotificationPreferences($notification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notification->listNotificationPreferences: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification** | **string**| The notification name | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listNotifications()`

```php
listNotifications($fields, $page, $perPage, $orderBy): null|string|array
```

List company's notifications

List company's notifications. Retrieve records using the query parameters below. Requires at least one permission: `list_notification`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,notification; // string | Comma-separated fields to include in each record. Default fields: uuid, notification.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->notification()->listNotifications($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notification->listNotifications: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, notification. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendNotification()`

```php
sendNotification($sendNotificationRequest): null|string|array
```

Send a notification

Send a notification using the supplied delivery options. This action can contact recipients; avoid automatic retries. Requires at least one permission: `send_notification`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$sendNotificationRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->notification()->sendNotification($sendNotificationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notification->sendNotification: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sendNotificationRequest** | [see sendNotification](https://api.accounting.sh/swagger.html#operation/sendNotification)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNotificationPreferences()`

```php
updateNotificationPreferences($notification, $updateNotificationPreferencesRequest): null|string|array
```

Update notification preferences

Update notification preferences. Send the fields accepted by this operation in the request body. Omitted optional fields retain their existing values. Requires at least one permission: `manage.notification_preferences`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$notification = 'notification_example'; // string | The notification name
$updateNotificationPreferencesRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->notification()->updateNotificationPreferences($notification, $updateNotificationPreferencesRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notification->updateNotificationPreferences: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification** | **string**| The notification name | |
| **updateNotificationPreferencesRequest** | [see updateNotificationPreferences](https://api.accounting.sh/swagger.html#operation/updateNotificationPreferences)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

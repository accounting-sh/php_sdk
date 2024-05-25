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
listNotifications($fields, $page, $perPage): null|string|array
```

List company's notifications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->notification()->listNotifications($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notification->listNotifications: ', $e->getMessage(), PHP_EOL;
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

## `sendNotification()`

```php
sendNotification($sendNotificationRequest): null|string|array
```

Send a notification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$sendNotificationRequest = [...]; // array

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
| **sendNotificationRequest** | [see sendNotification](https://api.accounting.sh/swagger.html#operation/sendNotification)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNotificationPreferences()`

```php
updateNotificationPreferences($notification, $updateNotificationPreferencesRequest): null|string|array
```

Update notification preferences

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$notification = 'notification_example'; // string | The notification name
$updateNotificationPreferencesRequest = [...]; // array

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
| **updateNotificationPreferencesRequest** | [see updateNotificationPreferences](https://api.accounting.sh/swagger.html#operation/updateNotificationPreferences)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

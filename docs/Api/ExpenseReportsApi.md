# Accounting\ExpenseReportsApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addExpenseReport()**](ExpenseReportsApi.md#addExpenseReport) | **POST** /expenses/expense-reports | Add an expense report |
| [**deleteExpenseReport()**](ExpenseReportsApi.md#deleteExpenseReport) | **DELETE** /expenses/expense-reports/{uuid} | Delete an expense report |
| [**expenseReportOAuthLogin()**](ExpenseReportsApi.md#expenseReportOAuthLogin) | **GET** /expenses/expense-reports/login/{method} | OAuth Login |
| [**getExpenseReport()**](ExpenseReportsApi.md#getExpenseReport) | **GET** /expenses/expense-reports/{uuid} | Get an expense report |
| [**getExpenseReportAccount()**](ExpenseReportsApi.md#getExpenseReportAccount) | **GET** /expenses/expense-reports/me | Get the currently connected expense report user details |
| [**getExpenseReportUser()**](ExpenseReportsApi.md#getExpenseReportUser) | **GET** /expenses/expense-reports/users/{uuid} | Get an user details |
| [**listExpenseReports()**](ExpenseReportsApi.md#listExpenseReports) | **GET** /expenses/expense-reports | List company&#39;s expense reports. |
| [**sendExpenseReportLoginEmail()**](ExpenseReportsApi.md#sendExpenseReportLoginEmail) | **POST** /expenses/expense-reports/login | Request login email |
| [**updateExpenseReport()**](ExpenseReportsApi.md#updateExpenseReport) | **PUT** /expenses/expense-reports/{uuid} | Update an expense report |
| [**updateExpenseReportAccount()**](ExpenseReportsApi.md#updateExpenseReportAccount) | **PUT** /expenses/expense-reports/me | Update the currently connected expense report user |
| [**updateExpenseReportSettings()**](ExpenseReportsApi.md#updateExpenseReportSettings) | **POST** /expenses/expense-reports/settings | Retrieve company settings for expense reports |
| [**verifyExpenseReportSettings()**](ExpenseReportsApi.md#verifyExpenseReportSettings) | **POST** /expenses/expense-reports/verify | Verify expense reports settings |


## `addExpenseReport()`

```php
addExpenseReport($addExpenseReportRequest): null|string|array
```

Add an expense report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$addExpenseReportRequest = [...]; // array

try {
    $result = $api->expenseReports()->addExpenseReport($addExpenseReportRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->addExpenseReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addExpenseReportRequest** | [see addExpenseReport](https://api.accounting.sh/swagger.html#operation/addExpenseReport)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteExpenseReport()`

```php
deleteExpenseReport($uuid): null|string|array
```

Delete an expense report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The expense report uuid

try {
    $result = $api->expenseReports()->deleteExpenseReport($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->deleteExpenseReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The expense report uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `expenseReportOAuthLogin()`

```php
expenseReportOAuthLogin($method): null|string|array
```

OAuth Login

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$method = 'method_example'; // string | The OAuth Provider to use

try {
    $result = $api->expenseReports()->expenseReportOAuthLogin($method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->expenseReportOAuthLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **method** | **string**| The OAuth Provider to use | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExpenseReport()`

```php
getExpenseReport($uuid): null|string|array
```

Get an expense report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The expense report uuid

try {
    $result = $api->expenseReports()->getExpenseReport($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->getExpenseReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The expense report uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExpenseReportAccount()`

```php
getExpenseReportAccount(): null|string|array
```

Get the currently connected expense report user details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");

try {
    $result = $api->expenseReports()->getExpenseReportAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->getExpenseReportAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExpenseReportUser()`

```php
getExpenseReportUser($uuid): null|string|array
```

Get an user details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The expense report user uuid

try {
    $result = $api->expenseReports()->getExpenseReportUser($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->getExpenseReportUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The expense report user uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listExpenseReports()`

```php
listExpenseReports($fields, $page, $perPage): null|string|array
```

List company's expense reports.

List company's expense reports. If the token used has the `expense_report.limited_to_self` permission, this will only list the user's expense reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->expenseReports()->listExpenseReports($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->listExpenseReports: ', $e->getMessage(), PHP_EOL;
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

## `sendExpenseReportLoginEmail()`

```php
sendExpenseReportLoginEmail($sendExpenseReportLoginEmailRequest): null|string|array
```

Request login email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$sendExpenseReportLoginEmailRequest = [...]; // array

try {
    $result = $api->expenseReports()->sendExpenseReportLoginEmail($sendExpenseReportLoginEmailRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->sendExpenseReportLoginEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sendExpenseReportLoginEmailRequest** | [see sendExpenseReportLoginEmail](https://api.accounting.sh/swagger.html#operation/sendExpenseReportLoginEmail)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExpenseReport()`

```php
updateExpenseReport($uuid, $addExpenseReportRequest): null|string|array
```

Update an expense report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The expense report uuid
$addExpenseReportRequest = [...]; // array

try {
    $result = $api->expenseReports()->updateExpenseReport($uuid, $addExpenseReportRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->updateExpenseReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The expense report uuid | |
| **addExpenseReportRequest** | [see updateExpenseReport](https://api.accounting.sh/swagger.html#operation/updateExpenseReport)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExpenseReportAccount()`

```php
updateExpenseReportAccount($updateExpenseReportAccountRequest): null|string|array
```

Update the currently connected expense report user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$updateExpenseReportAccountRequest = [...]; // array

try {
    $result = $api->expenseReports()->updateExpenseReportAccount($updateExpenseReportAccountRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->updateExpenseReportAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updateExpenseReportAccountRequest** | [see updateExpenseReportAccount](https://api.accounting.sh/swagger.html#operation/updateExpenseReportAccount)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExpenseReportSettings()`

```php
updateExpenseReportSettings($updateExpenseReportSettingsRequest): null|string|array
```

Retrieve company settings for expense reports

At least an url or a company must be provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$updateExpenseReportSettingsRequest = [...]; // array

try {
    $result = $api->expenseReports()->updateExpenseReportSettings($updateExpenseReportSettingsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->updateExpenseReportSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updateExpenseReportSettingsRequest** | [see updateExpenseReportSettings](https://api.accounting.sh/swagger.html#operation/updateExpenseReportSettings)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyExpenseReportSettings()`

```php
verifyExpenseReportSettings($verifyExpenseReportSettingsRequest): null|string|array
```

Verify expense reports settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$verifyExpenseReportSettingsRequest = [...]; // array

try {
    $result = $api->expenseReports()->verifyExpenseReportSettings($verifyExpenseReportSettingsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->verifyExpenseReportSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **verifyExpenseReportSettingsRequest** | [see verifyExpenseReportSettings](https://api.accounting.sh/swagger.html#operation/verifyExpenseReportSettings)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

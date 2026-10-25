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

Add an expense report. Send the resource fields in the request body; the response contains the saved record. Requires at least one permission: `expense_report.add`. Requires company feature(s): `expense_report`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addExpenseReportRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **addExpenseReportRequest** | [see addExpenseReport](https://api.accounting.sh/swagger.html#operation/addExpenseReport)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteExpenseReport()`

```php
deleteExpenseReport($uuid): null|string|array
```

Delete an expense report

Delete an expense report. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `expense_report.delete`. Requires company feature(s): `expense_report`. Returns 402 if unavailable.

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

OAuth Login. Use the parameters and response fields below for this operation.

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

Get an expense report. Use the identifier returned by the corresponding list or create operation. Requires at least one permission: `expense_report.view`. Requires company feature(s): `expense_report`. Returns 402 if unavailable.

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

Get the currently connected expense report user details. Use the parameters and response fields below for this operation. Requires at least one permission: `expense_report.view.account`. Requires company feature(s): `expense_report`. Returns 402 if unavailable.

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

Get an user details. Use the parameters and response fields below for this operation. Requires at least one permission: `expense_report.view.user`. Requires company feature(s): `expense_report`. Returns 402 if unavailable.

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
listExpenseReports($fields, $page, $perPage, $orderBy): null|string|array
```

List company's expense reports.

List company's expense reports. Retrieve records using the query parameters below. Requires at least one permission: `expense_report.list`. Requires company feature(s): `expense_report`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,user,status; // string | Comma-separated fields to include in each record. Default fields: uuid, user, status.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->expenseReports()->listExpenseReports($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->listExpenseReports: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, user, status. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendExpenseReportLoginEmail()`

```php
sendExpenseReportLoginEmail($sendExpenseReportLoginEmailRequest): null|string|array
```

Request login email

Request a sign-in email for an expense report user. This action sends an email; avoid automatic retries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$sendExpenseReportLoginEmailRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **sendExpenseReportLoginEmailRequest** | [see sendExpenseReportLoginEmail](https://api.accounting.sh/swagger.html#operation/sendExpenseReportLoginEmail)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExpenseReport()`

```php
updateExpenseReport($uuid, $addExpenseReportRequest): null|string|array
```

Update an expense report

Update an expense report. Send the fields accepted by this operation in the request body. Requires at least one permission: `expense_report.edit`. Requires company feature(s): `expense_report`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The expense report uuid
$addExpenseReportRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **addExpenseReportRequest** | [see updateExpenseReport](https://api.accounting.sh/swagger.html#operation/updateExpenseReport)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExpenseReportAccount()`

```php
updateExpenseReportAccount($updateExpenseReportAccountRequest): null|string|array
```

Update the currently connected expense report user

Update the currently connected expense report user. Send the fields accepted by this operation in the request body. Requires at least one permission: `expense_report.edit.account`. Requires company feature(s): `expense_report`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$updateExpenseReportAccountRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **updateExpenseReportAccountRequest** | [see updateExpenseReportAccount](https://api.accounting.sh/swagger.html#operation/updateExpenseReportAccount)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExpenseReportSettings()`

```php
updateExpenseReportSettings($updateExpenseReportSettingsRequest): null|string|array
```

Retrieve company settings for expense reports

Retrieve company settings for expense reports. Use the parameters and response fields below for this operation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$updateExpenseReportSettingsRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **updateExpenseReportSettingsRequest** | [see updateExpenseReportSettings](https://api.accounting.sh/swagger.html#operation/updateExpenseReportSettings)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyExpenseReportSettings()`

```php
verifyExpenseReportSettings($verifyExpenseReportSettingsRequest): null|string|array
```

Verify expense reports settings

Verify expense reports settings. Use the parameters and response fields below for this operation. Requires at least one permission: `edit.company.settings`. Requires company feature(s): `expense_report`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$verifyExpenseReportSettingsRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **verifyExpenseReportSettingsRequest** | [see verifyExpenseReportSettings](https://api.accounting.sh/swagger.html#operation/verifyExpenseReportSettings)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

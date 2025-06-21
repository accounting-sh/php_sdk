# Accounting\UsersApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addUser()**](UsersApi.md#addUser) | **POST** /users | Add user |
| [**deleteUser()**](UsersApi.md#deleteUser) | **DELETE** /users/{uuid} | Delete user |
| [**getUser()**](UsersApi.md#getUser) | **GET** /users/{uuid} | View user |
| [**listUsers()**](UsersApi.md#listUsers) | **GET** /users | List company&#39;s users |
| [**updateUser()**](UsersApi.md#updateUser) | **PUT** /users/{uuid} | Update user |
| [**usersCompanies()**](UsersApi.md#usersCompanies) | **GET** /users/me/companies | List current user companies |
| [**usersMe()**](UsersApi.md#usersMe) | **GET** /users/me | View current user details |


## `addUser()`

```php
addUser($addUserRequest): null|string|array
```

Add user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addUserRequest = [/*...*/]; // array

try {
    $result = $api->users()->addUser($addUserRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->users->addUser: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addUserRequest** | [see addUser](https://api.accounting.sh/swagger.html#operation/addUser)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUser()`

```php
deleteUser($uuid): null|string|array
```

Delete user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The user uuid

try {
    $result = $api->users()->deleteUser($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->users->deleteUser: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The user uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUser()`

```php
getUser($uuid): null|string|array
```

View user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The user uuid

try {
    $result = $api->users()->getUser($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->users->getUser: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The user uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUsers()`

```php
listUsers($fields, $page, $perPage): null|string|array
```

List company's users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->users()->listUsers($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->users->listUsers: ', $e->getMessage(), PHP_EOL;
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

## `updateUser()`

```php
updateUser($uuid, $updateUserRequest): null|string|array
```

Update user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The user uuid
$updateUserRequest = [/*...*/]; // array

try {
    $result = $api->users()->updateUser($uuid, $updateUserRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->users->updateUser: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The user uuid | |
| **updateUserRequest** | [see updateUser](https://api.accounting.sh/swagger.html#operation/updateUser)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCompanies()`

```php
usersCompanies(): null|string|array
```

List current user companies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->users()->usersCompanies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->users->usersCompanies: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

This endpoint does not need any parameter.

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersMe()`

```php
usersMe(): null|string|array
```

View current user details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->users()->usersMe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->users->usersMe: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

This endpoint does not need any parameter.

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

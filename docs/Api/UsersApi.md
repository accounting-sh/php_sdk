# Accounting\UsersApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addUser()**](UsersApi.md#addUser) | **POST** /users | Add user |
| [**deleteUser()**](UsersApi.md#deleteUser) | **DELETE** /users/{uuid} | Delete user |
| [**getUser()**](UsersApi.md#getUser) | **GET** /users/{uuid} | View user |
| [**listUsers()**](UsersApi.md#listUsers) | **GET** /users | List company&#39;s users |
| [**updateMePutAlias()**](UsersApi.md#updateMePutAlias) | **PUT** /users/me | Update current user details |
| [**updateUser()**](UsersApi.md#updateUser) | **PUT** /users/{uuid} | Update user |
| [**usersCompanies()**](UsersApi.md#usersCompanies) | **GET** /users/me/companies | List current user companies |
| [**usersMe()**](UsersApi.md#usersMe) | **GET** /users/me | View current user details |


## `addUser()`

```php
addUser(): null|string|array
```

Add user

Add user. Send the resource fields in the request body; the response contains the saved record. Requires at least one permission: `user.add`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->users()->addUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->users->addUser: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

This endpoint does not need any parameter.

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUser()`

```php
deleteUser($uuid): null|string|array
```

Delete user

Delete user. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `user.delete`.

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

View user. Use the identifier returned by the corresponding list or create operation. Requires at least one permission: `user.view`.

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
listUsers($fields, $page, $perPage, $orderBy): null|string|array
```

List company's users

List company's users. Retrieve records using the query parameters below. Requires at least one permission: `user.list`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,user,permissions; // string | Comma-separated fields to include in each record. Default fields: uuid, user, permissions.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->users()->listUsers($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->users->listUsers: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, user, permissions. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMePutAlias()`

```php
updateMePutAlias(): null|string|array
```

Update current user details

Update the current authenticated user profile using the supplied fields. This requires an interactive user session. Requires authentication. Equivalent to POST /users/me.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->users()->updateMePutAlias();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->users->updateMePutAlias: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

This endpoint does not need any parameter.

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($uuid): null|string|array
```

Update user

Update user. Send the fields accepted by this operation in the request body. Requires at least one permission: `user.edit`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The user uuid

try {
    $result = $api->users()->updateUser($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->users->updateUser: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The user uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCompanies()`

```php
usersCompanies(): null|string|array
```

List current user companies

Retrieve companies associated with the current authenticated user. Use a company identifier with POST /auth/switch to change the user session company. Requires authentication.

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

Retrieve the current authenticated user and company membership. Use an interactive user session for user-specific information. Requires authentication.

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

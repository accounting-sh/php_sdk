# Accounting\CredentialsApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addCredential()**](CredentialsApi.md#addCredential) | **POST** /credentials | Add a credential |
| [**deleteCredential()**](CredentialsApi.md#deleteCredential) | **DELETE** /credentials/{uuid} | Delete a credential |
| [**getCredential()**](CredentialsApi.md#getCredential) | **GET** /credentials/{uuid} | Get a credential |
| [**listCredentials()**](CredentialsApi.md#listCredentials) | **GET** /credentials | List company&#39;s credentials |
| [**listPermissions()**](CredentialsApi.md#listPermissions) | **GET** /credentials/permissions | List available permissions |
| [**me()**](CredentialsApi.md#me) | **GET** /me | Get current credential informations |
| [**updateCredential()**](CredentialsApi.md#updateCredential) | **PUT** /credentials/{uuid} | Update a credential |


## `addCredential()`

```php
addCredential($addCredentialRequest): null|string|array
```

Add a credential

Add a credential. Send the resource fields in the request body; the response contains the saved record. Requires at least one permission: `add.credential`. Requires company feature(s): `api`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addCredentialRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->credentials()->addCredential($addCredentialRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->credentials->addCredential: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addCredentialRequest** | [see addCredential](https://api.accounting.sh/swagger.html#operation/addCredential)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCredential()`

```php
deleteCredential($uuid): null|string|array
```

Delete a credential

Delete a credential. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `delete.credential`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The credential uuid

try {
    $result = $api->credentials()->deleteCredential($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->credentials->deleteCredential: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The credential uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCredential()`

```php
getCredential($uuid): null|string|array
```

Get a credential

Get a credential. Use the identifier returned by the corresponding list or create operation. Requires at least one permission: `view.credential`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The credential uuid

try {
    $result = $api->credentials()->getCredential($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->credentials->getCredential: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The credential uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCredentials()`

```php
listCredentials($fields, $page, $perPage, $orderBy): null|string|array
```

List company's credentials

List company's credentials. Retrieve records using the query parameters below. Requires at least one permission: `list.credentials`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,permissions,expired_at; // string | Comma-separated fields to include in each record. Default fields: uuid, permissions, expired_at.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->credentials()->listCredentials($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->credentials->listCredentials: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, permissions, expired_at. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPermissions()`

```php
listPermissions(): null|string|array
```

List available permissions

Retrieve the permission identifiers available for API credentials. Use these values in the permissions array when creating or updating a credential.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->credentials()->listPermissions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->credentials->listPermissions: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

This endpoint does not need any parameter.

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `me()`

```php
me(): null|string|array
```

Get current credential informations

Inspect the current company API credential, including its permissions and expiry. Use a Bearer API credential; a browser session token is not an API credential. Requires authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->credentials()->me();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->credentials->me: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

This endpoint does not need any parameter.

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCredential()`

```php
updateCredential($uuid, $addCredentialRequest): null|string|array
```

Update a credential

Update a credential. Send the fields accepted by this operation in the request body. Requires at least one permission: `edit.credential`. Requires company feature(s): `api`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The credential uuid
$addCredentialRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->credentials()->updateCredential($uuid, $addCredentialRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->credentials->updateCredential: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The credential uuid | |
| **addCredentialRequest** | [see updateCredential](https://api.accounting.sh/swagger.html#operation/updateCredential)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

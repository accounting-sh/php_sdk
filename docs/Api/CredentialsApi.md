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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addCredentialRequest = [/*...*/]; // array

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
| **addCredentialRequest** | [see addCredential](https://api.accounting.sh/swagger.html#operation/addCredential)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCredential()`

```php
deleteCredential($uuid): null|string|array
```

Delete a credential

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
listCredentials($fields, $page, $perPage): null|string|array
```

List company's credentials

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->credentials()->listCredentials($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->credentials->listCredentials: ', $e->getMessage(), PHP_EOL;
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

## `listPermissions()`

```php
listPermissions(): null|string|array
```

List available permissions

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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The credential uuid
$addCredentialRequest = [/*...*/]; // array

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
| **addCredentialRequest** | [see updateCredential](https://api.accounting.sh/swagger.html#operation/updateCredential)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

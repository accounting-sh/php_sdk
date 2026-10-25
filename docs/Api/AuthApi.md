# Accounting\AuthApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authInit()**](AuthApi.md#authInit) | **GET** /auth/init | Init authentication process |
| [**login()**](AuthApi.md#login) | **POST** /auth/login | Login user |
| [**loginGetAlias()**](AuthApi.md#loginGetAlias) | **GET** /auth/login | Login user |
| [**logout()**](AuthApi.md#logout) | **GET** /auth/logout | Logout current user |
| [**switchCompany()**](AuthApi.md#switchCompany) | **POST** /auth/switch | Switch to a different company |


## `authInit()`

```php
authInit(): null|string|array
```

Init authentication process

Retrieve the authorization URL used to start interactive OAuth sign-in. Open the returned URL in a browser, then use the authorization code with /auth/login.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->auth()->authInit();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->auth->authInit: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

This endpoint does not need any parameter.

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `login()`

```php
login($loginGetAliasRequest): null|string|array
```

Login user

Exchange the OAuth authorization code for a browser session. Use the resulting session for subsequent user requests.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$loginGetAliasRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->auth()->login($loginGetAliasRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->auth->login: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loginGetAliasRequest** | [see login](https://api.accounting.sh/swagger.html#operation/login)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loginGetAlias()`

```php
loginGetAlias($loginGetAliasRequest): null|string|array
```

Login user

Exchange the OAuth authorization code for a browser session. Use the resulting session for subsequent user requests. Equivalent to POST /auth/login.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$loginGetAliasRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->auth()->loginGetAlias($loginGetAliasRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->auth->loginGetAlias: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loginGetAliasRequest** | [see loginGetAlias](https://api.accounting.sh/swagger.html#operation/loginGetAlias)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logout()`

```php
logout(): null|string|array
```

Logout current user

Sign out the current user. This endpoint changes session state and should not be prefetched.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->auth()->logout();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->auth->logout: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

This endpoint does not need any parameter.

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `switchCompany()`

```php
switchCompany($switchCompanyRequest): null|string|array
```

Switch to a different company

Switch the current user session to a company in which the user has a membership. Send the company identifier in the JSON body. This requires a user session; a company API credential does not identify a user. Requires authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$switchCompanyRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->auth()->switchCompany($switchCompanyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->auth->switchCompany: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **switchCompanyRequest** | [see switchCompany](https://api.accounting.sh/swagger.html#operation/switchCompany)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

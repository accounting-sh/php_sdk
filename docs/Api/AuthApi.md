# Accounting\AuthApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authInit()**](AuthApi.md#authInit) | **GET** /auth/init | Init authentication process |
| [**login()**](AuthApi.md#login) | **POST** /auth/login | Login user |
| [**logout()**](AuthApi.md#logout) | **GET** /auth/logout | Logout current user |
| [**switchCompany()**](AuthApi.md#switchCompany) | **POST** /auth/switch | Switch to a different company |


## `authInit()`

```php
authInit(): null|string|array
```

Init authentication process

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
login($loginRequest): null|string|array
```

Login user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$loginRequest = [/*...*/]; // array

try {
    $result = $api->auth()->login($loginRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->auth->login: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loginRequest** | [see login](https://api.accounting.sh/swagger.html#operation/login)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logout()`

```php
logout(): null|string|array
```

Logout current user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$switchCompanyRequest = [/*...*/]; // array

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
| **switchCompanyRequest** | [see switchCompany](https://api.accounting.sh/swagger.html#operation/switchCompany)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

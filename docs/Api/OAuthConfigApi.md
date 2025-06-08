# Accounting\OAuthConfigApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addOAuthConfiguration()**](OAuthConfigApi.md#addOAuthConfiguration) | **POST** /oauth | Add an OAuth configuration |
| [**deleteOAuthConfiguration()**](OAuthConfigApi.md#deleteOAuthConfiguration) | **DELETE** /oauth/{uuid} | Delete an oauth configuration |
| [**getOAuthConfiguration()**](OAuthConfigApi.md#getOAuthConfiguration) | **GET** /oauth/{uuid} | Get an OAuth configuration |
| [**listOAuthConfigurations()**](OAuthConfigApi.md#listOAuthConfigurations) | **GET** /oauth | List company&#39;s oauth configurations |
| [**listProviders()**](OAuthConfigApi.md#listProviders) | **GET** /oauth/providers | List available providers |
| [**updateOAuthConfiguration()**](OAuthConfigApi.md#updateOAuthConfiguration) | **PUT** /oauth/{uuid} | Update an oauth configuration |


## `addOAuthConfiguration()`

```php
addOAuthConfiguration($addOAuthConfigurationRequest): null|string|array
```

Add an OAuth configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$addOAuthConfigurationRequest = [/*...*/]; // array

try {
    $result = $api->oAuthConfig()->addOAuthConfiguration($addOAuthConfigurationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->oAuthConfig->addOAuthConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addOAuthConfigurationRequest** | [see addOAuthConfiguration](https://api.accounting.sh/swagger.html#operation/addOAuthConfiguration)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOAuthConfiguration()`

```php
deleteOAuthConfiguration($uuid): null|string|array
```

Delete an oauth configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The oauth configuration uuid

try {
    $result = $api->oAuthConfig()->deleteOAuthConfiguration($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->oAuthConfig->deleteOAuthConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The oauth configuration uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOAuthConfiguration()`

```php
getOAuthConfiguration($uuid): null|string|array
```

Get an OAuth configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The oauth configuration uuid

try {
    $result = $api->oAuthConfig()->getOAuthConfiguration($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->oAuthConfig->getOAuthConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The oauth configuration uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOAuthConfigurations()`

```php
listOAuthConfigurations($fields, $page, $perPage): null|string|array
```

List company's oauth configurations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->oAuthConfig()->listOAuthConfigurations($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->oAuthConfig->listOAuthConfigurations: ', $e->getMessage(), PHP_EOL;
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

## `listProviders()`

```php
listProviders(): null|string|array
```

List available providers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");

try {
    $result = $api->oAuthConfig()->listProviders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->oAuthConfig->listProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOAuthConfiguration()`

```php
updateOAuthConfiguration($uuid, $addOAuthConfigurationRequest): null|string|array
```

Update an oauth configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The oauth configuration uuid
$addOAuthConfigurationRequest = [/*...*/]; // array

try {
    $result = $api->oAuthConfig()->updateOAuthConfiguration($uuid, $addOAuthConfigurationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->oAuthConfig->updateOAuthConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The oauth configuration uuid | |
| **addOAuthConfigurationRequest** | [see updateOAuthConfiguration](https://api.accounting.sh/swagger.html#operation/updateOAuthConfiguration)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

Add an OAuth configuration. Send the resource fields in the request body; the response contains the saved record. Requires at least one permission: `oauth_config.add`. Requires company feature(s): `oauth`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addOAuthConfigurationRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **addOAuthConfigurationRequest** | [see addOAuthConfiguration](https://api.accounting.sh/swagger.html#operation/addOAuthConfiguration)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOAuthConfiguration()`

```php
deleteOAuthConfiguration($uuid): null|string|array
```

Delete an oauth configuration

Delete an oauth configuration. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `oauth_config.delete`. Requires company feature(s): `oauth`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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

Get an OAuth configuration. Use the identifier returned by the corresponding list or create operation. Requires at least one permission: `oauth_config.view`. Requires company feature(s): `oauth`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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
listOAuthConfigurations($fields, $page, $perPage, $orderBy): null|string|array
```

List company's oauth configurations

List company's oauth configurations. Retrieve records using the query parameters below. Requires at least one permission: `oauth_config.list`. Requires company feature(s): `oauth`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,provider,client_id; // string | Comma-separated fields to include in each record. Default fields: uuid, provider, client_id.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->oAuthConfig()->listOAuthConfigurations($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->oAuthConfig->listOAuthConfigurations: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Comma-separated fields to include in each record. Default fields: uuid, provider, client_id. | [optional] |
| **page** | **int**| Page number, starting at 1. Values below 1 are treated as 1. | [optional] [default to 1] |
| **perPage** | **int**| Records per page. The server caps page size to 100. Values below 1 use that maximum. | [optional] [default to 10] |
| **orderBy** | **string**| Sort by a supported field and direction, using field:asc or field:desc. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProviders()`

```php
listProviders(): null|string|array
```

List available providers

Retrieve the supported OAuth providers before creating an OAuth configuration.

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

Update an oauth configuration. Send the fields accepted by this operation in the request body. Requires at least one permission: `oauth_config.edit`. Requires company feature(s): `oauth`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The oauth configuration uuid
$addOAuthConfigurationRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

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
| **addOAuthConfigurationRequest** | [see updateOAuthConfiguration](https://api.accounting.sh/swagger.html#operation/updateOAuthConfiguration)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

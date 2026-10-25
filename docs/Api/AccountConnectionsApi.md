# Accounting\AccountConnectionsApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteAccountConnection()**](AccountConnectionsApi.md#deleteAccountConnection) | **DELETE** /accounts/{uuid}/connect/{connection} | Delete an account&#39;s connection |
| [**importAccountTransactions()**](AccountConnectionsApi.md#importAccountTransactions) | **POST** /accounts/{uuid}/transactions/import | Import all available bank transaction history asynchronously |
| [**listAccountConnections()**](AccountConnectionsApi.md#listAccountConnections) | **GET** /accounts/{uuid}/connect | List account&#39;s connections |
| [**listBanks()**](AccountConnectionsApi.md#listBanks) | **GET** /accounts/{uuid}/connect/banks | List available bank connections |
| [**listConnectableBankAccounts()**](AccountConnectionsApi.md#listConnectableBankAccounts) | **GET** /accounts/{uuid}/connect/accounts | List connectable bank accounts |
| [**listConnectedAccountTransactions()**](AccountConnectionsApi.md#listConnectedAccountTransactions) | **GET** /accounts/{uuid}/connect/{connection} | List the connected account&#39;s transactions |
| [**requestBankConnection()**](AccountConnectionsApi.md#requestBankConnection) | **POST** /accounts/{uuid}/connect/request | Request a new bank connection |
| [**selectBankAccount()**](AccountConnectionsApi.md#selectBankAccount) | **POST** /accounts/{uuid}/connect/accounts | Select a bank account to connect |


## `deleteAccountConnection()`

```php
deleteAccountConnection($uuid, $connection): null|string|array
```

Delete an account's connection

Delete an account's connection. This action deletes the selected record. Review references to it before deletion. Requires at least one permission: `account.connections.delete`. Requires company feature(s): `bank_connection`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The account uuid
$connection = 'connection_example'; // string | The connection uuid

try {
    $result = $api->accountConnections()->deleteAccountConnection($uuid, $connection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountConnections->deleteAccountConnection: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The account uuid | |
| **connection** | **string**| The connection uuid | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importAccountTransactions()`

```php
importAccountTransactions($uuid): null|string|array
```

Import all available bank transaction history asynchronously

Queue import of the available transaction history from the connected bank account. HTTP 202 acknowledges the background job; imported transactions become available through the transaction routes. Requires at least one permission: `transaction.add`. Requires company feature(s): `bank_connection`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The account UUID

try {
    $result = $api->accountConnections()->importAccountTransactions($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountConnections->importAccountTransactions: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The account UUID | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccountConnections()`

```php
listAccountConnections($uuid, $fields, $page, $perPage): null|string|array
```

List account's connections

List account's connections. Retrieve records using the query parameters below. Requires at least one permission: `account.connections.list`. Requires company feature(s): `bank_connection`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The account uuid
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->accountConnections()->listAccountConnections($uuid, $fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountConnections->listAccountConnections: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The account uuid | |
| **fields** | **string**| A comma separated list of fields requested in the response | [optional] |
| **page** | **string**| The response page | [optional] |
| **perPage** | **string**| The number of items per page | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBanks()`

```php
listBanks($uuid, $country): null|string|array
```

List available bank connections

List available bank connections. Use the parameters and response fields below for this operation. Requires at least one permission: `account.connections.banks`. Requires company feature(s): `bank_connection`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The account uuid
$country = 'country_example'; // string | A two letter country code, if none are specified, the company's country is used

try {
    $result = $api->accountConnections()->listBanks($uuid, $country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountConnections->listBanks: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The account uuid | |
| **country** | **string**| A two letter country code, if none are specified, the company&#39;s country is used | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConnectableBankAccounts()`

```php
listConnectableBankAccounts($uuid, $connection): null|string|array
```

List connectable bank accounts

List connectable bank accounts. Use the parameters and response fields below for this operation. Requires at least one permission: `account.connections.banks`. Requires company feature(s): `bank_connection`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The account uuid
$connection = 'connection_example'; // string | The connection request UUID

try {
    $result = $api->accountConnections()->listConnectableBankAccounts($uuid, $connection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountConnections->listConnectableBankAccounts: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The account uuid | |
| **connection** | **string**| The connection request UUID | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConnectedAccountTransactions()`

```php
listConnectedAccountTransactions($uuid, $connection, $period): null|string|array
```

List the connected account's transactions

List the connected account's transactions. Use the parameters and response fields below for this operation. Requires at least one permission: `account.connections.list`. Requires company feature(s): `bank_connection`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The account uuid
$connection = 'connection_example'; // string | The connection uuid
$period = 3.4; // float | The number of days to look back for transactions. Default is 7 days.

try {
    $result = $api->accountConnections()->listConnectedAccountTransactions($uuid, $connection, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountConnections->listConnectedAccountTransactions: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The account uuid | |
| **connection** | **string**| The connection uuid | |
| **period** | **float**| The number of days to look back for transactions. Default is 7 days. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestBankConnection()`

```php
requestBankConnection($uuid, $requestBankConnectionRequest): null|string|array
```

Request a new bank connection

Request a new bank connection. Use the parameters and response fields below for this operation. Requires at least one permission: `account.connections.banks`. Requires company feature(s): `bank_connection`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The account uuid
$requestBankConnectionRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->accountConnections()->requestBankConnection($uuid, $requestBankConnectionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountConnections->requestBankConnection: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The account uuid | |
| **requestBankConnectionRequest** | [see requestBankConnection](https://api.accounting.sh/swagger.html#operation/requestBankConnection)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `selectBankAccount()`

```php
selectBankAccount($uuid, $selectBankAccountRequest): null|string|array
```

Select a bank account to connect

Select a bank account to connect. Use the parameters and response fields below for this operation. Requires at least one permission: `account.connections.banks`. Requires company feature(s): `bank_connection`. Returns 402 if unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The account uuid
$selectBankAccountRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->accountConnections()->selectBankAccount($uuid, $selectBankAccountRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountConnections->selectBankAccount: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The account uuid | |
| **selectBankAccountRequest** | [see selectBankAccount](https://api.accounting.sh/swagger.html#operation/selectBankAccount)| Send a JSON object with the fields below. Fields marked required must be supplied. | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

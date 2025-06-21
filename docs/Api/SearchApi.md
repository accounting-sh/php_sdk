# Accounting\SearchApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**search()**](SearchApi.md#search) | **GET** /search | Search |


## `search()`

```php
search($q, $exclude, $only): null|string|array
```

Search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$q = 'q_example'; // string | Query string
$exclude = 'exclude_example'; // string | Exclude specific types. This is a comma separated list.
$only = 'only_example'; // string | Perfom search only on those types. This is a comma separated list.

try {
    $result = $api->search()->search($q, $exclude, $only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->search->search: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**| Query string | |
| **exclude** | **string**| Exclude specific types. This is a comma separated list. | [optional] |
| **only** | **string**| Perfom search only on those types. This is a comma separated list. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

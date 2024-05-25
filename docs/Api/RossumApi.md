# Accounting\RossumApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listReviews()**](RossumApi.md#listReviews) | **GET** /external/rossum/reviews | List documents to be reviewes |


## `listReviews()`

```php
listReviews($fields, $page, $perPage): null|string|array
```

List documents to be reviewes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->rossum()->listReviews($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->rossum->listReviews: ', $e->getMessage(), PHP_EOL;
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

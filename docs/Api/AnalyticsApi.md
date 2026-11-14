# Accounting\AnalyticsApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**analyticsCards()**](AnalyticsApi.md#analyticsCards) | **GET** /analytics/cards/{group} | Grouped analytics statistic cards |
| [**analyticsCatalog()**](AnalyticsApi.md#analyticsCatalog) | **GET** /analytics | Available analytics graphs and card groups |
| [**analyticsGraph()**](AnalyticsApi.md#analyticsGraph) | **GET** /analytics/graphs/{graph} | One frontend-ready analytics graph |


## `analyticsCards()`

```php
analyticsCards($group, $start, $end, $interval, $limit, $currency): null|string|array
```

Grouped analytics statistic cards

Returns the selected statistic-card group for a custom date range. Requires `analytics`. Expense self-only restrictions and company feature gates still apply. Cards expose units, labels, comparisons where supported and calculation metadata; monetary values use exact decimal strings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$group = 'group_example'; // string | Select a related statistics-card group. See GET /analytics for available group metadata.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Inclusive first activity date in YYYY-MM-DD format.
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Inclusive last activity date; also the balance as-of date where applicable.
$interval = 'month'; // string | Calendar bucket for time-series graphs.
$limit = 10; // int | Maximum ranked categories where the graph supports a limit.
$currency = 'currency_example'; // string | Optional ISO 4217 currency filter; does not request arbitrary currency conversion.

try {
    $result = $api->analytics()->analyticsCards($group, $start, $end, $interval, $limit, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->analytics->analyticsCards: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group** | **string**| Select a related statistics-card group. See GET /analytics for available group metadata. | |
| **start** | **\DateTime**| Inclusive first activity date in YYYY-MM-DD format. | [optional] |
| **end** | **\DateTime**| Inclusive last activity date; also the balance as-of date where applicable. | [optional] |
| **interval** | **string**| Calendar bucket for time-series graphs. | [optional] [default to &#39;month&#39;] |
| **limit** | **int**| Maximum ranked categories where the graph supports a limit. | [optional] [default to 10] |
| **currency** | **string**| Optional ISO 4217 currency filter; does not request arbitrary currency conversion. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `analyticsCatalog()`

```php
analyticsCatalog(): null|string|array
```

Available analytics graphs and card groups

Requires `analytics`. Lists available graph and grouped-card identifiers. Uses the authenticated company; no company override is accepted. This metadata request never refreshes views.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->analytics()->analyticsCatalog();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->analytics->analyticsCatalog: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

This endpoint does not need any parameter.

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `analyticsGraph()`

```php
analyticsGraph($graph, $start, $end, $interval, $limit, $currency): null|string|array
```

One frontend-ready analytics graph

One HTTP request returns one graph with chart type, data, labels, series/legend, units, and calculation metadata. Requires `analytics`. Expense self-only restrictions and company feature gates still apply. Reads materialized analytics only; never refreshes in HTTP. Decimal monetary values are strings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$graph = 'graph_example'; // string | Select one of the implemented graph identifiers. See GET /analytics for localized titles, metric IDs, bases and feature requirements.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Inclusive first activity date in YYYY-MM-DD format.
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Inclusive last activity date; also the balance as-of date where applicable.
$interval = 'month'; // string | Calendar bucket for time-series graphs.
$limit = 10; // int | Maximum ranked categories where the graph supports a limit.
$currency = 'currency_example'; // string | Optional ISO 4217 currency filter; does not request arbitrary currency conversion.

try {
    $result = $api->analytics()->analyticsGraph($graph, $start, $end, $interval, $limit, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->analytics->analyticsGraph: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **graph** | **string**| Select one of the implemented graph identifiers. See GET /analytics for localized titles, metric IDs, bases and feature requirements. | |
| **start** | **\DateTime**| Inclusive first activity date in YYYY-MM-DD format. | [optional] |
| **end** | **\DateTime**| Inclusive last activity date; also the balance as-of date where applicable. | [optional] |
| **interval** | **string**| Calendar bucket for time-series graphs. | [optional] [default to &#39;month&#39;] |
| **limit** | **int**| Maximum ranked categories where the graph supports a limit. | [optional] [default to 10] |
| **currency** | **string**| Optional ISO 4217 currency filter; does not request arbitrary currency conversion. | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# Accounting\JournalApi

All URIs are relative to https://api.accounting.sh, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**journalBalances()**](JournalApi.md#journalBalances) | **GET** /journal/balances | Account balances |
| [**journalBalancesheet()**](JournalApi.md#journalBalancesheet) | **GET** /journal/reports/balance-sheet | Balance sheet |
| [**journalCorrectionAdd()**](JournalApi.md#journalCorrectionAdd) | **POST** /journal/corrections | Add correction |
| [**journalCorrectionDelete()**](JournalApi.md#journalCorrectionDelete) | **DELETE** /journal/corrections/{uuid} | Reject changes to immutable correction |
| [**journalCorrectionDetails()**](JournalApi.md#journalCorrectionDetails) | **GET** /journal/corrections/{uuid} | Details correction |
| [**journalCorrectionList()**](JournalApi.md#journalCorrectionList) | **GET** /journal/corrections | List correction |
| [**journalCorrectionUpdate()**](JournalApi.md#journalCorrectionUpdate) | **PUT** /journal/corrections/{uuid} | Reject changes to immutable correction |
| [**journalEntryAdd()**](JournalApi.md#journalEntryAdd) | **POST** /journal/{journal_uuid}/entries | Add entry |
| [**journalEntryDelete()**](JournalApi.md#journalEntryDelete) | **DELETE** /journal/{journal_uuid}/entries/{entry_uuid} | Delete entry |
| [**journalEntryDetails()**](JournalApi.md#journalEntryDetails) | **GET** /journal/{journal_uuid}/entries/{entry_uuid} | Details entry |
| [**journalEntryList()**](JournalApi.md#journalEntryList) | **GET** /journal/{journal_uuid}/entries | List entry |
| [**journalEntryUpdate()**](JournalApi.md#journalEntryUpdate) | **PUT** /journal/{journal_uuid}/entries/{entry_uuid} | Update entry |
| [**journalEvidenceAdd()**](JournalApi.md#journalEvidenceAdd) | **POST** /journal/{journal_uuid}/entries/{entry_uuid}/evidence | Add evidence |
| [**journalEvidenceDelete()**](JournalApi.md#journalEvidenceDelete) | **DELETE** /journal/{journal_uuid}/entries/{entry_uuid}/evidence/{uuid} | Reject changes to immutable evidence |
| [**journalEvidenceDetails()**](JournalApi.md#journalEvidenceDetails) | **GET** /journal/{journal_uuid}/entries/{entry_uuid}/evidence/{uuid} | Details evidence |
| [**journalEvidenceList()**](JournalApi.md#journalEvidenceList) | **GET** /journal/{journal_uuid}/entries/{entry_uuid}/evidence | List evidence |
| [**journalEvidenceUpdate()**](JournalApi.md#journalEvidenceUpdate) | **PUT** /journal/{journal_uuid}/entries/{entry_uuid}/evidence/{uuid} | Reject changes to immutable evidence |
| [**journalExportAdd()**](JournalApi.md#journalExportAdd) | **POST** /journal/exports | Add export |
| [**journalExportDelete()**](JournalApi.md#journalExportDelete) | **DELETE** /journal/exports/{uuid} | Reject changes to immutable export |
| [**journalExportDetails()**](JournalApi.md#journalExportDetails) | **GET** /journal/exports/{uuid} | Details export |
| [**journalExportList()**](JournalApi.md#journalExportList) | **GET** /journal/exports | List export |
| [**journalExportUpdate()**](JournalApi.md#journalExportUpdate) | **PUT** /journal/exports/{uuid} | Reject changes to immutable export |
| [**journalInitializationAdd()**](JournalApi.md#journalInitializationAdd) | **POST** /journal/initializations | Add initialization |
| [**journalInitializationDelete()**](JournalApi.md#journalInitializationDelete) | **DELETE** /journal/initializations/{uuid} | Reject changes to immutable initialization |
| [**journalInitializationDetails()**](JournalApi.md#journalInitializationDetails) | **GET** /journal/initializations/{uuid} | Details initialization |
| [**journalInitializationList()**](JournalApi.md#journalInitializationList) | **GET** /journal/initializations | List initialization |
| [**journalInitializationUpdate()**](JournalApi.md#journalInitializationUpdate) | **PUT** /journal/initializations/{uuid} | Reject changes to immutable initialization |
| [**journalIssueAdd()**](JournalApi.md#journalIssueAdd) | **POST** /journal/issues | Reject changes to immutable issue |
| [**journalIssueDelete()**](JournalApi.md#journalIssueDelete) | **DELETE** /journal/issues/{uuid} | Reject changes to immutable issue |
| [**journalIssueDetails()**](JournalApi.md#journalIssueDetails) | **GET** /journal/issues/{uuid} | Details issue |
| [**journalIssueList()**](JournalApi.md#journalIssueList) | **GET** /journal/issues | List issue |
| [**journalIssueUpdate()**](JournalApi.md#journalIssueUpdate) | **PUT** /journal/issues/{uuid} | Reject changes to immutable issue |
| [**journalJournalAdd()**](JournalApi.md#journalJournalAdd) | **POST** /journal | Add journal |
| [**journalJournalDelete()**](JournalApi.md#journalJournalDelete) | **DELETE** /journal/{journal_uuid} | Delete journal |
| [**journalJournalDetails()**](JournalApi.md#journalJournalDetails) | **GET** /journal/{journal_uuid} | Details journal |
| [**journalJournalList()**](JournalApi.md#journalJournalList) | **GET** /journal | List journal |
| [**journalJournalUpdate()**](JournalApi.md#journalJournalUpdate) | **PUT** /journal/{journal_uuid} | Update journal |
| [**journalMappingAdd()**](JournalApi.md#journalMappingAdd) | **POST** /journal/mappings | Add mapping |
| [**journalMappingDelete()**](JournalApi.md#journalMappingDelete) | **DELETE** /journal/mappings/{uuid} | Delete mapping |
| [**journalMappingDetails()**](JournalApi.md#journalMappingDetails) | **GET** /journal/mappings/{uuid} | Details mapping |
| [**journalMappingList()**](JournalApi.md#journalMappingList) | **GET** /journal/mappings | List mapping |
| [**journalMappingUpdate()**](JournalApi.md#journalMappingUpdate) | **PUT** /journal/mappings/{uuid} | Update mapping |
| [**journalMovements()**](JournalApi.md#journalMovements) | **GET** /journal/movements | Posted account movements |
| [**journalPeriodAdd()**](JournalApi.md#journalPeriodAdd) | **POST** /journal/periods | Add period |
| [**journalPeriodDelete()**](JournalApi.md#journalPeriodDelete) | **DELETE** /journal/periods/{uuid} | Delete period |
| [**journalPeriodDetails()**](JournalApi.md#journalPeriodDetails) | **GET** /journal/periods/{uuid} | Details period |
| [**journalPeriodList()**](JournalApi.md#journalPeriodList) | **GET** /journal/periods | List period |
| [**journalPeriodUpdate()**](JournalApi.md#journalPeriodUpdate) | **PUT** /journal/periods/{uuid} | Update period |
| [**journalProfitandloss()**](JournalApi.md#journalProfitandloss) | **GET** /journal/reports/profit-and-loss | Profit and loss |
| [**journalTrialbalance()**](JournalApi.md#journalTrialbalance) | **GET** /journal/reports/trial-balance | Trial balance |


## `journalBalances()`

```php
journalBalances($from, $to, $code, $contact, $journal, $period, $bankAccount, $groupByContact): null|string|array
```

Account balances

Posted entries only; exact decimal strings use ISO minor-unit precision in the preserved company books currency (EUR 2, JPY 0, KWD 3). Requires `journal.report.view`. Reports do not certify country compliance or source completeness.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$code = 'code_example'; // string
$contact = 'contact_example'; // string
$journal = 'journal_example'; // string
$period = 'period_example'; // string
$bankAccount = 'bankAccount_example'; // string
$groupByContact = True; // bool

try {
    $result = $api->journal()->journalBalances($from, $to, $code, $contact, $journal, $period, $bankAccount, $groupByContact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalBalances: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **\DateTime**|  | [optional] |
| **to** | **\DateTime**|  | [optional] |
| **code** | **string**|  | [optional] |
| **contact** | **string**|  | [optional] |
| **journal** | **string**|  | [optional] |
| **period** | **string**|  | [optional] |
| **bankAccount** | **string**|  | [optional] |
| **groupByContact** | **bool**|  | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalBalancesheet()`

```php
journalBalancesheet($from, $to, $code, $contact, $journal, $period, $bankAccount): null|string|array
```

Balance sheet

Posted entries only; exact decimal strings use ISO minor-unit precision in the preserved company books currency (EUR 2, JPY 0, KWD 3). Requires `journal.report.view`. Reports do not certify country compliance or source completeness.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$code = 'code_example'; // string
$contact = 'contact_example'; // string
$journal = 'journal_example'; // string
$period = 'period_example'; // string
$bankAccount = 'bankAccount_example'; // string

try {
    $result = $api->journal()->journalBalancesheet($from, $to, $code, $contact, $journal, $period, $bankAccount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalBalancesheet: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **\DateTime**|  | [optional] |
| **to** | **\DateTime**|  | [optional] |
| **code** | **string**|  | [optional] |
| **contact** | **string**|  | [optional] |
| **journal** | **string**|  | [optional] |
| **period** | **string**|  | [optional] |
| **bankAccount** | **string**|  | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalCorrectionAdd()`

```php
journalCorrectionAdd($journalCorrectionAddRequest): null|string|array
```

Add correction

All identifiers are scoped to the authenticated company. Only posted manual entries can be corrected here. The original, reversal and optional replacement remain linked. Generated corrections follow the source workflow. Requires `journal.correction.add`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalCorrectionAddRequest = [/*...*/]; // array

try {
    $result = $api->journal()->journalCorrectionAdd($journalCorrectionAddRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalCorrectionAdd: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journalCorrectionAddRequest** | [see journalCorrectionAdd](https://api.accounting.sh/swagger.html#operation/journalCorrectionAdd)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalCorrectionDelete()`

```php
journalCorrectionDelete($uuid)
```

Reject changes to immutable correction

All identifiers are scoped to the authenticated company. Only posted manual entries can be corrected here. The original, reversal and optional replacement remain linked. Generated corrections follow the source workflow. This write is unsupported and returns 405. Requires `journal.correction.view`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $api->journal()->journalCorrectionDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalCorrectionDelete: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalCorrectionDetails()`

```php
journalCorrectionDetails($uuid): null|string|array
```

Details correction

All identifiers are scoped to the authenticated company. Only posted manual entries can be corrected here. The original, reversal and optional replacement remain linked. Generated corrections follow the source workflow. Requires `journal.correction.view`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->journal()->journalCorrectionDetails($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalCorrectionDetails: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalCorrectionList()`

```php
journalCorrectionList($page, $perPage, $originalEntry): null|string|array
```

List correction

All identifiers are scoped to the authenticated company. Only posted manual entries can be corrected here. The original, reversal and optional replacement remain linked. Generated corrections follow the source workflow. Requires `journal.correction.list`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$page = 56; // int
$perPage = 56; // int
$originalEntry = 'originalEntry_example'; // string

try {
    $result = $api->journal()->journalCorrectionList($page, $perPage, $originalEntry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalCorrectionList: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **perPage** | **int**|  | [optional] |
| **originalEntry** | **string**|  | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalCorrectionUpdate()`

```php
journalCorrectionUpdate($uuid)
```

Reject changes to immutable correction

All identifiers are scoped to the authenticated company. Only posted manual entries can be corrected here. The original, reversal and optional replacement remain linked. Generated corrections follow the source workflow. This write is unsupported and returns 405. Requires `journal.correction.view`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $api->journal()->journalCorrectionUpdate($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalCorrectionUpdate: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalEntryAdd()`

```php
journalEntryAdd($journalUuid, $journalEntryAddRequest): null|string|array
```

Add entry

All identifiers are scoped to the authenticated company. Entries are scoped to their parent journal. Generated and posted financial content is immutable. Lines are saved atomically; amounts use exact decimal strings in major currency units. Posting requires `journal.entry.post` and an open period; opening entries additionally require `journal.entry.opening` and reviewed initialization. Requires `journal.entry.add`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalUuid = 'journalUuid_example'; // string
$journalEntryAddRequest = [/*...*/]; // array

try {
    $result = $api->journal()->journalEntryAdd($journalUuid, $journalEntryAddRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalEntryAdd: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journalUuid** | **string**|  | |
| **journalEntryAddRequest** | [see journalEntryAdd](https://api.accounting.sh/swagger.html#operation/journalEntryAdd)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalEntryDelete()`

```php
journalEntryDelete($journalUuid, $entryUuid): null|string|array
```

Delete entry

All identifiers are scoped to the authenticated company. Entries are scoped to their parent journal. Generated and posted financial content is immutable. Lines are saved atomically; amounts use exact decimal strings in major currency units. Posting requires `journal.entry.post` and an open period; opening entries additionally require `journal.entry.opening` and reviewed initialization. Requires `journal.entry.delete`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalUuid = 'journalUuid_example'; // string
$entryUuid = 'entryUuid_example'; // string

try {
    $result = $api->journal()->journalEntryDelete($journalUuid, $entryUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalEntryDelete: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journalUuid** | **string**|  | |
| **entryUuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalEntryDetails()`

```php
journalEntryDetails($journalUuid, $entryUuid): null|string|array
```

Details entry

All identifiers are scoped to the authenticated company. Entries are scoped to their parent journal. Generated and posted financial content is immutable. Lines are saved atomically; amounts use exact decimal strings in major currency units. Posting requires `journal.entry.post` and an open period; opening entries additionally require `journal.entry.opening` and reviewed initialization. Requires `journal.entry.view`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalUuid = 'journalUuid_example'; // string
$entryUuid = 'entryUuid_example'; // string

try {
    $result = $api->journal()->journalEntryDetails($journalUuid, $entryUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalEntryDetails: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journalUuid** | **string**|  | |
| **entryUuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalEntryList()`

```php
journalEntryList($journalUuid, $page, $perPage, $status, $origin, $period, $accountingDate, $from, $to, $sourceType, $sourceUuid, $code, $contact): null|string|array
```

List entry

All identifiers are scoped to the authenticated company. Entries are scoped to their parent journal. Generated and posted financial content is immutable. Lines are saved atomically; amounts use exact decimal strings in major currency units. Posting requires `journal.entry.post` and an open period; opening entries additionally require `journal.entry.opening` and reviewed initialization. Requires `journal.entry.list`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalUuid = 'journalUuid_example'; // string
$page = 56; // int
$perPage = 56; // int
$status = 'status_example'; // string
$origin = 'origin_example'; // string
$period = 'period_example'; // string
$accountingDate = 'accountingDate_example'; // string
$from = 'from_example'; // string
$to = 'to_example'; // string
$sourceType = 'sourceType_example'; // string
$sourceUuid = 'sourceUuid_example'; // string
$code = 'code_example'; // string
$contact = 'contact_example'; // string

try {
    $result = $api->journal()->journalEntryList($journalUuid, $page, $perPage, $status, $origin, $period, $accountingDate, $from, $to, $sourceType, $sourceUuid, $code, $contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalEntryList: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journalUuid** | **string**|  | |
| **page** | **int**|  | [optional] |
| **perPage** | **int**|  | [optional] |
| **status** | **string**|  | [optional] |
| **origin** | **string**|  | [optional] |
| **period** | **string**|  | [optional] |
| **accountingDate** | **string**|  | [optional] |
| **from** | **string**|  | [optional] |
| **to** | **string**|  | [optional] |
| **sourceType** | **string**|  | [optional] |
| **sourceUuid** | **string**|  | [optional] |
| **code** | **string**|  | [optional] |
| **contact** | **string**|  | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalEntryUpdate()`

```php
journalEntryUpdate($journalUuid, $entryUuid, $journalEntryUpdateRequest): null|string|array
```

Update entry

All identifiers are scoped to the authenticated company. Entries are scoped to their parent journal. Generated and posted financial content is immutable. Lines are saved atomically; amounts use exact decimal strings in major currency units. Posting requires `journal.entry.post` and an open period; opening entries additionally require `journal.entry.opening` and reviewed initialization. Requires `journal.entry.edit`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalUuid = 'journalUuid_example'; // string
$entryUuid = 'entryUuid_example'; // string
$journalEntryUpdateRequest = [/*...*/]; // array

try {
    $result = $api->journal()->journalEntryUpdate($journalUuid, $entryUuid, $journalEntryUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalEntryUpdate: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journalUuid** | **string**|  | |
| **entryUuid** | **string**|  | |
| **journalEntryUpdateRequest** | [see journalEntryUpdate](https://api.accounting.sh/swagger.html#operation/journalEntryUpdate)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalEvidenceAdd()`

```php
journalEvidenceAdd($journalUuid, $entryUuid, $journalEvidenceAddRequest): null|string|array
```

Add evidence

All identifiers are scoped to the authenticated company. Evidence links are append-only; the document and entry must belong to the authenticated company. Requires `journal.evidence.add`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalUuid = 'journalUuid_example'; // string
$entryUuid = 'entryUuid_example'; // string
$journalEvidenceAddRequest = [/*...*/]; // array

try {
    $result = $api->journal()->journalEvidenceAdd($journalUuid, $entryUuid, $journalEvidenceAddRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalEvidenceAdd: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journalUuid** | **string**|  | |
| **entryUuid** | **string**|  | |
| **journalEvidenceAddRequest** | [see journalEvidenceAdd](https://api.accounting.sh/swagger.html#operation/journalEvidenceAdd)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalEvidenceDelete()`

```php
journalEvidenceDelete($journalUuid, $entryUuid, $uuid)
```

Reject changes to immutable evidence

All identifiers are scoped to the authenticated company. Evidence links are append-only; the document and entry must belong to the authenticated company. This write is unsupported and returns 405. Requires `journal.evidence.view`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalUuid = 'journalUuid_example'; // string
$entryUuid = 'entryUuid_example'; // string
$uuid = 'uuid_example'; // string

try {
    $api->journal()->journalEvidenceDelete($journalUuid, $entryUuid, $uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalEvidenceDelete: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journalUuid** | **string**|  | |
| **entryUuid** | **string**|  | |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalEvidenceDetails()`

```php
journalEvidenceDetails($journalUuid, $entryUuid, $uuid): null|string|array
```

Details evidence

All identifiers are scoped to the authenticated company. Evidence links are append-only; the document and entry must belong to the authenticated company. Requires `journal.evidence.view`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalUuid = 'journalUuid_example'; // string
$entryUuid = 'entryUuid_example'; // string
$uuid = 'uuid_example'; // string

try {
    $result = $api->journal()->journalEvidenceDetails($journalUuid, $entryUuid, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalEvidenceDetails: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journalUuid** | **string**|  | |
| **entryUuid** | **string**|  | |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalEvidenceList()`

```php
journalEvidenceList($journalUuid, $entryUuid, $page, $perPage): null|string|array
```

List evidence

All identifiers are scoped to the authenticated company. Evidence links are append-only; the document and entry must belong to the authenticated company. Requires `journal.evidence.list`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalUuid = 'journalUuid_example'; // string
$entryUuid = 'entryUuid_example'; // string
$page = 56; // int
$perPage = 56; // int

try {
    $result = $api->journal()->journalEvidenceList($journalUuid, $entryUuid, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalEvidenceList: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journalUuid** | **string**|  | |
| **entryUuid** | **string**|  | |
| **page** | **int**|  | [optional] |
| **perPage** | **int**|  | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalEvidenceUpdate()`

```php
journalEvidenceUpdate($journalUuid, $entryUuid, $uuid)
```

Reject changes to immutable evidence

All identifiers are scoped to the authenticated company. Evidence links are append-only; the document and entry must belong to the authenticated company. This write is unsupported and returns 405. Requires `journal.evidence.view`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalUuid = 'journalUuid_example'; // string
$entryUuid = 'entryUuid_example'; // string
$uuid = 'uuid_example'; // string

try {
    $api->journal()->journalEvidenceUpdate($journalUuid, $entryUuid, $uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalEvidenceUpdate: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journalUuid** | **string**|  | |
| **entryUuid** | **string**|  | |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalExportAdd()`

```php
journalExportAdd($journalExportAddRequest): null|string|array
```

Add export

All identifiers are scoped to the authenticated company. Creation queues generation and returns status=pending. Poll the owned details resource until status=ready; its CSV is loaded from S3 as JSON data with a SHA-256 hash; this is not a statutory export. Requires `journal.export.add`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalExportAddRequest = [/*...*/]; // array

try {
    $result = $api->journal()->journalExportAdd($journalExportAddRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalExportAdd: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journalExportAddRequest** | [see journalExportAdd](https://api.accounting.sh/swagger.html#operation/journalExportAdd)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalExportDelete()`

```php
journalExportDelete($uuid)
```

Reject changes to immutable export

All identifiers are scoped to the authenticated company. Creation queues generation and returns status=pending. Poll the owned details resource until status=ready; its CSV is loaded from S3 as JSON data with a SHA-256 hash; this is not a statutory export. This write is unsupported and returns 405. Requires `journal.export.view`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $api->journal()->journalExportDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalExportDelete: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalExportDetails()`

```php
journalExportDetails($uuid): null|string|array
```

Details export

All identifiers are scoped to the authenticated company. Creation queues generation and returns status=pending. Poll the owned details resource until status=ready; its CSV is loaded from S3 as JSON data with a SHA-256 hash; this is not a statutory export. Requires `journal.export.view`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->journal()->journalExportDetails($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalExportDetails: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalExportList()`

```php
journalExportList($page, $perPage): null|string|array
```

List export

All identifiers are scoped to the authenticated company. Creation queues generation and returns status=pending. Poll the owned details resource until status=ready; its CSV is loaded from S3 as JSON data with a SHA-256 hash; this is not a statutory export. Requires `journal.export.list`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$page = 56; // int
$perPage = 56; // int

try {
    $result = $api->journal()->journalExportList($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalExportList: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **perPage** | **int**|  | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalExportUpdate()`

```php
journalExportUpdate($uuid)
```

Reject changes to immutable export

All identifiers are scoped to the authenticated company. Creation queues generation and returns status=pending. Poll the owned details resource until status=ready; its CSV is loaded from S3 as JSON data with a SHA-256 hash; this is not a statutory export. This write is unsupported and returns 405. Requires `journal.export.view`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $api->journal()->journalExportUpdate($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalExportUpdate: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalInitializationAdd()`

```php
journalInitializationAdd($journalInitializationAddRequest): null|string|array
```

Add initialization

Creation schedules historical processing. Explicit zero opening with automatic_setup also prepares journals and mappings and requires `journal.add`, `journal.mapping.add` and `accounting_code.add`. replace_unposted additionally requires `journal.mapping.edit` and refuses any financial history. Requires `journal.initialization.add`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalInitializationAddRequest = [/*...*/]; // array

try {
    $result = $api->journal()->journalInitializationAdd($journalInitializationAddRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalInitializationAdd: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journalInitializationAddRequest** | [see journalInitializationAdd](https://api.accounting.sh/swagger.html#operation/journalInitializationAdd)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalInitializationDelete()`

```php
journalInitializationDelete($uuid)
```

Reject changes to immutable initialization

All identifiers are scoped to the authenticated company. Creation schedules historical processing; status remains system-managed. This write is unsupported and returns 405. Requires `journal.initialization.view`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $api->journal()->journalInitializationDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalInitializationDelete: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalInitializationDetails()`

```php
journalInitializationDetails($uuid): null|string|array
```

Details initialization

All identifiers are scoped to the authenticated company. Creation schedules historical processing; status remains system-managed. Requires `journal.initialization.view`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->journal()->journalInitializationDetails($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalInitializationDetails: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalInitializationList()`

```php
journalInitializationList($page, $perPage, $status): null|string|array
```

List initialization

All identifiers are scoped to the authenticated company. Creation schedules historical processing; status remains system-managed. Requires `journal.initialization.list`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$page = 56; // int
$perPage = 56; // int
$status = 'status_example'; // string

try {
    $result = $api->journal()->journalInitializationList($page, $perPage, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalInitializationList: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **perPage** | **int**|  | [optional] |
| **status** | **string**|  | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalInitializationUpdate()`

```php
journalInitializationUpdate($uuid)
```

Reject changes to immutable initialization

All identifiers are scoped to the authenticated company. Creation schedules historical processing; status remains system-managed. This write is unsupported and returns 405. Requires `journal.initialization.view`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $api->journal()->journalInitializationUpdate($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalInitializationUpdate: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalIssueAdd()`

```php
journalIssueAdd()
```

Reject changes to immutable issue

All identifiers are scoped to the authenticated company. This write is unsupported and returns 405. Requires `journal.issue.view`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $api->journal()->journalIssueAdd();
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalIssueAdd: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

This endpoint does not need any parameter.

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalIssueDelete()`

```php
journalIssueDelete($uuid)
```

Reject changes to immutable issue

All identifiers are scoped to the authenticated company. This write is unsupported and returns 405. Requires `journal.issue.view`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $api->journal()->journalIssueDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalIssueDelete: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalIssueDetails()`

```php
journalIssueDetails($uuid): null|string|array
```

Details issue

All identifiers are scoped to the authenticated company. Requires `journal.issue.view`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->journal()->journalIssueDetails($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalIssueDetails: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalIssueList()`

```php
journalIssueList($page, $perPage, $status, $sourceType, $sourceUuid, $event): null|string|array
```

List issue

All identifiers are scoped to the authenticated company. Requires `journal.issue.list`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$page = 56; // int
$perPage = 56; // int
$status = 'status_example'; // string
$sourceType = 'sourceType_example'; // string
$sourceUuid = 'sourceUuid_example'; // string
$event = 'event_example'; // string

try {
    $result = $api->journal()->journalIssueList($page, $perPage, $status, $sourceType, $sourceUuid, $event);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalIssueList: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **perPage** | **int**|  | [optional] |
| **status** | **string**|  | [optional] |
| **sourceType** | **string**|  | [optional] |
| **sourceUuid** | **string**|  | [optional] |
| **event** | **string**|  | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalIssueUpdate()`

```php
journalIssueUpdate($uuid)
```

Reject changes to immutable issue

All identifiers are scoped to the authenticated company. This write is unsupported and returns 405. Requires `journal.issue.view`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $api->journal()->journalIssueUpdate($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalIssueUpdate: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalJournalAdd()`

```php
journalJournalAdd($journalJournalAddRequest): null|string|array
```

Add journal

All identifiers are scoped to the authenticated company. Requires `journal.add`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalJournalAddRequest = [/*...*/]; // array

try {
    $result = $api->journal()->journalJournalAdd($journalJournalAddRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalJournalAdd: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journalJournalAddRequest** | [see journalJournalAdd](https://api.accounting.sh/swagger.html#operation/journalJournalAdd)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalJournalDelete()`

```php
journalJournalDelete($journalUuid): null|string|array
```

Delete journal

All identifiers are scoped to the authenticated company. Requires `journal.delete`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalUuid = 'journalUuid_example'; // string

try {
    $result = $api->journal()->journalJournalDelete($journalUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalJournalDelete: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journalUuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalJournalDetails()`

```php
journalJournalDetails($journalUuid): null|string|array
```

Details journal

All identifiers are scoped to the authenticated company. Requires `journal.view`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalUuid = 'journalUuid_example'; // string

try {
    $result = $api->journal()->journalJournalDetails($journalUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalJournalDetails: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journalUuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalJournalList()`

```php
journalJournalList($page, $perPage, $status, $type): null|string|array
```

List journal

All identifiers are scoped to the authenticated company. Requires `journal.list`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$page = 56; // int
$perPage = 56; // int
$status = 'status_example'; // string
$type = 'type_example'; // string

try {
    $result = $api->journal()->journalJournalList($page, $perPage, $status, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalJournalList: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **perPage** | **int**|  | [optional] |
| **status** | **string**|  | [optional] |
| **type** | **string**|  | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalJournalUpdate()`

```php
journalJournalUpdate($journalUuid, $journalJournalUpdateRequest): null|string|array
```

Update journal

All identifiers are scoped to the authenticated company. Requires `journal.edit`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalUuid = 'journalUuid_example'; // string
$journalJournalUpdateRequest = [/*...*/]; // array

try {
    $result = $api->journal()->journalJournalUpdate($journalUuid, $journalJournalUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalJournalUpdate: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journalUuid** | **string**|  | |
| **journalJournalUpdateRequest** | [see journalJournalUpdate](https://api.accounting.sh/swagger.html#operation/journalJournalUpdate)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalMappingAdd()`

```php
journalMappingAdd($journalMappingAddRequest): null|string|array
```

Add mapping

All identifiers are scoped to the authenticated company. The code field identifies an existing accounting code UUID. No accounting codes are created by this endpoint. Requires `journal.mapping.add`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalMappingAddRequest = [/*...*/]; // array

try {
    $result = $api->journal()->journalMappingAdd($journalMappingAddRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalMappingAdd: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journalMappingAddRequest** | [see journalMappingAdd](https://api.accounting.sh/swagger.html#operation/journalMappingAdd)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalMappingDelete()`

```php
journalMappingDelete($uuid): null|string|array
```

Delete mapping

All identifiers are scoped to the authenticated company. The code field identifies an existing accounting code UUID. No accounting codes are created by this endpoint. Requires `journal.mapping.delete`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->journal()->journalMappingDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalMappingDelete: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalMappingDetails()`

```php
journalMappingDetails($uuid): null|string|array
```

Details mapping

All identifiers are scoped to the authenticated company. The code field identifies an existing accounting code UUID. No accounting codes are created by this endpoint. Requires `journal.mapping.view`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->journal()->journalMappingDetails($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalMappingDetails: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalMappingList()`

```php
journalMappingList($page, $perPage, $role, $scope, $status): null|string|array
```

List mapping

All identifiers are scoped to the authenticated company. The code field identifies an existing accounting code UUID. No accounting codes are created by this endpoint. Requires `journal.mapping.list`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$page = 56; // int
$perPage = 56; // int
$role = 'role_example'; // string
$scope = 'scope_example'; // string
$status = 'status_example'; // string

try {
    $result = $api->journal()->journalMappingList($page, $perPage, $role, $scope, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalMappingList: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **perPage** | **int**|  | [optional] |
| **role** | **string**|  | [optional] |
| **scope** | **string**|  | [optional] |
| **status** | **string**|  | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalMappingUpdate()`

```php
journalMappingUpdate($uuid, $journalMappingUpdateRequest): null|string|array
```

Update mapping

All identifiers are scoped to the authenticated company. The code field identifies an existing accounting code UUID. No accounting codes are created by this endpoint. Requires `journal.mapping.edit`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string
$journalMappingUpdateRequest = [/*...*/]; // array

try {
    $result = $api->journal()->journalMappingUpdate($uuid, $journalMappingUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalMappingUpdate: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **journalMappingUpdateRequest** | [see journalMappingUpdate](https://api.accounting.sh/swagger.html#operation/journalMappingUpdate)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalMovements()`

```php
journalMovements($code, $from, $to, $contact, $journal, $period, $bankAccount, $page, $perPage): null|string|array
```

Posted account movements

Posted entries only; exact decimal strings use ISO minor-unit precision in the preserved company books currency (EUR 2, JPY 0, KWD 3). Requires `journal.report.view`. Reports do not certify country compliance or source completeness.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$code = 'code_example'; // string
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$contact = 'contact_example'; // string
$journal = 'journal_example'; // string
$period = 'period_example'; // string
$bankAccount = 'bankAccount_example'; // string
$page = 56; // int
$perPage = 56; // int

try {
    $result = $api->journal()->journalMovements($code, $from, $to, $contact, $journal, $period, $bankAccount, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalMovements: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | |
| **from** | **\DateTime**|  | [optional] |
| **to** | **\DateTime**|  | [optional] |
| **contact** | **string**|  | [optional] |
| **journal** | **string**|  | [optional] |
| **period** | **string**|  | [optional] |
| **bankAccount** | **string**|  | [optional] |
| **page** | **int**|  | [optional] |
| **perPage** | **int**|  | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalPeriodAdd()`

```php
journalPeriodAdd($journalPeriodAddRequest): null|string|array
```

Add period

All identifiers are scoped to the authenticated company. Requires `journal.period.add`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalPeriodAddRequest = [/*...*/]; // array

try {
    $result = $api->journal()->journalPeriodAdd($journalPeriodAddRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalPeriodAdd: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journalPeriodAddRequest** | [see journalPeriodAdd](https://api.accounting.sh/swagger.html#operation/journalPeriodAdd)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalPeriodDelete()`

```php
journalPeriodDelete($uuid): null|string|array
```

Delete period

All identifiers are scoped to the authenticated company. Requires `journal.period.delete`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->journal()->journalPeriodDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalPeriodDelete: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalPeriodDetails()`

```php
journalPeriodDetails($uuid): null|string|array
```

Details period

All identifiers are scoped to the authenticated company. Requires `journal.period.view`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->journal()->journalPeriodDetails($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalPeriodDetails: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalPeriodList()`

```php
journalPeriodList($page, $perPage, $status): null|string|array
```

List period

All identifiers are scoped to the authenticated company. Requires `journal.period.list`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$page = 56; // int
$perPage = 56; // int
$status = 'status_example'; // string

try {
    $result = $api->journal()->journalPeriodList($page, $perPage, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalPeriodList: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **perPage** | **int**|  | [optional] |
| **status** | **string**|  | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalPeriodUpdate()`

```php
journalPeriodUpdate($uuid, $journalPeriodUpdateRequest): null|string|array
```

Update period

All identifiers are scoped to the authenticated company. Requires `journal.period.edit`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string
$journalPeriodUpdateRequest = [/*...*/]; // array

try {
    $result = $api->journal()->journalPeriodUpdate($uuid, $journalPeriodUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalPeriodUpdate: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **journalPeriodUpdateRequest** | [see journalPeriodUpdate](https://api.accounting.sh/swagger.html#operation/journalPeriodUpdate)|  | |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalProfitandloss()`

```php
journalProfitandloss($from, $to, $code, $contact, $journal, $period, $bankAccount): null|string|array
```

Profit and loss

Posted entries only; exact decimal strings use ISO minor-unit precision in the preserved company books currency (EUR 2, JPY 0, KWD 3). Requires `journal.report.view`. Reports do not certify country compliance or source completeness.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$code = 'code_example'; // string
$contact = 'contact_example'; // string
$journal = 'journal_example'; // string
$period = 'period_example'; // string
$bankAccount = 'bankAccount_example'; // string

try {
    $result = $api->journal()->journalProfitandloss($from, $to, $code, $contact, $journal, $period, $bankAccount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalProfitandloss: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **\DateTime**|  | [optional] |
| **to** | **\DateTime**|  | [optional] |
| **code** | **string**|  | [optional] |
| **contact** | **string**|  | [optional] |
| **journal** | **string**|  | [optional] |
| **period** | **string**|  | [optional] |
| **bankAccount** | **string**|  | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalTrialbalance()`

```php
journalTrialbalance($from, $to, $code, $contact, $journal, $period, $bankAccount): null|string|array
```

Trial balance

Posted entries only; exact decimal strings use ISO minor-unit precision in the preserved company books currency (EUR 2, JPY 0, KWD 3). Requires `journal.report.view`. Reports do not certify country compliance or source completeness.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$code = 'code_example'; // string
$contact = 'contact_example'; // string
$journal = 'journal_example'; // string
$period = 'period_example'; // string
$bankAccount = 'bankAccount_example'; // string

try {
    $result = $api->journal()->journalTrialbalance($from, $to, $code, $contact, $journal, $period, $bankAccount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalTrialbalance: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **\DateTime**|  | [optional] |
| **to** | **\DateTime**|  | [optional] |
| **code** | **string**|  | [optional] |
| **contact** | **string**|  | [optional] |
| **journal** | **string**|  | [optional] |
| **period** | **string**|  | [optional] |
| **bankAccount** | **string**|  | [optional] |

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

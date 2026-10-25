<?php

//..deleteAccountConnection
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


//..importAccountTransactions
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The account UUID

try {
    $result = $api->accountConnections()->importAccountTransactions($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountConnections->importAccountTransactions: ', $e->getMessage(), PHP_EOL;
}


//..listAccountConnections
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


//..listBanks
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


//..listConnectableBankAccounts
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


//..listConnectedAccountTransactions
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


//..requestBankConnection
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


//..selectBankAccount
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


//..addAccountingCode
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addAccountingCodeRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->accountingCodes()->addAccountingCode($addAccountingCodeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountingCodes->addAccountingCode: ', $e->getMessage(), PHP_EOL;
}


//..deleteAccountingCode
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The accounting code uuid

try {
    $result = $api->accountingCodes()->deleteAccountingCode($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountingCodes->deleteAccountingCode: ', $e->getMessage(), PHP_EOL;
}


//..getAccountingCode
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The accounting code uuid

try {
    $result = $api->accountingCodes()->getAccountingCode($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountingCodes->getAccountingCode: ', $e->getMessage(), PHP_EOL;
}


//..listAccountingCodes
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->accountingCodes()->listAccountingCodes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountingCodes->listAccountingCodes: ', $e->getMessage(), PHP_EOL;
}


//..updateAccountingCode
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The accounting code uuid
$addAccountingCodeRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->accountingCodes()->updateAccountingCode($uuid, $addAccountingCodeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountingCodes->updateAccountingCode: ', $e->getMessage(), PHP_EOL;
}


//..addAccount
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addAccountRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->accounts()->addAccount($addAccountRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accounts->addAccount: ', $e->getMessage(), PHP_EOL;
}


//..deleteAccount
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The account uuid

try {
    $result = $api->accounts()->deleteAccount($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accounts->deleteAccount: ', $e->getMessage(), PHP_EOL;
}


//..getAccount
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The account uuid

try {
    $result = $api->accounts()->getAccount($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accounts->getAccount: ', $e->getMessage(), PHP_EOL;
}


//..listAccounts
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,name,bank,currency,journal_number; // string | Comma-separated fields to include in each record. Default fields: uuid, name, bank, currency, journal_number.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->accounts()->listAccounts($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accounts->listAccounts: ', $e->getMessage(), PHP_EOL;
}


//..updateAccount
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The account uuid
$addAccountRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->accounts()->updateAccount($uuid, $addAccountRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accounts->updateAccount: ', $e->getMessage(), PHP_EOL;
}


//..addAttachment
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addAttachmentRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->attachments()->addAttachment($addAttachmentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->attachments->addAttachment: ', $e->getMessage(), PHP_EOL;
}


//..deleteAttachment
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The attachment uuid

try {
    $result = $api->attachments()->deleteAttachment($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->attachments->deleteAttachment: ', $e->getMessage(), PHP_EOL;
}


//..getAttachment
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The attachment uuid

try {
    $result = $api->attachments()->getAttachment($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->attachments->getAttachment: ', $e->getMessage(), PHP_EOL;
}


//..listAttachments
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,document,attached_to; // string | Comma-separated fields to include in each record. Default fields: uuid, document, attached_to.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->attachments()->listAttachments($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->attachments->listAttachments: ', $e->getMessage(), PHP_EOL;
}


//..retrieveAttachments
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$resource = 'resource_example'; // string | The resource
$fields = uuid,document,attached_to; // string | Comma-separated fields to include in each record. Default fields: uuid, document, attached_to.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->attachments()->retrieveAttachments($resource, $fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->attachments->retrieveAttachments: ', $e->getMessage(), PHP_EOL;
}


//..updateAttachment
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The attachment uuid
$addAttachmentRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->attachments()->updateAttachment($uuid, $addAttachmentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->attachments->updateAttachment: ', $e->getMessage(), PHP_EOL;
}


//..authInit
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->auth()->authInit();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->auth->authInit: ', $e->getMessage(), PHP_EOL;
}


//..login
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$loginGetAliasRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->auth()->login($loginGetAliasRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->auth->login: ', $e->getMessage(), PHP_EOL;
}


//..loginGetAlias
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$loginGetAliasRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->auth()->loginGetAlias($loginGetAliasRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->auth->loginGetAlias: ', $e->getMessage(), PHP_EOL;
}


//..logout
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->auth()->logout();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->auth->logout: ', $e->getMessage(), PHP_EOL;
}


//..switchCompany
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$switchCompanyRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->auth()->switchCompany($switchCompanyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->auth->switchCompany: ', $e->getMessage(), PHP_EOL;
}


//..addBill
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addBillRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->bills()->addBill($addBillRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->bills->addBill: ', $e->getMessage(), PHP_EOL;
}


//..addBillPayment
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The bill uuid
$addBillPaymentRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->bills()->addBillPayment($uuid, $addBillPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->bills->addBillPayment: ', $e->getMessage(), PHP_EOL;
}


//..deleteBill
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The bill uuid

try {
    $result = $api->bills()->deleteBill($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->bills->deleteBill: ', $e->getMessage(), PHP_EOL;
}


//..getBill
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The bill uuid

try {
    $result = $api->bills()->getBill($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->bills->getBill: ', $e->getMessage(), PHP_EOL;
}


//..getBillDocument
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The invoice uuid

try {
    $result = $api->bills()->getBillDocument($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->bills->getBillDocument: ', $e->getMessage(), PHP_EOL;
}


//..listBills
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,contact,bill_number,status; // string | Comma-separated fields to include in each record. Default fields: uuid, contact, bill_number, status.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->bills()->listBills($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->bills->listBills: ', $e->getMessage(), PHP_EOL;
}


//..updateBill
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The bill uuid
$updateBillRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->bills()->updateBill($uuid, $updateBillRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->bills->updateBill: ', $e->getMessage(), PHP_EOL;
}


//..updateBillPayment
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The bill uuid
$payment = 'payment_example'; // string | The bill payment uuid
$addBillPaymentRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->bills()->updateBillPayment($uuid, $payment, $addBillPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->bills->updateBillPayment: ', $e->getMessage(), PHP_EOL;
}


//..addCategory
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addCategoryRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->categories()->addCategory($addCategoryRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->categories->addCategory: ', $e->getMessage(), PHP_EOL;
}


//..deleteCategory
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The category uuid

try {
    $result = $api->categories()->deleteCategory($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->categories->deleteCategory: ', $e->getMessage(), PHP_EOL;
}


//..getCategory
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The category uuid

try {
    $result = $api->categories()->getCategory($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->categories->getCategory: ', $e->getMessage(), PHP_EOL;
}


//..listCategories
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,name,type,color; // string | Comma-separated fields to include in each record. Default fields: uuid, name, type, color.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->categories()->listCategories($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->categories->listCategories: ', $e->getMessage(), PHP_EOL;
}


//..updateCategory
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The category uuid
$addCategoryRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->categories()->updateCategory($uuid, $addCategoryRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->categories->updateCategory: ', $e->getMessage(), PHP_EOL;
}


//..addCompany
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addCompanyRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->companies()->addCompany($addCompanyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->companies->addCompany: ', $e->getMessage(), PHP_EOL;
}


//..deleteCompany
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid

try {
    $result = $api->companies()->deleteCompany($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->companies->deleteCompany: ', $e->getMessage(), PHP_EOL;
}


//..getCompany
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid

try {
    $result = $api->companies()->getCompany($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->companies->getCompany: ', $e->getMessage(), PHP_EOL;
}


//..getCompanyCustomization
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid

try {
    $result = $api->companies()->getCompanyCustomization($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->companies->getCompanyCustomization: ', $e->getMessage(), PHP_EOL;
}


//..getCompanyFeatureSet
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | Identifier of the authenticated company.

try {
    $result = $api->companies()->getCompanyFeatureSet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->companies->getCompanyFeatureSet: ', $e->getMessage(), PHP_EOL;
}


//..getCompanyOnboarding
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The authenticated company's UUID.

try {
    $result = $api->companies()->getCompanyOnboarding($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->companies->getCompanyOnboarding: ', $e->getMessage(), PHP_EOL;
}


//..listCompanies
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,name,currency,prefix; // string | Comma-separated fields to include in each record. Default fields: uuid, name, currency, prefix.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->companies()->listCompanies($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->companies->listCompanies: ', $e->getMessage(), PHP_EOL;
}


//..updateCompany
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$addCompanyRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->companies()->updateCompany($uuid, $addCompanyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->companies->updateCompany: ', $e->getMessage(), PHP_EOL;
}


//..addContact
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addContactRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->contacts()->addContact($addContactRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->contacts->addContact: ', $e->getMessage(), PHP_EOL;
}


//..deleteContact
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The contact uuid

try {
    $result = $api->contacts()->deleteContact($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->contacts->deleteContact: ', $e->getMessage(), PHP_EOL;
}


//..getContact
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The contact uuid

try {
    $result = $api->contacts()->getContact($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->contacts->getContact: ', $e->getMessage(), PHP_EOL;
}


//..listContactBills
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The contact uuid
$fields = uuid,vendor,bill_number,status; // string | Comma-separated fields to include in each record. Default fields: uuid, vendor, bill_number, status.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->contacts()->listContactBills($uuid, $fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->contacts->listContactBills: ', $e->getMessage(), PHP_EOL;
}


//..listContactInvoices
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The contact uuid
$fields = uuid,customer,status,emitted; // string | Comma-separated fields to include in each record. Default fields: uuid, customer, status, emitted.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->contacts()->listContactInvoices($uuid, $fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->contacts->listContactInvoices: ', $e->getMessage(), PHP_EOL;
}


//..listContacts
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,name,prefix,currency,registration_number; // string | Comma-separated fields to include in each record. Default fields: uuid, name, prefix, currency, registration_number. Optional buyer_type is the explicit business/consumer override; null uses automatic inference.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->contacts()->listContacts($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->contacts->listContacts: ', $e->getMessage(), PHP_EOL;
}


//..updateContact
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The contact uuid
$addContactRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->contacts()->updateContact($uuid, $addContactRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->contacts->updateContact: ', $e->getMessage(), PHP_EOL;
}


//..getTranslatedCountries
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$lang = 'lang_example'; // string | The target language

try {
    $result = $api->countries()->getTranslatedCountries($lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->countries->getTranslatedCountries: ', $e->getMessage(), PHP_EOL;
}


//..addCredential
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addCredentialRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->credentials()->addCredential($addCredentialRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->credentials->addCredential: ', $e->getMessage(), PHP_EOL;
}


//..deleteCredential
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The credential uuid

try {
    $result = $api->credentials()->deleteCredential($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->credentials->deleteCredential: ', $e->getMessage(), PHP_EOL;
}


//..getCredential
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The credential uuid

try {
    $result = $api->credentials()->getCredential($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->credentials->getCredential: ', $e->getMessage(), PHP_EOL;
}


//..listCredentials
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,permissions,expired_at; // string | Comma-separated fields to include in each record. Default fields: uuid, permissions, expired_at.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->credentials()->listCredentials($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->credentials->listCredentials: ', $e->getMessage(), PHP_EOL;
}


//..listPermissions
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->credentials()->listPermissions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->credentials->listPermissions: ', $e->getMessage(), PHP_EOL;
}


//..me
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->credentials()->me();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->credentials->me: ', $e->getMessage(), PHP_EOL;
}


//..updateCredential
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The credential uuid
$addCredentialRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->credentials()->updateCredential($uuid, $addCredentialRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->credentials->updateCredential: ', $e->getMessage(), PHP_EOL;
}


//..addCreditNote
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addCreditNoteRequest = [/*...*/]; // array

try {
    $result = $api->creditNotes()->addCreditNote($addCreditNoteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->creditNotes->addCreditNote: ', $e->getMessage(), PHP_EOL;
}


//..deleteCreditNote
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $api->creditNotes()->deleteCreditNote($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->creditNotes->deleteCreditNote: ', $e->getMessage(), PHP_EOL;
}


//..getCreditNote
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->creditNotes()->getCreditNote($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->creditNotes->getCreditNote: ', $e->getMessage(), PHP_EOL;
}


//..getCreditNoteDocument
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->creditNotes()->getCreditNoteDocument($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->creditNotes->getCreditNoteDocument: ', $e->getMessage(), PHP_EOL;
}


//..listCreditNotes
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$page = 56; // int
$perPage = 56; // int

try {
    $result = $api->creditNotes()->listCreditNotes($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->creditNotes->listCreditNotes: ', $e->getMessage(), PHP_EOL;
}


//..updateCreditNote
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $api->creditNotes()->updateCreditNote($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->creditNotes->updateCreditNote: ', $e->getMessage(), PHP_EOL;
}


//..getExchangeRate
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$from = 'from_example'; // string | The currency to convert from
$to = 'to_example'; // string | The currency to convert to

try {
    $result = $api->currency()->getExchangeRate($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->currency->getExchangeRate: ', $e->getMessage(), PHP_EOL;
}


//..deleteDocument
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The document uuid

try {
    $result = $api->documents()->deleteDocument($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->documents->deleteDocument: ', $e->getMessage(), PHP_EOL;
}


//..getDocument
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The document uuid

try {
    $result = $api->documents()->getDocument($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->documents->getDocument: ', $e->getMessage(), PHP_EOL;
}


//..listDocuments
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,name,mimetype; // string | Comma-separated fields to include in each record. Default fields: uuid, name, mimetype.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->documents()->listDocuments($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->documents->listDocuments: ', $e->getMessage(), PHP_EOL;
}


//..processDocument
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The document uuid

try {
    $result = $api->documents()->processDocument($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->documents->processDocument: ', $e->getMessage(), PHP_EOL;
}


//..reviewDocumentRetention
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string
$reviewDocumentRetentionRequest = [/*...*/]; // array

try {
    $result = $api->documents()->reviewDocumentRetention($uuid, $reviewDocumentRetentionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->documents->reviewDocumentRetention: ', $e->getMessage(), PHP_EOL;
}


//..updateDocument
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The document uuid
$updateDocumentRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->documents()->updateDocument($uuid, $updateDocumentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->documents->updateDocument: ', $e->getMessage(), PHP_EOL;
}


//..uploadDocument
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$name = 'name_example'; // string | Human-readable name or label.
$file = "/path/to/file.txt"; // \SplFileObject | File to upload. Send this field as a file part in a multipart/form-data request.

try {
    $result = $api->documents()->uploadDocument($name, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->documents->uploadDocument: ', $e->getMessage(), PHP_EOL;
}


//..viewDocument
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The document uuid

try {
    $api->documents()->viewDocument($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->documents->viewDocument: ', $e->getMessage(), PHP_EOL;
}


//..addExpenseReport
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addExpenseReportRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->expenseReports()->addExpenseReport($addExpenseReportRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->addExpenseReport: ', $e->getMessage(), PHP_EOL;
}


//..deleteExpenseReport
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The expense report uuid

try {
    $result = $api->expenseReports()->deleteExpenseReport($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->deleteExpenseReport: ', $e->getMessage(), PHP_EOL;
}


//..expenseReportOAuthLogin
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$method = 'method_example'; // string | The OAuth Provider to use

try {
    $result = $api->expenseReports()->expenseReportOAuthLogin($method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->expenseReportOAuthLogin: ', $e->getMessage(), PHP_EOL;
}


//..getExpenseReport
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The expense report uuid

try {
    $result = $api->expenseReports()->getExpenseReport($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->getExpenseReport: ', $e->getMessage(), PHP_EOL;
}


//..getExpenseReportAccount
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->expenseReports()->getExpenseReportAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->getExpenseReportAccount: ', $e->getMessage(), PHP_EOL;
}


//..getExpenseReportUser
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The expense report user uuid

try {
    $result = $api->expenseReports()->getExpenseReportUser($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->getExpenseReportUser: ', $e->getMessage(), PHP_EOL;
}


//..listExpenseReports
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,user,status; // string | Comma-separated fields to include in each record. Default fields: uuid, user, status.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->expenseReports()->listExpenseReports($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->listExpenseReports: ', $e->getMessage(), PHP_EOL;
}


//..sendExpenseReportLoginEmail
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$sendExpenseReportLoginEmailRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->expenseReports()->sendExpenseReportLoginEmail($sendExpenseReportLoginEmailRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->sendExpenseReportLoginEmail: ', $e->getMessage(), PHP_EOL;
}


//..updateExpenseReport
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The expense report uuid
$addExpenseReportRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->expenseReports()->updateExpenseReport($uuid, $addExpenseReportRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->updateExpenseReport: ', $e->getMessage(), PHP_EOL;
}


//..updateExpenseReportAccount
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$updateExpenseReportAccountRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->expenseReports()->updateExpenseReportAccount($updateExpenseReportAccountRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->updateExpenseReportAccount: ', $e->getMessage(), PHP_EOL;
}


//..updateExpenseReportSettings
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$updateExpenseReportSettingsRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->expenseReports()->updateExpenseReportSettings($updateExpenseReportSettingsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->updateExpenseReportSettings: ', $e->getMessage(), PHP_EOL;
}


//..verifyExpenseReportSettings
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$verifyExpenseReportSettingsRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->expenseReports()->verifyExpenseReportSettings($verifyExpenseReportSettingsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->verifyExpenseReportSettings: ', $e->getMessage(), PHP_EOL;
}


//..listExports
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,status,document,created_at,updated_at; // string | Comma-separated fields to include in each record. Default fields: uuid, status, document, created_at, updated_at.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->export()->listExports($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->export->listExports: ', $e->getMessage(), PHP_EOL;
}


//..requestExport
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$requestExportRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->export()->requestExport($requestExportRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->export->requestExport: ', $e->getMessage(), PHP_EOL;
}


//..addInvoice
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addInvoiceRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->invoices()->addInvoice($addInvoiceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->addInvoice: ', $e->getMessage(), PHP_EOL;
}


//..addInvoicePayment
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The invoice uuid
$addBillPaymentRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->invoices()->addInvoicePayment($uuid, $addBillPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->addInvoicePayment: ', $e->getMessage(), PHP_EOL;
}


//..deleteInvoice
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The invoice uuid

try {
    $result = $api->invoices()->deleteInvoice($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->deleteInvoice: ', $e->getMessage(), PHP_EOL;
}


//..getInvoice
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The invoice uuid

try {
    $result = $api->invoices()->getInvoice($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->getInvoice: ', $e->getMessage(), PHP_EOL;
}


//..getInvoiceDocument
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The invoice uuid

try {
    $result = $api->invoices()->getInvoiceDocument($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->getInvoiceDocument: ', $e->getMessage(), PHP_EOL;
}


//..getInvoiceIssuance
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->invoices()->getInvoiceIssuance($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->getInvoiceIssuance: ', $e->getMessage(), PHP_EOL;
}


//..listInvoices
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,contact,status,emitted; // string | Comma-separated fields to include in each record. Default fields: uuid, contact, status, emitted.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->invoices()->listInvoices($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->listInvoices: ', $e->getMessage(), PHP_EOL;
}


//..listUnpaidInvoices
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->invoices()->listUnpaidInvoices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->listUnpaidInvoices: ', $e->getMessage(), PHP_EOL;
}


//..updateInvoice
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The invoice uuid
$updateInvoiceRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->invoices()->updateInvoice($uuid, $updateInvoiceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->updateInvoice: ', $e->getMessage(), PHP_EOL;
}


//..updateInvoicePayment
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The invoice uuid
$payment = 'payment_example'; // string | The invoice payment uuid
$addBillPaymentRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->invoices()->updateInvoicePayment($uuid, $payment, $addBillPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->updateInvoicePayment: ', $e->getMessage(), PHP_EOL;
}


//..journalBalances
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


//..journalBalancesheet
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


//..journalCorrectionAdd
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalCorrectionAddRequest = [/*...*/]; // array

try {
    $result = $api->journal()->journalCorrectionAdd($journalCorrectionAddRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalCorrectionAdd: ', $e->getMessage(), PHP_EOL;
}


//..journalCorrectionDelete
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $api->journal()->journalCorrectionDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalCorrectionDelete: ', $e->getMessage(), PHP_EOL;
}


//..journalCorrectionDetails
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->journal()->journalCorrectionDetails($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalCorrectionDetails: ', $e->getMessage(), PHP_EOL;
}


//..journalCorrectionList
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


//..journalCorrectionUpdate
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $api->journal()->journalCorrectionUpdate($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalCorrectionUpdate: ', $e->getMessage(), PHP_EOL;
}


//..journalEntryAdd
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


//..journalEntryDelete
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


//..journalEntryDetails
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


//..journalEntryList
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


//..journalEntryUpdate
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


//..journalEvidenceAdd
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


//..journalEvidenceDelete
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


//..journalEvidenceDetails
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


//..journalEvidenceList
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


//..journalEvidenceUpdate
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


//..journalExportAdd
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalExportAddRequest = [/*...*/]; // array

try {
    $result = $api->journal()->journalExportAdd($journalExportAddRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalExportAdd: ', $e->getMessage(), PHP_EOL;
}


//..journalExportDelete
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $api->journal()->journalExportDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalExportDelete: ', $e->getMessage(), PHP_EOL;
}


//..journalExportDetails
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->journal()->journalExportDetails($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalExportDetails: ', $e->getMessage(), PHP_EOL;
}


//..journalExportList
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


//..journalExportUpdate
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $api->journal()->journalExportUpdate($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalExportUpdate: ', $e->getMessage(), PHP_EOL;
}


//..journalInitializationAdd
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalInitializationAddRequest = [/*...*/]; // array

try {
    $result = $api->journal()->journalInitializationAdd($journalInitializationAddRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalInitializationAdd: ', $e->getMessage(), PHP_EOL;
}


//..journalInitializationDelete
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $api->journal()->journalInitializationDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalInitializationDelete: ', $e->getMessage(), PHP_EOL;
}


//..journalInitializationDetails
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->journal()->journalInitializationDetails($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalInitializationDetails: ', $e->getMessage(), PHP_EOL;
}


//..journalInitializationList
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


//..journalInitializationUpdate
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $api->journal()->journalInitializationUpdate($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalInitializationUpdate: ', $e->getMessage(), PHP_EOL;
}


//..journalIssueAdd
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $api->journal()->journalIssueAdd();
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalIssueAdd: ', $e->getMessage(), PHP_EOL;
}


//..journalIssueDelete
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $api->journal()->journalIssueDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalIssueDelete: ', $e->getMessage(), PHP_EOL;
}


//..journalIssueDetails
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->journal()->journalIssueDetails($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalIssueDetails: ', $e->getMessage(), PHP_EOL;
}


//..journalIssueList
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


//..journalIssueUpdate
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $api->journal()->journalIssueUpdate($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalIssueUpdate: ', $e->getMessage(), PHP_EOL;
}


//..journalJournalAdd
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalJournalAddRequest = [/*...*/]; // array

try {
    $result = $api->journal()->journalJournalAdd($journalJournalAddRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalJournalAdd: ', $e->getMessage(), PHP_EOL;
}


//..journalJournalDelete
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalUuid = 'journalUuid_example'; // string

try {
    $result = $api->journal()->journalJournalDelete($journalUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalJournalDelete: ', $e->getMessage(), PHP_EOL;
}


//..journalJournalDetails
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalUuid = 'journalUuid_example'; // string

try {
    $result = $api->journal()->journalJournalDetails($journalUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalJournalDetails: ', $e->getMessage(), PHP_EOL;
}


//..journalJournalList
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


//..journalJournalUpdate
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


//..journalMappingAdd
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalMappingAddRequest = [/*...*/]; // array

try {
    $result = $api->journal()->journalMappingAdd($journalMappingAddRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalMappingAdd: ', $e->getMessage(), PHP_EOL;
}


//..journalMappingDelete
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->journal()->journalMappingDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalMappingDelete: ', $e->getMessage(), PHP_EOL;
}


//..journalMappingDetails
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->journal()->journalMappingDetails($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalMappingDetails: ', $e->getMessage(), PHP_EOL;
}


//..journalMappingList
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


//..journalMappingUpdate
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


//..journalMovements
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


//..journalPeriodAdd
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$journalPeriodAddRequest = [/*...*/]; // array

try {
    $result = $api->journal()->journalPeriodAdd($journalPeriodAddRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalPeriodAdd: ', $e->getMessage(), PHP_EOL;
}


//..journalPeriodDelete
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->journal()->journalPeriodDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalPeriodDelete: ', $e->getMessage(), PHP_EOL;
}


//..journalPeriodDetails
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->journal()->journalPeriodDetails($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->journal->journalPeriodDetails: ', $e->getMessage(), PHP_EOL;
}


//..journalPeriodList
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


//..journalPeriodUpdate
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


//..journalProfitandloss
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


//..journalTrialbalance
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


//..logs
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,channel,level,message,recorded_at; // string | Comma-separated fields to include in each record. Default fields: uuid, channel, level, message, recorded_at.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$channel = 'channel_example'; // string | The channel to retrieve the logs from
$level = 'level_example'; // string | The log level to retrieve
$resource = 'resource_example'; // string | Retrive logs linked to that resource
$before = 'before_example'; // string | Retrive logs before the provided date
$after = 'after_example'; // string | Retrive logs after the provided date
$format = 'format_example'; // string | In which format to retrieve the logs, available: json or txt
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->logs()->logs($fields, $page, $perPage, $channel, $level, $resource, $before, $after, $format, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->logs->logs: ', $e->getMessage(), PHP_EOL;
}


//..listNotificationPreferences
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$notification = 'notification_example'; // string | The notification name

try {
    $result = $api->notification()->listNotificationPreferences($notification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notification->listNotificationPreferences: ', $e->getMessage(), PHP_EOL;
}


//..listNotifications
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,notification; // string | Comma-separated fields to include in each record. Default fields: uuid, notification.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->notification()->listNotifications($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notification->listNotifications: ', $e->getMessage(), PHP_EOL;
}


//..sendNotification
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$sendNotificationRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->notification()->sendNotification($sendNotificationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notification->sendNotification: ', $e->getMessage(), PHP_EOL;
}


//..updateNotificationPreferences
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$notification = 'notification_example'; // string | The notification name
$updateNotificationPreferencesRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->notification()->updateNotificationPreferences($notification, $updateNotificationPreferencesRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notification->updateNotificationPreferences: ', $e->getMessage(), PHP_EOL;
}


//..addNotificationType
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addNotificationTypeRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->notificationTypes()->addNotificationType($addNotificationTypeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notificationTypes->addNotificationType: ', $e->getMessage(), PHP_EOL;
}


//..deleteNotificationType
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The notification type uuid

try {
    $result = $api->notificationTypes()->deleteNotificationType($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notificationTypes->deleteNotificationType: ', $e->getMessage(), PHP_EOL;
}


//..getNotificationType
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The notification type uuid

try {
    $result = $api->notificationTypes()->getNotificationType($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notificationTypes->getNotificationType: ', $e->getMessage(), PHP_EOL;
}


//..listNotificationTypes
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = name,title,description,allowed_methods,internal; // string | Comma-separated fields to include in each record. Default fields: name, title, description, allowed_methods, internal.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->notificationTypes()->listNotificationTypes($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notificationTypes->listNotificationTypes: ', $e->getMessage(), PHP_EOL;
}


//..updateNotificationType
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The notification type uuid
$updateNotificationTypeRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->notificationTypes()->updateNotificationType($uuid, $updateNotificationTypeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notificationTypes->updateNotificationType: ', $e->getMessage(), PHP_EOL;
}


//..addOAuthConfiguration
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addOAuthConfigurationRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->oAuthConfig()->addOAuthConfiguration($addOAuthConfigurationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->oAuthConfig->addOAuthConfiguration: ', $e->getMessage(), PHP_EOL;
}


//..deleteOAuthConfiguration
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The oauth configuration uuid

try {
    $result = $api->oAuthConfig()->deleteOAuthConfiguration($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->oAuthConfig->deleteOAuthConfiguration: ', $e->getMessage(), PHP_EOL;
}


//..getOAuthConfiguration
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The oauth configuration uuid

try {
    $result = $api->oAuthConfig()->getOAuthConfiguration($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->oAuthConfig->getOAuthConfiguration: ', $e->getMessage(), PHP_EOL;
}


//..listOAuthConfigurations
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


//..listProviders
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->oAuthConfig()->listProviders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->oAuthConfig->listProviders: ', $e->getMessage(), PHP_EOL;
}


//..updateOAuthConfiguration
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


//..addPayment
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addPaymentRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->payments()->addPayment($addPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->payments->addPayment: ', $e->getMessage(), PHP_EOL;
}


//..deletePayment
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The payment uuid

try {
    $result = $api->payments()->deletePayment($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->payments->deletePayment: ', $e->getMessage(), PHP_EOL;
}


//..getPayment
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The payment uuid

try {
    $result = $api->payments()->getPayment($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->payments->getPayment: ', $e->getMessage(), PHP_EOL;
}


//..listPayments
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,amount,currency,contact; // string | Comma-separated fields to include in each record. Default fields: uuid, amount, currency, contact.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->payments()->listPayments($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->payments->listPayments: ', $e->getMessage(), PHP_EOL;
}


//..updatePayment
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The payment uuid
$addPaymentRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->payments()->updatePayment($uuid, $addPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->payments->updatePayment: ', $e->getMessage(), PHP_EOL;
}


//..addQuote
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addQuoteRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->quotes()->addQuote($addQuoteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->quotes->addQuote: ', $e->getMessage(), PHP_EOL;
}


//..deleteQuote
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The quote uuid

try {
    $result = $api->quotes()->deleteQuote($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->quotes->deleteQuote: ', $e->getMessage(), PHP_EOL;
}


//..getQuote
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The quote uuid

try {
    $result = $api->quotes()->getQuote($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->quotes->getQuote: ', $e->getMessage(), PHP_EOL;
}


//..getQuoteDocument
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The quote uuid

try {
    $result = $api->quotes()->getQuoteDocument($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->quotes->getQuoteDocument: ', $e->getMessage(), PHP_EOL;
}


//..listQuotes
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,contact,quote_number,status; // string | Comma-separated fields to include in each record. Default fields: uuid, contact, quote_number, status.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->quotes()->listQuotes($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->quotes->listQuotes: ', $e->getMessage(), PHP_EOL;
}


//..updateQuote
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The quote uuid
$updateQuoteRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->quotes()->updateQuote($uuid, $updateQuoteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->quotes->updateQuote: ', $e->getMessage(), PHP_EOL;
}


//..addReceipt
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addReceiptRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->receipts()->addReceipt($addReceiptRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->receipts->addReceipt: ', $e->getMessage(), PHP_EOL;
}


//..deleteReceipt
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The receipt uuid

try {
    $result = $api->receipts()->deleteReceipt($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->receipts->deleteReceipt: ', $e->getMessage(), PHP_EOL;
}


//..getReceipt
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The receipt uuid

try {
    $result = $api->receipts()->getReceipt($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->receipts->getReceipt: ', $e->getMessage(), PHP_EOL;
}


//..getReceiptDocument
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The receipt uuid

try {
    $result = $api->receipts()->getReceiptDocument($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->receipts->getReceiptDocument: ', $e->getMessage(), PHP_EOL;
}


//..listReceipts
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,for,from,receipt_number; // string | Comma-separated fields to include in each record. Default fields: uuid, for, from, receipt_number.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->receipts()->listReceipts($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->receipts->listReceipts: ', $e->getMessage(), PHP_EOL;
}


//..updateReceipt
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The receipt uuid
$updateReceiptRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->receipts()->updateReceipt($uuid, $updateReceiptRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->receipts->updateReceipt: ', $e->getMessage(), PHP_EOL;
}


//..addRevenue
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addRevenueRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->revenues()->addRevenue($addRevenueRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->revenues->addRevenue: ', $e->getMessage(), PHP_EOL;
}


//..deleteRevenue
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The revenue uuid

try {
    $result = $api->revenues()->deleteRevenue($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->revenues->deleteRevenue: ', $e->getMessage(), PHP_EOL;
}


//..getRevenue
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The revenue uuid

try {
    $result = $api->revenues()->getRevenue($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->revenues->getRevenue: ', $e->getMessage(), PHP_EOL;
}


//..listRevenues
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,paid_at,amount,currency; // string | Comma-separated fields to include in each record. Default fields: uuid, paid_at, amount, currency.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->revenues()->listRevenues($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->revenues->listRevenues: ', $e->getMessage(), PHP_EOL;
}


//..updateRevenue
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The revenue uuid
$addRevenueRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->revenues()->updateRevenue($uuid, $addRevenueRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->revenues->updateRevenue: ', $e->getMessage(), PHP_EOL;
}


//..listReviews
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,name,process_status; // string | Comma-separated fields to include in each record. Default fields: uuid, name, process_status.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->rossum()->listReviews($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->rossum->listReviews: ', $e->getMessage(), PHP_EOL;
}


//..search
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


//..getSettings
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$key = 'key_example'; // string | The setting key

try {
    $result = $api->settings()->getSettings($uuid, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->settings->getSettings: ', $e->getMessage(), PHP_EOL;
}


//..listSettings
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$fields = uuid,key,value; // string | Comma-separated fields to include in each record. Default fields: uuid, key, value.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->settings()->listSettings($uuid, $fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->settings->listSettings: ', $e->getMessage(), PHP_EOL;
}


//..updateSettings
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$key = 'key_example'; // string | The setting key
$updateSettingsRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->settings()->updateSettings($uuid, $key, $updateSettingsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->settings->updateSettings: ', $e->getMessage(), PHP_EOL;
}


//..summaryStatisticsPeriod
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date

try {
    $result = $api->statistics()->summaryStatisticsPeriod($uuid, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->statistics->summaryStatisticsPeriod: ', $e->getMessage(), PHP_EOL;
}


//..addTag
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addTagRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->tags()->addTag($addTagRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->tags->addTag: ', $e->getMessage(), PHP_EOL;
}


//..deleteTag
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The tag uuid

try {
    $result = $api->tags()->deleteTag($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->tags->deleteTag: ', $e->getMessage(), PHP_EOL;
}


//..getTag
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The tag uuid

try {
    $result = $api->tags()->getTag($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->tags->getTag: ', $e->getMessage(), PHP_EOL;
}


//..listTags
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,key,value,attached_at; // string | Comma-separated fields to include in each record. Default fields: uuid, key, value, attached_at.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->tags()->listTags($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->tags->listTags: ', $e->getMessage(), PHP_EOL;
}


//..listTagsByResource
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$resource = 'resource_example'; // string | The resource
$fields = uuid,key,value,attached_at; // string | Comma-separated fields to include in each record. Default fields: uuid, key, value, attached_at.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->tags()->listTagsByResource($resource, $fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->tags->listTagsByResource: ', $e->getMessage(), PHP_EOL;
}


//..updateTag
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The tag uuid
$addTagRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->tags()->updateTag($uuid, $addTagRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->tags->updateTag: ', $e->getMessage(), PHP_EOL;
}


//..getTaxRate
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$country = 'country_example'; // string | The country

try {
    $result = $api->tax()->getTaxRate($country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->tax->getTaxRate: ', $e->getMessage(), PHP_EOL;
}


//..verifyVatId
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$number = 'number_example'; // string | The VAT ID

try {
    $result = $api->tax()->verifyVatId($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->tax->verifyVatId: ', $e->getMessage(), PHP_EOL;
}


//..addLink
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | A transaction uuid
$addLinkRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->transactions()->addLink($uuid, $addLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->addLink: ', $e->getMessage(), PHP_EOL;
}


//..addTransaction
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addTransactionRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->transactions()->addTransaction($addTransactionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->addTransaction: ', $e->getMessage(), PHP_EOL;
}


//..addTransactionCode
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transaction uuid
$addTransactionCodeRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->transactions()->addTransactionCode($uuid, $addTransactionCodeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->addTransactionCode: ', $e->getMessage(), PHP_EOL;
}


//..deleteLink
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | A transaction uuid
$linkUuid = 'linkUuid_example'; // string | A transaction link uuid OR the target uuid

try {
    $result = $api->transactions()->deleteLink($uuid, $linkUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->deleteLink: ', $e->getMessage(), PHP_EOL;
}


//..deleteTransaction
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transaction uuid

try {
    $result = $api->transactions()->deleteTransaction($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->deleteTransaction: ', $e->getMessage(), PHP_EOL;
}


//..deleteTransactionCode
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transaction uuid
$code = 'code_example'; // string | The transaction's code uuid

try {
    $result = $api->transactions()->deleteTransactionCode($uuid, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->deleteTransactionCode: ', $e->getMessage(), PHP_EOL;
}


//..getTransaction
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transaction uuid

try {
    $result = $api->transactions()->getTransaction($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->getTransaction: ', $e->getMessage(), PHP_EOL;
}


//..importTransactions
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$importTransactionsRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->transactions()->importTransactions($importTransactionsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->importTransactions: ', $e->getMessage(), PHP_EOL;
}


//..ledger
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,account,amount,event_date; // string | Comma-separated fields to include in each record. Default fields: uuid, account, amount, event_date.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$account = 'account_example'; // string | An account uuid to filter results
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->transactions()->ledger($fields, $page, $perPage, $account, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->ledger: ', $e->getMessage(), PHP_EOL;
}


//..listLinks
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | A transaction uuid
$fields = target_type,target,link_status; // string | Comma-separated fields to include in each record. Default fields: target_type, target, link_status.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->transactions()->listLinks($uuid, $fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->listLinks: ', $e->getMessage(), PHP_EOL;
}


//..listTransactionCodes
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transaction uuid
$fields = uuid,code,description,amount; // string | Comma-separated fields to include in each record. Default fields: uuid, code, description, amount.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$account = 'account_example'; // string | List to the specified account
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->transactions()->listTransactionCodes($uuid, $fields, $page, $perPage, $account, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->listTransactionCodes: ', $e->getMessage(), PHP_EOL;
}


//..listTransactions
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,account,amount,transaction_date; // string | Comma-separated fields to include in each record. Default fields: uuid, account, amount, transaction_date.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$account = 'account_example'; // string | List to the specified account
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->transactions()->listTransactions($fields, $page, $perPage, $account, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->listTransactions: ', $e->getMessage(), PHP_EOL;
}


//..reconciliationReject
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string
$reconciliationRejectRequest = [/*...*/]; // array

try {
    $result = $api->transactions()->reconciliationReject($uuid, $reconciliationRejectRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->reconciliationReject: ', $e->getMessage(), PHP_EOL;
}


//..reconciliationRun
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->transactions()->reconciliationRun($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->reconciliationRun: ', $e->getMessage(), PHP_EOL;
}


//..reconciliationSuggestions
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string

try {
    $result = $api->transactions()->reconciliationSuggestions($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->reconciliationSuggestions: ', $e->getMessage(), PHP_EOL;
}


//..reverseTransactionLink
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string
$linkUuid = 'linkUuid_example'; // string

try {
    $result = $api->transactions()->reverseTransactionLink($uuid, $linkUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->reverseTransactionLink: ', $e->getMessage(), PHP_EOL;
}


//..updateLink
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | A transaction uuid
$linkUuid = 'linkUuid_example'; // string | A transaction link uuid OR the target uuid
$addLinkRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->transactions()->updateLink($uuid, $linkUuid, $addLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->updateLink: ', $e->getMessage(), PHP_EOL;
}


//..updateTransaction
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transaction uuid
$addTransactionRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->transactions()->updateTransaction($uuid, $addTransactionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->updateTransaction: ', $e->getMessage(), PHP_EOL;
}


//..updateTransactionCode
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transaction uuid
$code = 'code_example'; // string | Identifier of the code selected by this route.
$addTransactionCodeRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->transactions()->updateTransactionCode($uuid, $code, $addTransactionCodeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->updateTransactionCode: ', $e->getMessage(), PHP_EOL;
}


//..viewLink
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | A transaction uuid
$linkUuid = 'linkUuid_example'; // string | A transaction link uuid OR the target uuid

try {
    $result = $api->transactions()->viewLink($uuid, $linkUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->viewLink: ', $e->getMessage(), PHP_EOL;
}


//..addTransfer
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addTransferRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->transfers()->addTransfer($addTransferRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transfers->addTransfer: ', $e->getMessage(), PHP_EOL;
}


//..deleteTransfer
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transfer uuid

try {
    $result = $api->transfers()->deleteTransfer($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transfers->deleteTransfer: ', $e->getMessage(), PHP_EOL;
}


//..getTransfer
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transfer uuid

try {
    $result = $api->transfers()->getTransfer($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transfers->getTransfer: ', $e->getMessage(), PHP_EOL;
}


//..listTransfers
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,from,to,amount; // string | Comma-separated fields to include in each record. Default fields: uuid, from, to, amount.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->transfers()->listTransfers($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transfers->listTransfers: ', $e->getMessage(), PHP_EOL;
}


//..updateTransfer
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transfer uuid
$addTransferRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->transfers()->updateTransfer($uuid, $addTransferRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transfers->updateTransfer: ', $e->getMessage(), PHP_EOL;
}


//..addUser
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->users()->addUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->users->addUser: ', $e->getMessage(), PHP_EOL;
}


//..deleteUser
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The user uuid

try {
    $result = $api->users()->deleteUser($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->users->deleteUser: ', $e->getMessage(), PHP_EOL;
}


//..getUser
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The user uuid

try {
    $result = $api->users()->getUser($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->users->getUser: ', $e->getMessage(), PHP_EOL;
}


//..listUsers
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,user,permissions; // string | Comma-separated fields to include in each record. Default fields: uuid, user, permissions.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->users()->listUsers($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->users->listUsers: ', $e->getMessage(), PHP_EOL;
}


//..updateMePutAlias
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->users()->updateMePutAlias();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->users->updateMePutAlias: ', $e->getMessage(), PHP_EOL;
}


//..updateUser
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The user uuid

try {
    $result = $api->users()->updateUser($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->users->updateUser: ', $e->getMessage(), PHP_EOL;
}


//..usersCompanies
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->users()->usersCompanies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->users->usersCompanies: ', $e->getMessage(), PHP_EOL;
}


//..usersMe
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->users()->usersMe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->users->usersMe: ', $e->getMessage(), PHP_EOL;
}


//..addCompanyVatId
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$addCompanyVatIdRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->vATID()->addCompanyVatId($uuid, $addCompanyVatIdRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->vATID->addCompanyVatId: ', $e->getMessage(), PHP_EOL;
}


//..deleteCompanyVatId
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$key = 'key_example'; // string | The VAT ID uuid

try {
    $result = $api->vATID()->deleteCompanyVatId($uuid, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->vATID->deleteCompanyVatId: ', $e->getMessage(), PHP_EOL;
}


//..getCompanyVatId
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$key = 'key_example'; // string | The VAT ID uuid

try {
    $result = $api->vATID()->getCompanyVatId($uuid, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->vATID->getCompanyVatId: ', $e->getMessage(), PHP_EOL;
}


//..listCompanyVatId
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$fields = uuid,vat_id,country; // string | Comma-separated fields to include in each record. Default fields: uuid, vat_id, country.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->vATID()->listCompanyVatId($uuid, $fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->vATID->listCompanyVatId: ', $e->getMessage(), PHP_EOL;
}


//..updateCompanyVatId
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$key = 'key_example'; // string | The VAT ID uuid
$addCompanyVatIdRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->vATID()->updateCompanyVatId($uuid, $key, $addCompanyVatIdRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->vATID->updateCompanyVatId: ', $e->getMessage(), PHP_EOL;
}


//..addWebhook
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addWebhookRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->webhooks()->addWebhook($addWebhookRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->webhooks->addWebhook: ', $e->getMessage(), PHP_EOL;
}


//..deleteWebhook
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The webhook uuid

try {
    $result = $api->webhooks()->deleteWebhook($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->webhooks->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}


//..getWebhook
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The webhook uuid

try {
    $result = $api->webhooks()->getWebhook($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->webhooks->getWebhook: ', $e->getMessage(), PHP_EOL;
}


//..getWebhookHistory
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The webhook uuid

try {
    $result = $api->webhooks()->getWebhookHistory($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->webhooks->getWebhookHistory: ', $e->getMessage(), PHP_EOL;
}


//..listWebhookEvents
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->webhooks()->listWebhookEvents();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->webhooks->listWebhookEvents: ', $e->getMessage(), PHP_EOL;
}


//..listWebhooks
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = uuid,link,events; // string | Comma-separated fields to include in each record. Default fields: uuid, link, events.
$page = 1; // int | Page number, starting at 1. Values below 1 are treated as 1.
$perPage = 10; // int | Records per page. The server caps page size to 100. Values below 1 use that maximum.
$orderBy = created_at:desc; // string | Sort by a supported field and direction, using field:asc or field:desc.

try {
    $result = $api->webhooks()->listWebhooks($fields, $page, $perPage, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->webhooks->listWebhooks: ', $e->getMessage(), PHP_EOL;
}


//..updateWebhook
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The webhook uuid
$addWebhookRequest = [/*...*/]; // array | Send a JSON object with the fields below. Fields marked required must be supplied.

try {
    $result = $api->webhooks()->updateWebhook($uuid, $addWebhookRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->webhooks->updateWebhook: ', $e->getMessage(), PHP_EOL;
}



<?php

//..deleteAccountConnection
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The account uuid

try {
    $result = $api->accountConnections()->deleteAccountConnection($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountConnections->deleteAccountConnection: ', $e->getMessage(), PHP_EOL;
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
$requestBankConnectionRequest = [/*...*/]; // array

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
$selectBankAccountRequest = [/*...*/]; // array

try {
    $result = $api->accountConnections()->selectBankAccount($uuid, $selectBankAccountRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountConnections->selectBankAccount: ', $e->getMessage(), PHP_EOL;
}


//..addAccountingCode
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addAccountingCodeRequest = [/*...*/]; // array

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
$addAccountingCodeRequest = [/*...*/]; // array

try {
    $result = $api->accountingCodes()->updateAccountingCode($uuid, $addAccountingCodeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountingCodes->updateAccountingCode: ', $e->getMessage(), PHP_EOL;
}


//..addAccount
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addAccountRequest = [/*...*/]; // array

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
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->accounts()->listAccounts($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accounts->listAccounts: ', $e->getMessage(), PHP_EOL;
}


//..updateAccount
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The account uuid
$addAccountRequest = [/*...*/]; // array

try {
    $result = $api->accounts()->updateAccount($uuid, $addAccountRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accounts->updateAccount: ', $e->getMessage(), PHP_EOL;
}


//..addAttachment
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addAttachmentRequest = [/*...*/]; // array

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
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->attachments()->listAttachments($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->attachments->listAttachments: ', $e->getMessage(), PHP_EOL;
}


//..retrieveAttachments
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$resource = 'resource_example'; // string | The resource
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->attachments()->retrieveAttachments($resource, $fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->attachments->retrieveAttachments: ', $e->getMessage(), PHP_EOL;
}


//..updateAttachment
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The attachment uuid
$addAttachmentRequest = [/*...*/]; // array

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
$loginRequest = [/*...*/]; // array

try {
    $result = $api->auth()->login($loginRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->auth->login: ', $e->getMessage(), PHP_EOL;
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
$switchCompanyRequest = [/*...*/]; // array

try {
    $result = $api->auth()->switchCompany($switchCompanyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->auth->switchCompany: ', $e->getMessage(), PHP_EOL;
}


//..addBill
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addBillRequest = [/*...*/]; // array

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
$addBillPaymentRequest = [/*...*/]; // array

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
    $api->bills()->getBillDocument($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->bills->getBillDocument: ', $e->getMessage(), PHP_EOL;
}


//..listBills
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->bills()->listBills($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->bills->listBills: ', $e->getMessage(), PHP_EOL;
}


//..updateBill
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The bill uuid
$addBillRequest = [/*...*/]; // array

try {
    $result = $api->bills()->updateBill($uuid, $addBillRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->bills->updateBill: ', $e->getMessage(), PHP_EOL;
}


//..updateBillPayment
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The bill uuid
$payment = 'payment_example'; // string | The bill payment uuid
$addBillPaymentRequest = [/*...*/]; // array

try {
    $result = $api->bills()->updateBillPayment($uuid, $payment, $addBillPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->bills->updateBillPayment: ', $e->getMessage(), PHP_EOL;
}


//..addCategory
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addCategoryRequest = [/*...*/]; // array

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
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->categories()->listCategories($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->categories->listCategories: ', $e->getMessage(), PHP_EOL;
}


//..updateCategory
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The category uuid
$addCategoryRequest = [/*...*/]; // array

try {
    $result = $api->categories()->updateCategory($uuid, $addCategoryRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->categories->updateCategory: ', $e->getMessage(), PHP_EOL;
}


//..addCompany
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addCompanyRequest = [/*...*/]; // array

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
$uuid = 'uuid_example'; // string | The company uuid

try {
    $result = $api->companies()->getCompanyFeatureSet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->companies->getCompanyFeatureSet: ', $e->getMessage(), PHP_EOL;
}


//..listCompanies
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->companies()->listCompanies($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->companies->listCompanies: ', $e->getMessage(), PHP_EOL;
}


//..updateCompany
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$addCompanyRequest = [/*...*/]; // array

try {
    $result = $api->companies()->updateCompany($uuid, $addCompanyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->companies->updateCompany: ', $e->getMessage(), PHP_EOL;
}


//..getStatistics
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$start = 'start_example'; // string | Start date
$end = 'end_example'; // string | End date

try {
    $result = $api->companyStatistics()->getStatistics($uuid, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->companyStatistics->getStatistics: ', $e->getMessage(), PHP_EOL;
}


//..addContact
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addContactRequest = [/*...*/]; // array

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
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->contacts()->listContactBills($uuid, $fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->contacts->listContactBills: ', $e->getMessage(), PHP_EOL;
}


//..listContactInvoices
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The contact uuid
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->contacts()->listContactInvoices($uuid, $fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->contacts->listContactInvoices: ', $e->getMessage(), PHP_EOL;
}


//..listContacts
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->contacts()->listContacts($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->contacts->listContacts: ', $e->getMessage(), PHP_EOL;
}


//..updateContact
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The contact uuid
$addContactRequest = [/*...*/]; // array

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
$addCredentialRequest = [/*...*/]; // array

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
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->credentials()->listCredentials($fields, $page, $perPage);
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
$addCredentialRequest = [/*...*/]; // array

try {
    $result = $api->credentials()->updateCredential($uuid, $addCredentialRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->credentials->updateCredential: ', $e->getMessage(), PHP_EOL;
}


//..userveria
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");

try {
    $result = $api->credentials()->userveria();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->credentials->userveria: ', $e->getMessage(), PHP_EOL;
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


//..cancelReview
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The document uuid

try {
    $result = $api->documents()->cancelReview($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->documents->cancelReview: ', $e->getMessage(), PHP_EOL;
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
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->documents()->listDocuments($fields, $page, $perPage);
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


//..reviewUrl
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The document uuid

try {
    $result = $api->documents()->reviewUrl($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->documents->reviewUrl: ', $e->getMessage(), PHP_EOL;
}


//..updateDocument
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The document uuid
$updateDocumentRequest = [/*...*/]; // array

try {
    $result = $api->documents()->updateDocument($uuid, $updateDocumentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->documents->updateDocument: ', $e->getMessage(), PHP_EOL;
}


//..uploadDocument
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$name = 'name_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

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
$addExpenseReportRequest = [/*...*/]; // array

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
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->expenseReports()->listExpenseReports($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->listExpenseReports: ', $e->getMessage(), PHP_EOL;
}


//..sendExpenseReportLoginEmail
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$sendExpenseReportLoginEmailRequest = [/*...*/]; // array

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
$addExpenseReportRequest = [/*...*/]; // array

try {
    $result = $api->expenseReports()->updateExpenseReport($uuid, $addExpenseReportRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->updateExpenseReport: ', $e->getMessage(), PHP_EOL;
}


//..updateExpenseReportAccount
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$updateExpenseReportAccountRequest = [/*...*/]; // array

try {
    $result = $api->expenseReports()->updateExpenseReportAccount($updateExpenseReportAccountRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->updateExpenseReportAccount: ', $e->getMessage(), PHP_EOL;
}


//..updateExpenseReportSettings
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$updateExpenseReportSettingsRequest = [/*...*/]; // array

try {
    $result = $api->expenseReports()->updateExpenseReportSettings($updateExpenseReportSettingsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->updateExpenseReportSettings: ', $e->getMessage(), PHP_EOL;
}


//..verifyExpenseReportSettings
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$verifyExpenseReportSettingsRequest = [/*...*/]; // array

try {
    $result = $api->expenseReports()->verifyExpenseReportSettings($verifyExpenseReportSettingsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->expenseReports->verifyExpenseReportSettings: ', $e->getMessage(), PHP_EOL;
}


//..listExports
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->export()->listExports($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->export->listExports: ', $e->getMessage(), PHP_EOL;
}


//..requestExport
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$requestExportRequest = [/*...*/]; // array

try {
    $result = $api->export()->requestExport($requestExportRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->export->requestExport: ', $e->getMessage(), PHP_EOL;
}


//..addInvoice
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addInvoiceRequest = [/*...*/]; // array

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
$addBillPaymentRequest = [/*...*/]; // array

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
    $api->invoices()->getInvoiceDocument($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->getInvoiceDocument: ', $e->getMessage(), PHP_EOL;
}


//..listInvoices
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->invoices()->listInvoices($fields, $page, $perPage);
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
$addInvoiceRequest = [/*...*/]; // array

try {
    $result = $api->invoices()->updateInvoice($uuid, $addInvoiceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->updateInvoice: ', $e->getMessage(), PHP_EOL;
}


//..updateInvoicePayment
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The invoice uuid
$payment = 'payment_example'; // string | The invoice payment uuid
$addBillPaymentRequest = [/*...*/]; // array

try {
    $result = $api->invoices()->updateInvoicePayment($uuid, $payment, $addBillPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->invoices->updateInvoicePayment: ', $e->getMessage(), PHP_EOL;
}


//..logs
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page
$channel = 'channel_example'; // string | The channel to retrieve the logs from
$level = 'level_example'; // string | The log level to retrieve
$resource = 'resource_example'; // string | Retrive logs linked to that resource
$before = 'before_example'; // string | Retrive logs before the provided date
$after = 'after_example'; // string | Retrive logs after the provided date
$format = 'format_example'; // string | In which format to retrieve the logs, available: json or txt

try {
    $result = $api->logs()->logs($fields, $page, $perPage, $channel, $level, $resource, $before, $after, $format);
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
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->notification()->listNotifications($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notification->listNotifications: ', $e->getMessage(), PHP_EOL;
}


//..sendNotification
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$sendNotificationRequest = [/*...*/]; // array

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
$updateNotificationPreferencesRequest = [/*...*/]; // array

try {
    $result = $api->notification()->updateNotificationPreferences($notification, $updateNotificationPreferencesRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notification->updateNotificationPreferences: ', $e->getMessage(), PHP_EOL;
}


//..addNotificationType
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addNotificationTypeRequest = [/*...*/]; // array

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
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->notificationTypes()->listNotificationTypes($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notificationTypes->listNotificationTypes: ', $e->getMessage(), PHP_EOL;
}


//..updateNotificationType
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The notification type uuid
$addNotificationTypeRequest = [/*...*/]; // array

try {
    $result = $api->notificationTypes()->updateNotificationType($uuid, $addNotificationTypeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->notificationTypes->updateNotificationType: ', $e->getMessage(), PHP_EOL;
}


//..addOAuthConfiguration
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addOAuthConfigurationRequest = [/*...*/]; // array

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
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->oAuthConfig()->listOAuthConfigurations($fields, $page, $perPage);
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
$addOAuthConfigurationRequest = [/*...*/]; // array

try {
    $result = $api->oAuthConfig()->updateOAuthConfiguration($uuid, $addOAuthConfigurationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->oAuthConfig->updateOAuthConfiguration: ', $e->getMessage(), PHP_EOL;
}


//..addPayment
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addPaymentRequest = [/*...*/]; // array

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
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->payments()->listPayments($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->payments->listPayments: ', $e->getMessage(), PHP_EOL;
}


//..updatePayment
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The payment uuid
$addPaymentRequest = [/*...*/]; // array

try {
    $result = $api->payments()->updatePayment($uuid, $addPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->payments->updatePayment: ', $e->getMessage(), PHP_EOL;
}


//..addQuote
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addQuoteRequest = [/*...*/]; // array

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
    $api->quotes()->getQuoteDocument($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->quotes->getQuoteDocument: ', $e->getMessage(), PHP_EOL;
}


//..listQuotes
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->quotes()->listQuotes($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->quotes->listQuotes: ', $e->getMessage(), PHP_EOL;
}


//..updateQuote
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The quote uuid
$addQuoteRequest = [/*...*/]; // array

try {
    $result = $api->quotes()->updateQuote($uuid, $addQuoteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->quotes->updateQuote: ', $e->getMessage(), PHP_EOL;
}


//..addReceipt
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addReceiptRequest = [/*...*/]; // array

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
    $api->receipts()->getReceiptDocument($uuid);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->receipts->getReceiptDocument: ', $e->getMessage(), PHP_EOL;
}


//..listReceipts
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->receipts()->listReceipts($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->receipts->listReceipts: ', $e->getMessage(), PHP_EOL;
}


//..updateReceipt
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The receipt uuid
$addReceiptRequest = [/*...*/]; // array

try {
    $result = $api->receipts()->updateReceipt($uuid, $addReceiptRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->receipts->updateReceipt: ', $e->getMessage(), PHP_EOL;
}


//..addRevenue
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addRevenueRequest = [/*...*/]; // array

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
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->revenues()->listRevenues($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->revenues->listRevenues: ', $e->getMessage(), PHP_EOL;
}


//..updateRevenue
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The revenue uuid
$addRevenueRequest = [/*...*/]; // array

try {
    $result = $api->revenues()->updateRevenue($uuid, $addRevenueRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->revenues->updateRevenue: ', $e->getMessage(), PHP_EOL;
}


//..listReviews
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
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page
$uuid = 'uuid_example'; // string | The company uuid

try {
    $result = $api->settings()->listSettings($fields, $page, $perPage, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->settings->listSettings: ', $e->getMessage(), PHP_EOL;
}


//..updateSettings
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The company uuid
$key = 'key_example'; // string | The setting key
$updateSettingsRequest = [/*...*/]; // array

try {
    $result = $api->settings()->updateSettings($uuid, $key, $updateSettingsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->settings->updateSettings: ', $e->getMessage(), PHP_EOL;
}


//..addTag
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addTagRequest = [/*...*/]; // array

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
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->tags()->listTags($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->tags->listTags: ', $e->getMessage(), PHP_EOL;
}


//..listTagsByResource
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$resource = 'resource_example'; // string | The resource
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->tags()->listTagsByResource($resource, $fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->tags->listTagsByResource: ', $e->getMessage(), PHP_EOL;
}


//..updateTag
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The tag uuid
$addTagRequest = [/*...*/]; // array

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
$listLinks200ResponseLinksInner = [/*...*/]; // array
$uuid = 'uuid_example'; // string | A transaction uuid

try {
    $result = $api->transactions()->addLink($listLinks200ResponseLinksInner, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->addLink: ', $e->getMessage(), PHP_EOL;
}


//..addTransaction
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addTransactionRequest = [/*...*/]; // array

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
$updateTransactionCodeRequest = [/*...*/]; // array

try {
    $result = $api->transactions()->addTransactionCode($uuid, $updateTransactionCodeRequest);
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
$importTransactionsRequest = [/*...*/]; // array

try {
    $result = $api->transactions()->importTransactions($importTransactionsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->importTransactions: ', $e->getMessage(), PHP_EOL;
}


//..ledger
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page
$account = 'account_example'; // string | An account uuid to filter results

try {
    $result = $api->transactions()->ledger($fields, $page, $perPage, $account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->ledger: ', $e->getMessage(), PHP_EOL;
}


//..listLinks
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page
$uuid = 'uuid_example'; // string | A transaction uuid

try {
    $result = $api->transactions()->listLinks($fields, $page, $perPage, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->listLinks: ', $e->getMessage(), PHP_EOL;
}


//..listTransactionCodes
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transaction uuid
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page
$account = 'account_example'; // string | List to the specified account

try {
    $result = $api->transactions()->listTransactionCodes($uuid, $fields, $page, $perPage, $account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->listTransactionCodes: ', $e->getMessage(), PHP_EOL;
}


//..listTransactions
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page
$account = 'account_example'; // string | List to the specified account

try {
    $result = $api->transactions()->listTransactions($fields, $page, $perPage, $account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->listTransactions: ', $e->getMessage(), PHP_EOL;
}


//..updateLink
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$listLinks200ResponseLinksInner = [/*...*/]; // array
$uuid = 'uuid_example'; // string | A transaction uuid
$linkUuid = 'linkUuid_example'; // string | A transaction link uuid OR the target uuid

try {
    $result = $api->transactions()->updateLink($listLinks200ResponseLinksInner, $uuid, $linkUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transactions->updateLink: ', $e->getMessage(), PHP_EOL;
}


//..updateTransaction
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transaction uuid
$addTransactionRequest = [/*...*/]; // array

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
$updateTransactionCodeRequest = [/*...*/]; // array

try {
    $result = $api->transactions()->updateTransactionCode($uuid, $updateTransactionCodeRequest);
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
$addTransferRequest = [/*...*/]; // array

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
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->transfers()->listTransfers($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transfers->listTransfers: ', $e->getMessage(), PHP_EOL;
}


//..updateTransfer
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The transfer uuid
$addTransferRequest = [/*...*/]; // array

try {
    $result = $api->transfers()->updateTransfer($uuid, $addTransferRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->transfers->updateTransfer: ', $e->getMessage(), PHP_EOL;
}


//..addUser
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addUserRequest = [/*...*/]; // array

try {
    $result = $api->users()->addUser($addUserRequest);
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
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->users()->listUsers($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->users->listUsers: ', $e->getMessage(), PHP_EOL;
}


//..updateUser
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The user uuid
$updateUserRequest = [/*...*/]; // array

try {
    $result = $api->users()->updateUser($uuid, $updateUserRequest);
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
$addCompanyVatIdRequest = [/*...*/]; // array
$uuid = 'uuid_example'; // string | The company uuid

try {
    $result = $api->vATID()->addCompanyVatId($addCompanyVatIdRequest, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->vATID->addCompanyVatId: ', $e->getMessage(), PHP_EOL;
}


//..deleteCompanyVatId
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$key = 'key_example'; // string | The VAT ID uuid
$uuid = 'uuid_example'; // string | The company uuid

try {
    $result = $api->vATID()->deleteCompanyVatId($key, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->vATID->deleteCompanyVatId: ', $e->getMessage(), PHP_EOL;
}


//..getCompanyVatId
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$key = 'key_example'; // string | The VAT ID uuid
$uuid = 'uuid_example'; // string | The company uuid

try {
    $result = $api->vATID()->getCompanyVatId($key, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->vATID->getCompanyVatId: ', $e->getMessage(), PHP_EOL;
}


//..listCompanyVatId
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page
$uuid = 'uuid_example'; // string | The company uuid

try {
    $result = $api->vATID()->listCompanyVatId($fields, $page, $perPage, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->vATID->listCompanyVatId: ', $e->getMessage(), PHP_EOL;
}


//..updateCompanyVatId
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$key = 'key_example'; // string | The VAT ID uuid
$addCompanyVatIdRequest = [/*...*/]; // array
$uuid = 'uuid_example'; // string | The company uuid

try {
    $result = $api->vATID()->updateCompanyVatId($key, $addCompanyVatIdRequest, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->vATID->updateCompanyVatId: ', $e->getMessage(), PHP_EOL;
}


//..addWebhook
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addWebhookRequest = [/*...*/]; // array

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
$fields = 'fields_example'; // string | A comma separated list of fields requested in the response
$page = 'page_example'; // string | The response page
$perPage = 'perPage_example'; // string | The number of items per page

try {
    $result = $api->webhooks()->listWebhooks($fields, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->webhooks->listWebhooks: ', $e->getMessage(), PHP_EOL;
}


//..updateWebhook
require_once(__DIR__ . '/vendor/autoload.php');

$api = new Accounting("auth_token");
$addWebhookRequest = [/*...*/]; // array
$uuid = 'uuid_example'; // string | The webhook uuid

try {
    $result = $api->webhooks()->updateWebhook($addWebhookRequest, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->webhooks->updateWebhook: ', $e->getMessage(), PHP_EOL;
}



# Accounting's php_sdk

Accounting is an all-in-one accounting software that allows you to easily manage all your finance in one place. We provide a free API to control every aspect of our accounting solution and here is the PHP SDK.

For more information, please visit [https://accounting.sh](https://accounting.sh).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), run the following command:

```bash
composer install accounting-sh/php_sdk
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


    
// Configure Bearer (Api Key) authorization: bearer
$config = Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$api = new Accounting("auth_token");
$uuid = 'uuid_example'; // string | The account uuid

try {
    $result = $api->accountConnections()->deleteAccountConnection($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounting->accountConnections->deleteAccountConnection: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.accounting.sh*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountConnectionsApi* | [**deleteAccountConnection**](docs/Api/AccountConnectionsApi.md#deleteaccountconnection) | **DELETE** /accounts/{uuid}/connect | Delete an account&#39;s connection
*AccountConnectionsApi* | [**listAccountConnections**](docs/Api/AccountConnectionsApi.md#listaccountconnections) | **GET** /accounts/{uuid}/connect | List account&#39;s connections
*AccountConnectionsApi* | [**listBanks**](docs/Api/AccountConnectionsApi.md#listbanks) | **GET** /accounts/{uuid}/connect/banks | List available bank connections
*AccountingCodesApi* | [**addAccountingCode**](docs/Api/AccountingCodesApi.md#addaccountingcode) | **POST** /accounting/codes | Add an accounting code
*AccountingCodesApi* | [**deleteAccountingCode**](docs/Api/AccountingCodesApi.md#deleteaccountingcode) | **DELETE** /accounting/codes/{uuid} | Delete an accounting code
*AccountingCodesApi* | [**getAccountingCode**](docs/Api/AccountingCodesApi.md#getaccountingcode) | **GET** /accounting/codes/{uuid} | Get an accounting code
*AccountingCodesApi* | [**listAccountingCodes**](docs/Api/AccountingCodesApi.md#listaccountingcodes) | **GET** /accounting/codes | List company&#39;s accounting code
*AccountingCodesApi* | [**updateAccountingCode**](docs/Api/AccountingCodesApi.md#updateaccountingcode) | **PUT** /accounting/codes/{uuid} | Update an accounting code
*AccountsApi* | [**addAccount**](docs/Api/AccountsApi.md#addaccount) | **POST** /accounts | Add an account
*AccountsApi* | [**deleteAccount**](docs/Api/AccountsApi.md#deleteaccount) | **DELETE** /accounts/{uuid} | Delete an account
*AccountsApi* | [**getAccount**](docs/Api/AccountsApi.md#getaccount) | **GET** /accounts/{uuid} | Get an account
*AccountsApi* | [**listAccounts**](docs/Api/AccountsApi.md#listaccounts) | **GET** /accounts | List company&#39;s accounts
*AccountsApi* | [**updateAccount**](docs/Api/AccountsApi.md#updateaccount) | **PUT** /accounts/{uuid} | Update an account
*AttachmentsApi* | [**addAttachment**](docs/Api/AttachmentsApi.md#addattachment) | **POST** /attachments | Add an attachment
*AttachmentsApi* | [**deleteAttachment**](docs/Api/AttachmentsApi.md#deleteattachment) | **DELETE** /attachments/{uuid} | Delete an attachment
*AttachmentsApi* | [**getAttachment**](docs/Api/AttachmentsApi.md#getattachment) | **GET** /attachments/{uuid} | Get an attachment
*AttachmentsApi* | [**listAttachments**](docs/Api/AttachmentsApi.md#listattachments) | **GET** /attachments | List company&#39;s attachments
*AttachmentsApi* | [**retrieveAttachments**](docs/Api/AttachmentsApi.md#retrieveattachments) | **GET** /attachments/resource/{resource} | List company&#39;s attachments link to resource
*AttachmentsApi* | [**updateAttachment**](docs/Api/AttachmentsApi.md#updateattachment) | **PUT** /attachments/{uuid} | Update an attachment
*AuthApi* | [**authInit**](docs/Api/AuthApi.md#authinit) | **GET** /auth/init | Init authentication process
*AuthApi* | [**login**](docs/Api/AuthApi.md#login) | **POST** /auth/login | Login user
*AuthApi* | [**logout**](docs/Api/AuthApi.md#logout) | **GET** /auth/logout | Logout current user
*AuthApi* | [**switchCompany**](docs/Api/AuthApi.md#switchcompany) | **POST** /auth/switch | Switch to a different company
*BillsApi* | [**addBill**](docs/Api/BillsApi.md#addbill) | **POST** /expenses/bills | Add a bill
*BillsApi* | [**addBillPayment**](docs/Api/BillsApi.md#addbillpayment) | **POST** /expenses/bills/{uuid}/payments | Add a bill payment
*BillsApi* | [**deleteBill**](docs/Api/BillsApi.md#deletebill) | **DELETE** /expenses/bills/{uuid} | Delete a bill
*BillsApi* | [**getBill**](docs/Api/BillsApi.md#getbill) | **GET** /expenses/bills/{uuid} | Get a bill
*BillsApi* | [**getBillDocument**](docs/Api/BillsApi.md#getbilldocument) | **GET** /expenses/bills/{uuid}/document | Get a bill in PDF
*BillsApi* | [**listBills**](docs/Api/BillsApi.md#listbills) | **GET** /expenses/bills | List company&#39;s bills
*BillsApi* | [**updateBill**](docs/Api/BillsApi.md#updatebill) | **PUT** /expenses/bills/{uuid} | Update a bill
*BillsApi* | [**updateBillPayment**](docs/Api/BillsApi.md#updatebillpayment) | **PUT** /expenses/bills/{uuid}/payments/{payment} | Update a bill payment
*CategoriesApi* | [**addCategory**](docs/Api/CategoriesApi.md#addcategory) | **POST** /categories | Add a category
*CategoriesApi* | [**deleteCategory**](docs/Api/CategoriesApi.md#deletecategory) | **DELETE** /categories/{uuid} | Delete a category
*CategoriesApi* | [**getCategory**](docs/Api/CategoriesApi.md#getcategory) | **GET** /categories/{uuid} | Get a category
*CategoriesApi* | [**listCategories**](docs/Api/CategoriesApi.md#listcategories) | **GET** /categories | List company&#39;s categories
*CategoriesApi* | [**updateCategory**](docs/Api/CategoriesApi.md#updatecategory) | **PUT** /categories/{uuid} | Update a category
*CompaniesApi* | [**addCompany**](docs/Api/CompaniesApi.md#addcompany) | **POST** /companies | Add a company
*CompaniesApi* | [**deleteCompany**](docs/Api/CompaniesApi.md#deletecompany) | **DELETE** /companies/{uuid} | Delete a company
*CompaniesApi* | [**getCompany**](docs/Api/CompaniesApi.md#getcompany) | **GET** /companies/{uuid} | Get a company
*CompaniesApi* | [**getCompanyCustomization**](docs/Api/CompaniesApi.md#getcompanycustomization) | **GET** /companies/{uuid}/customization | Get a company&#39;s customization parameters
*CompaniesApi* | [**getCompanyFeatureSet**](docs/Api/CompaniesApi.md#getcompanyfeatureset) | **GET** /companies/{uuid}/features | List a company&#39;s feature set
*CompaniesApi* | [**listCompanies**](docs/Api/CompaniesApi.md#listcompanies) | **GET** /companies | List companies on this instance
*CompaniesApi* | [**updateCompany**](docs/Api/CompaniesApi.md#updatecompany) | **PUT** /companies/{uuid} | Update a company
*CompanyStatisticsApi* | [**getStatistics**](docs/Api/CompanyStatisticsApi.md#getstatistics) | **GET** /companies/{uuid}/statistics/period | Get company&#39;s statistic
*ContactsApi* | [**addContact**](docs/Api/ContactsApi.md#addcontact) | **POST** /contacts | Create a new contact
*ContactsApi* | [**deleteContact**](docs/Api/ContactsApi.md#deletecontact) | **DELETE** /contacts/{uuid} | Delete a contact
*ContactsApi* | [**getContact**](docs/Api/ContactsApi.md#getcontact) | **GET** /contacts/{uuid} | Retrieve a contact
*ContactsApi* | [**listContactBills**](docs/Api/ContactsApi.md#listcontactbills) | **GET** /contacts/{uuid}/bills | List a contact&#39;s bills
*ContactsApi* | [**listContactInvoices**](docs/Api/ContactsApi.md#listcontactinvoices) | **GET** /contacts/{uuid}/invoices | List a contact&#39;s invoices
*ContactsApi* | [**listContacts**](docs/Api/ContactsApi.md#listcontacts) | **GET** /contacts | List company&#39;s contacts
*ContactsApi* | [**updateContact**](docs/Api/ContactsApi.md#updatecontact) | **PUT** /contacts/{uuid} | Update a contact
*CountriesApi* | [**getTranslatedCountries**](docs/Api/CountriesApi.md#gettranslatedcountries) | **GET** /countries/{lang} | Get translated list of countries
*CredentialsApi* | [**addCredential**](docs/Api/CredentialsApi.md#addcredential) | **POST** /credentials | Add a credential
*CredentialsApi* | [**deleteCredential**](docs/Api/CredentialsApi.md#deletecredential) | **DELETE** /credentials/{uuid} | Delete a credential
*CredentialsApi* | [**getCredential**](docs/Api/CredentialsApi.md#getcredential) | **GET** /credentials/{uuid} | Get a credential
*CredentialsApi* | [**listCredentials**](docs/Api/CredentialsApi.md#listcredentials) | **GET** /credentials | List company&#39;s credentials
*CredentialsApi* | [**listPermissions**](docs/Api/CredentialsApi.md#listpermissions) | **GET** /credentials/permissions | List available permissions
*CredentialsApi* | [**me**](docs/Api/CredentialsApi.md#me) | **GET** /me | Get current credential informations
*CredentialsApi* | [**updateCredential**](docs/Api/CredentialsApi.md#updatecredential) | **PUT** /credentials/{uuid} | Update a credential
*CredentialsApi* | [**userveria**](docs/Api/CredentialsApi.md#userveria) | **POST** /userveria | Exchange a my stantabcorp (userveria) token for an Accounting Token
*CurrencyApi* | [**getExchangeRate**](docs/Api/CurrencyApi.md#getexchangerate) | **GET** /currency/{from}/{to} | Get the latest currency exchange rate
*DocumentsApi* | [**cancelReview**](docs/Api/DocumentsApi.md#cancelreview) | **DELETE** /documents/{uuid}/review | Cancel document review
*DocumentsApi* | [**deleteDocument**](docs/Api/DocumentsApi.md#deletedocument) | **DELETE** /documents/{uuid} | Delete a document
*DocumentsApi* | [**getDocument**](docs/Api/DocumentsApi.md#getdocument) | **GET** /documents/{uuid} | Get a document
*DocumentsApi* | [**listDocuments**](docs/Api/DocumentsApi.md#listdocuments) | **GET** /documents | List company&#39;s documents
*DocumentsApi* | [**processDocument**](docs/Api/DocumentsApi.md#processdocument) | **GET** /documents/{uuid}/process | Process a document
*DocumentsApi* | [**reviewUrl**](docs/Api/DocumentsApi.md#reviewurl) | **GET** /documents/{uuid}/review | Get url to review a document
*DocumentsApi* | [**updateDocument**](docs/Api/DocumentsApi.md#updatedocument) | **PUT** /documents/{uuid} | Update a document
*DocumentsApi* | [**uploadDocument**](docs/Api/DocumentsApi.md#uploaddocument) | **POST** /documents | Upload a document
*DocumentsApi* | [**viewDocument**](docs/Api/DocumentsApi.md#viewdocument) | **GET** /documents/{uuid}/view | View a document
*ExpenseReportsApi* | [**addExpenseReport**](docs/Api/ExpenseReportsApi.md#addexpensereport) | **POST** /expenses/expense-reports | Add an expense report
*ExpenseReportsApi* | [**deleteExpenseReport**](docs/Api/ExpenseReportsApi.md#deleteexpensereport) | **DELETE** /expenses/expense-reports/{uuid} | Delete an expense report
*ExpenseReportsApi* | [**expenseReportOAuthLogin**](docs/Api/ExpenseReportsApi.md#expensereportoauthlogin) | **GET** /expenses/expense-reports/login/{method} | OAuth Login
*ExpenseReportsApi* | [**getExpenseReport**](docs/Api/ExpenseReportsApi.md#getexpensereport) | **GET** /expenses/expense-reports/{uuid} | Get an expense report
*ExpenseReportsApi* | [**getExpenseReportAccount**](docs/Api/ExpenseReportsApi.md#getexpensereportaccount) | **GET** /expenses/expense-reports/me | Get the currently connected expense report user details
*ExpenseReportsApi* | [**getExpenseReportUser**](docs/Api/ExpenseReportsApi.md#getexpensereportuser) | **GET** /expenses/expense-reports/users/{uuid} | Get an user details
*ExpenseReportsApi* | [**listExpenseReports**](docs/Api/ExpenseReportsApi.md#listexpensereports) | **GET** /expenses/expense-reports | List company&#39;s expense reports.
*ExpenseReportsApi* | [**sendExpenseReportLoginEmail**](docs/Api/ExpenseReportsApi.md#sendexpensereportloginemail) | **POST** /expenses/expense-reports/login | Request login email
*ExpenseReportsApi* | [**updateExpenseReport**](docs/Api/ExpenseReportsApi.md#updateexpensereport) | **PUT** /expenses/expense-reports/{uuid} | Update an expense report
*ExpenseReportsApi* | [**updateExpenseReportAccount**](docs/Api/ExpenseReportsApi.md#updateexpensereportaccount) | **PUT** /expenses/expense-reports/me | Update the currently connected expense report user
*ExpenseReportsApi* | [**updateExpenseReportSettings**](docs/Api/ExpenseReportsApi.md#updateexpensereportsettings) | **POST** /expenses/expense-reports/settings | Retrieve company settings for expense reports
*ExpenseReportsApi* | [**verifyExpenseReportSettings**](docs/Api/ExpenseReportsApi.md#verifyexpensereportsettings) | **POST** /expenses/expense-reports/verify | Verify expense reports settings
*ExportApi* | [**listExports**](docs/Api/ExportApi.md#listexports) | **GET** /export | List company&#39;s exports
*ExportApi* | [**requestExport**](docs/Api/ExportApi.md#requestexport) | **POST** /export | Request an export
*InvoicesApi* | [**addInvoice**](docs/Api/InvoicesApi.md#addinvoice) | **POST** /incomes/invoices | Add an invoice
*InvoicesApi* | [**addInvoicePayment**](docs/Api/InvoicesApi.md#addinvoicepayment) | **POST** /incomes/invoices/{uuid}/payments | Add an invoice payment
*InvoicesApi* | [**deleteInvoice**](docs/Api/InvoicesApi.md#deleteinvoice) | **DELETE** /incomes/invoices/{uuid} | Delete an invoice
*InvoicesApi* | [**getInvoice**](docs/Api/InvoicesApi.md#getinvoice) | **GET** /incomes/invoices/{uuid} | Get an invoice
*InvoicesApi* | [**getInvoiceDocument**](docs/Api/InvoicesApi.md#getinvoicedocument) | **GET** /incomes/invoices/{uuid}/document | Get an invoice in PDF
*InvoicesApi* | [**listInvoices**](docs/Api/InvoicesApi.md#listinvoices) | **GET** /incomes/invoices | List company&#39;s invoices
*InvoicesApi* | [**listUnpaidInvoices**](docs/Api/InvoicesApi.md#listunpaidinvoices) | **GET** /incomes/invoices/unpaid | List company&#39;s unpaid invoices
*InvoicesApi* | [**updateInvoice**](docs/Api/InvoicesApi.md#updateinvoice) | **PUT** /incomes/invoices/{uuid} | Update an invoice
*InvoicesApi* | [**updateInvoicePayment**](docs/Api/InvoicesApi.md#updateinvoicepayment) | **PUT** /incomes/invoices/{uuid}/payments/{payment} | Update an invoice payment
*LogsApi* | [**logs**](docs/Api/LogsApi.md#logs) | **GET** /logs | List company&#39;s logs
*NotificationApi* | [**listNotificationPreferences**](docs/Api/NotificationApi.md#listnotificationpreferences) | **GET** /notifications/preferences/{notification} | List notification preferences
*NotificationApi* | [**listNotifications**](docs/Api/NotificationApi.md#listnotifications) | **GET** /notifications | List company&#39;s notifications
*NotificationApi* | [**sendNotification**](docs/Api/NotificationApi.md#sendnotification) | **POST** /notifications/send | Send a notification
*NotificationApi* | [**updateNotificationPreferences**](docs/Api/NotificationApi.md#updatenotificationpreferences) | **PUT** /notifications/preferences/{notification} | Update notification preferences
*NotificationTypesApi* | [**addNotificationType**](docs/Api/NotificationTypesApi.md#addnotificationtype) | **POST** /notifications/types | Add a notification type
*NotificationTypesApi* | [**deleteNotificationType**](docs/Api/NotificationTypesApi.md#deletenotificationtype) | **DELETE** /notifications/types/{uuid} | Delete a notification type
*NotificationTypesApi* | [**getNotificationType**](docs/Api/NotificationTypesApi.md#getnotificationtype) | **GET** /notifications/types/{uuid} | Get a notification type
*NotificationTypesApi* | [**listNotificationTypes**](docs/Api/NotificationTypesApi.md#listnotificationtypes) | **GET** /notifications/types | List company&#39;s notification types
*NotificationTypesApi* | [**updateNotificationType**](docs/Api/NotificationTypesApi.md#updatenotificationtype) | **PUT** /notifications/types/{uuid} | Update a notification type
*OAuthConfigApi* | [**addOAuthConfiguration**](docs/Api/OAuthConfigApi.md#addoauthconfiguration) | **POST** /oauth | Add an OAuth configuration
*OAuthConfigApi* | [**deleteOAuthConfiguration**](docs/Api/OAuthConfigApi.md#deleteoauthconfiguration) | **DELETE** /oauth/{uuid} | Delete an oauth configuration
*OAuthConfigApi* | [**getOAuthConfiguration**](docs/Api/OAuthConfigApi.md#getoauthconfiguration) | **GET** /oauth/{uuid} | Get an OAuth configuration
*OAuthConfigApi* | [**listOAuthConfigurations**](docs/Api/OAuthConfigApi.md#listoauthconfigurations) | **GET** /oauth | List company&#39;s oauth configurations
*OAuthConfigApi* | [**listProviders**](docs/Api/OAuthConfigApi.md#listproviders) | **GET** /oauth/providers | List available providers
*OAuthConfigApi* | [**updateOAuthConfiguration**](docs/Api/OAuthConfigApi.md#updateoauthconfiguration) | **PUT** /oauth/{uuid} | Update an oauth configuration
*PaymentsApi* | [**addPayment**](docs/Api/PaymentsApi.md#addpayment) | **POST** /expenses/payments | Add a payment
*PaymentsApi* | [**deletePayment**](docs/Api/PaymentsApi.md#deletepayment) | **DELETE** /expenses/payments/{uuid} | Delete a payment
*PaymentsApi* | [**getPayment**](docs/Api/PaymentsApi.md#getpayment) | **GET** /expenses/payments/{uuid} | Get a payment
*PaymentsApi* | [**listPayments**](docs/Api/PaymentsApi.md#listpayments) | **GET** /expenses/payments | List company&#39;s payments
*PaymentsApi* | [**updatePayment**](docs/Api/PaymentsApi.md#updatepayment) | **PUT** /expenses/payments/{uuid} | Update a payment
*QuotesApi* | [**addQuote**](docs/Api/QuotesApi.md#addquote) | **POST** /quotes | Add a quote
*QuotesApi* | [**deleteQuote**](docs/Api/QuotesApi.md#deletequote) | **DELETE** /quotes/{uuid} | Delete a quote
*QuotesApi* | [**getQuote**](docs/Api/QuotesApi.md#getquote) | **GET** /quotes/{uuid} | Get a quote
*QuotesApi* | [**getQuoteDocument**](docs/Api/QuotesApi.md#getquotedocument) | **GET** /quotes/{uuid}/document | Get a quote in PDF
*QuotesApi* | [**listQuotes**](docs/Api/QuotesApi.md#listquotes) | **GET** /quotes | List company&#39;s quotes
*QuotesApi* | [**updateQuote**](docs/Api/QuotesApi.md#updatequote) | **PUT** /quotes/{uuid} | Update a quote
*ReceiptsApi* | [**addReceipt**](docs/Api/ReceiptsApi.md#addreceipt) | **POST** /receipts | Add a receipt
*ReceiptsApi* | [**deleteReceipt**](docs/Api/ReceiptsApi.md#deletereceipt) | **DELETE** /receipts/{uuid} | Delete a receipt
*ReceiptsApi* | [**getReceipt**](docs/Api/ReceiptsApi.md#getreceipt) | **GET** /receipts/{uuid} | Get a receipt
*ReceiptsApi* | [**getReceiptDocument**](docs/Api/ReceiptsApi.md#getreceiptdocument) | **GET** /receipts/{uuid}/document | Get a receipt in PDF
*ReceiptsApi* | [**listReceipts**](docs/Api/ReceiptsApi.md#listreceipts) | **GET** /receipts | List company&#39;s receipts
*ReceiptsApi* | [**updateReceipt**](docs/Api/ReceiptsApi.md#updatereceipt) | **PUT** /receipts/{uuid} | Update a receipt
*RevenuesApi* | [**addRevenue**](docs/Api/RevenuesApi.md#addrevenue) | **POST** /incomes/revenues | Add a revenue
*RevenuesApi* | [**deleteRevenue**](docs/Api/RevenuesApi.md#deleterevenue) | **DELETE** /incomes/revenues/{uuid} | Delete a revenue
*RevenuesApi* | [**getRevenue**](docs/Api/RevenuesApi.md#getrevenue) | **GET** /incomes/revenues/{uuid} | Get a revenue
*RevenuesApi* | [**listRevenues**](docs/Api/RevenuesApi.md#listrevenues) | **GET** /incomes/revenues | List company&#39;s revenues
*RevenuesApi* | [**updateRevenue**](docs/Api/RevenuesApi.md#updaterevenue) | **PUT** /incomes/revenues/{uuid} | Update a revenue
*RossumApi* | [**listReviews**](docs/Api/RossumApi.md#listreviews) | **GET** /external/rossum/reviews | List documents to be reviewes
*SearchApi* | [**search**](docs/Api/SearchApi.md#search) | **GET** /search | Search
*SettingsApi* | [**getSettings**](docs/Api/SettingsApi.md#getsettings) | **GET** /companies/{uuid}/settings/{key} | Get a company&#39;s settings
*SettingsApi* | [**listSettings**](docs/Api/SettingsApi.md#listsettings) | **GET** /companies/{uuid}/settings | List company&#39;s settings
*SettingsApi* | [**updateSettings**](docs/Api/SettingsApi.md#updatesettings) | **PUT** /companies/{uuid}/settings/{key} | Update a company&#39;s settings
*TagsApi* | [**addTag**](docs/Api/TagsApi.md#addtag) | **POST** /tags | Add a tag
*TagsApi* | [**deleteTag**](docs/Api/TagsApi.md#deletetag) | **DELETE** /tags/{uuid} | Delete a tag
*TagsApi* | [**getTag**](docs/Api/TagsApi.md#gettag) | **GET** /tags/{uuid} | Get a tag
*TagsApi* | [**listTags**](docs/Api/TagsApi.md#listtags) | **GET** /tags | List company&#39;s tags
*TagsApi* | [**listTagsByResource**](docs/Api/TagsApi.md#listtagsbyresource) | **GET** /tags/attachments/{resource} | List company&#39;s tags by resource attachment
*TagsApi* | [**updateTag**](docs/Api/TagsApi.md#updatetag) | **PUT** /tags/{uuid} | Update a tag
*TaxApi* | [**getTaxRate**](docs/Api/TaxApi.md#gettaxrate) | **GET** /tax/{country} | Get the latest tax rate for a country
*TaxApi* | [**verifyVatId**](docs/Api/TaxApi.md#verifyvatid) | **GET** /vat/verify/{number} | Verify a VAT ID
*TransactionsApi* | [**addTransaction**](docs/Api/TransactionsApi.md#addtransaction) | **POST** /transactions | Add a transaction
*TransactionsApi* | [**addTransactionCode**](docs/Api/TransactionsApi.md#addtransactioncode) | **POST** /transactions/{uuid}/codes | Add a transaction&#39;s code
*TransactionsApi* | [**deleteTransaction**](docs/Api/TransactionsApi.md#deletetransaction) | **DELETE** /transactions/{uuid} | Delete a transaction
*TransactionsApi* | [**deleteTransactionCode**](docs/Api/TransactionsApi.md#deletetransactioncode) | **DELETE** /transactions/{uuid}/codes/{code} | Delete a transaction&#39;s code
*TransactionsApi* | [**getTransaction**](docs/Api/TransactionsApi.md#gettransaction) | **GET** /transactions/{uuid} | Get a transaction
*TransactionsApi* | [**importTransactions**](docs/Api/TransactionsApi.md#importtransactions) | **POST** /transactions/import | Import transactions - INTERNAL
*TransactionsApi* | [**ledger**](docs/Api/TransactionsApi.md#ledger) | **GET** /transactions/ledger | List company&#39;s transactions and transfers
*TransactionsApi* | [**listTransactionCodes**](docs/Api/TransactionsApi.md#listtransactioncodes) | **GET** /transactions/{uuid}/codes | List transaction&#39;s codes
*TransactionsApi* | [**listTransactions**](docs/Api/TransactionsApi.md#listtransactions) | **GET** /transactions | List company&#39;s transactions
*TransactionsApi* | [**updateTransaction**](docs/Api/TransactionsApi.md#updatetransaction) | **PUT** /transactions/{uuid} | Update a transaction
*TransactionsApi* | [**updateTransactionCode**](docs/Api/TransactionsApi.md#updatetransactioncode) | **PUT** /transactions/{uuid}/codes | Update a transaction&#39;s code
*TransfersApi* | [**addTransfer**](docs/Api/TransfersApi.md#addtransfer) | **POST** /transfers | Add a transfer
*TransfersApi* | [**deleteTransfer**](docs/Api/TransfersApi.md#deletetransfer) | **DELETE** /transfers/{uuid} | Delete a transfer
*TransfersApi* | [**getTransfer**](docs/Api/TransfersApi.md#gettransfer) | **GET** /transfers/{uuid} | Get a transfer
*TransfersApi* | [**listTransfers**](docs/Api/TransfersApi.md#listtransfers) | **GET** /transfers | List company&#39;s transfers
*TransfersApi* | [**updateTransfer**](docs/Api/TransfersApi.md#updatetransfer) | **PUT** /transfers/{uuid} | Update a transfer
*UsersApi* | [**addUser**](docs/Api/UsersApi.md#adduser) | **POST** /users | Add user
*UsersApi* | [**deleteUser**](docs/Api/UsersApi.md#deleteuser) | **DELETE** /users/{uuid} | Delete user
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /users/{uuid} | View user
*UsersApi* | [**listUsers**](docs/Api/UsersApi.md#listusers) | **GET** /users | List company&#39;s users
*UsersApi* | [**updateUser**](docs/Api/UsersApi.md#updateuser) | **PUT** /users/{uuid} | Update user
*UsersApi* | [**usersCompanies**](docs/Api/UsersApi.md#userscompanies) | **GET** /users/me/companies | List current user companies
*UsersApi* | [**usersMe**](docs/Api/UsersApi.md#usersme) | **GET** /users/me | View current user details
*VATIDApi* | [**addCompanyVatId**](docs/Api/VATIDApi.md#addcompanyvatid) | **POST** /companies/{uuid}/vat | Add a company&#39;s Vat Id
*VATIDApi* | [**deleteCompanyVatId**](docs/Api/VATIDApi.md#deletecompanyvatid) | **DELETE** /companies/{uuid}/vat/{key} | Delete a company&#39;s Vat Id
*VATIDApi* | [**getCompanyVatId**](docs/Api/VATIDApi.md#getcompanyvatid) | **GET** /companies/{uuid}/vat/{key} | Get a company&#39;s Vat Id
*VATIDApi* | [**listCompanyVatId**](docs/Api/VATIDApi.md#listcompanyvatid) | **GET** /companies/{uuid}/vat | List company&#39;s Vat Id
*VATIDApi* | [**updateCompanyVatId**](docs/Api/VATIDApi.md#updatecompanyvatid) | **PUT** /companies/{uuid}/vat/{key} | Update a company&#39;s Vat Id
*WebhooksApi* | [**addWebhook**](docs/Api/WebhooksApi.md#addwebhook) | **POST** /webhooks | Add a webhook
*WebhooksApi* | [**deleteWebhook**](docs/Api/WebhooksApi.md#deletewebhook) | **DELETE** /webhooks/{uuid} | Delete a webhook
*WebhooksApi* | [**getWebhook**](docs/Api/WebhooksApi.md#getwebhook) | **GET** /webhooks/{uuid} | Get a webhook
*WebhooksApi* | [**getWebhookHistory**](docs/Api/WebhooksApi.md#getwebhookhistory) | **GET** /webhooks/{uuid}/history | Get webhook&#39;s history
*WebhooksApi* | [**listWebhookEvents**](docs/Api/WebhooksApi.md#listwebhookevents) | **GET** /webhooks/events | List available webhook events
*WebhooksApi* | [**listWebhooks**](docs/Api/WebhooksApi.md#listwebhooks) | **GET** /webhooks | List company&#39;s webhooks
*WebhooksApi* | [**updateWebhook**](docs/Api/WebhooksApi.md#updatewebhook) | **PUT** /webhooks/{uuid} | Update a webhook



## Authorization
    
    ### bearer

            - **Type**: Bearer authentication (Api Key)

    
    ### cookie

        - **Type**: API key
        - **API key parameter name**: accounting_auth
        - **Location**: 


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `8.1.1`
    - Package version: `1.1.0`
- Generator version: `7.6.0-SNAPSHOT`

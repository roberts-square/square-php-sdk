# Accounts

```php
$accountsApi = $client->getAccountsApi();
```

## Class Name

`AccountsApi`

## Methods

* [Create Account](../../doc/apis/accounts.md#create-account)
* [Get Account](../../doc/apis/accounts.md#get-account)
* [Update Account](../../doc/apis/accounts.md#update-account)


# Create Account

Create a new seller `Account`. Note: Accounts must have a verified legal entity
in order to take payments.

```php
function createAccount(CreateAccountRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CreateAccountRequest`](../../doc/models/create-account-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`CreateAccountResponse`](../../doc/models/create-account-response.md)

## Example Usage

```php
$body_idempotencyKey = '6407d28d-4cef-4d1f-9906-4faf588c01f0';
$body_account_countryCode = Models\Country::US;
$body_account = new Models\Account(
    $body_account_countryCode
);
$body_account->setStatus(Models\AccountStatusScopeAccountStatus::ACTIVE);
$body = new Models\CreateAccountRequest(
    $body_idempotencyKey,
    $body_account
);

$apiResponse = $accountsApi->createAccount($body);

if ($apiResponse->isSuccess()) {
    $createAccountResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Get Account

Retrieve a specific `Account` with an `account_id`.

```php
function getAccount(string $accountId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountId` | `string` | Template, Required | ID for desired `Account`. |

## Response Type

[`GetAccountResponse`](../../doc/models/get-account-response.md)

## Example Usage

```php
$accountId = 'account_id2';

$apiResponse = $accountsApi->getAccount($accountId);

if ($apiResponse->isSuccess()) {
    $getAccountResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Update Account

Update a specific seller `Account` using the `account_id`.
Note: If `version` is supplied, the value must match the most recent version on file.

```php
function updateAccount(string $accountId, UpdateAccountRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountId` | `string` | Template, Required | The ID for the account to be updated. Must match the internal ID of<br>the `Account` object provided in the JSON body. |
| `body` | [`UpdateAccountRequest`](../../doc/models/update-account-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`UpdateAccountResponse`](../../doc/models/update-account-response.md)

## Example Usage

```php
$accountId = 'account_id2';
$body_account_countryCode = Models\Country::SO;
$body_account = new Models\Account(
    $body_account_countryCode
);
$body = new Models\UpdateAccountRequest(
    $body_account
);

$apiResponse = $accountsApi->updateAccount($accountId, $body);

if ($apiResponse->isSuccess()) {
    $updateAccountResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


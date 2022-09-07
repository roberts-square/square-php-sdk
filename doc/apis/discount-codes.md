# Discount Codes

```php
$discountCodesApi = $client->getDiscountCodesApi();
```

## Class Name

`DiscountCodesApi`

## Methods

* [Create Discount Code](../../doc/apis/discount-codes.md#create-discount-code)
* [Search Discount Codes](../../doc/apis/discount-codes.md#search-discount-codes)
* [Retrieve Discount Code](../../doc/apis/discount-codes.md#retrieve-discount-code)
* [Update Discount Code](../../doc/apis/discount-codes.md#update-discount-code)
* [Create Redemption](../../doc/apis/discount-codes.md#create-redemption)
* [Retrieve Redemption](../../doc/apis/discount-codes.md#retrieve-redemption)
* [Update Redemption](../../doc/apis/discount-codes.md#update-redemption)


# Create Discount Code

Create a `DiscountCode` resource.

Creates a [DiscountCode](../../doc/models/discount-code.md). The associated pricing rule determines
how and what is discounted.

```php
function createDiscountCode(CreateDiscountCodeRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CreateDiscountCodeRequest`](../../doc/models/create-discount-code-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`CreateDiscountCodeResponse`](../../doc/models/create-discount-code-response.md)

## Example Usage

```php
$body_discountCode = new Models\DiscountCode;
$body_idempotencyKey = 'idempotency_key2';
$body = new Models\CreateDiscountCodeRequest(
    $body_discountCode,
    $body_idempotencyKey
);

$apiResponse = $discountCodesApi->createDiscountCode($body);

if ($apiResponse->isSuccess()) {
    $createDiscountCodeResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Search Discount Codes

Searches for discount codes. The `query` in the request body provides filtering information.

```php
function searchDiscountCodes(SearchDiscountCodesRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`SearchDiscountCodesRequest`](../../doc/models/search-discount-codes-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`SearchDiscountCodesResponse`](../../doc/models/search-discount-codes-response.md)

## Example Usage

```php
$body_query_filter = new Models\DiscountCodeFilter;
$body_query = new Models\DiscountCodeQuery(
    $body_query_filter
);
$body = new Models\SearchDiscountCodesRequest(
    $body_query
);

$apiResponse = $discountCodesApi->searchDiscountCodes($body);

if ($apiResponse->isSuccess()) {
    $searchDiscountCodesResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Retrieve Discount Code

Retrieve a `DiscountCode` by the discount code ID.

```php
function retrieveDiscountCode(string $discountCodeId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `discountCodeId` | `string` | Template, Required | The ID of the `DiscountCode` to retrieve. |

## Response Type

[`RetrieveDiscountCodeResponse`](../../doc/models/retrieve-discount-code-response.md)

## Example Usage

```php
$discountCodeId = 'discount_code_id8';

$apiResponse = $discountCodesApi->retrieveDiscountCode($discountCodeId);

if ($apiResponse->isSuccess()) {
    $retrieveDiscountCodeResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Update Discount Code

Updates a `DiscountCode` object. In the current implementation, you can only
add or update the `expires_at` field.

```php
function updateDiscountCode(string $discountCodeId, UpdateDiscountCodeRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `discountCodeId` | `string` | Template, Required | The ID of the `DiscountCode` to update. |
| `body` | [`UpdateDiscountCodeRequest`](../../doc/models/update-discount-code-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`UpdateDiscountCodeResponse`](../../doc/models/update-discount-code-response.md)

## Example Usage

```php
$discountCodeId = 'discount_code_id8';
$body_discountCode = new Models\DiscountCode;
$body = new Models\UpdateDiscountCodeRequest(
    $body_discountCode
);

$apiResponse = $discountCodesApi->updateDiscountCode($discountCodeId, $body);

if ($apiResponse->isSuccess()) {
    $updateDiscountCodeResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Create Redemption

Applies the specified discount to an order and creates a [Redemption]((#type-redemption).
Initially, the state of the redemption is PENDING. The buyer must complete the order (pay for it)
for the redemption to be finalized.

```php
function createRedemption(string $discountCodeId, CreateRedemptionRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `discountCodeId` | `string` | Template, Required | The ID of the `DiscountCode` to apply. |
| `body` | [`CreateRedemptionRequest`](../../doc/models/create-redemption-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`CreateRedemptionResponse`](../../doc/models/create-redemption-response.md)

## Example Usage

```php
$discountCodeId = 'discount_code_id8';
$body_redemption = new Models\Redemption;
$body_idempotencyKey = 'idempotency_key2';
$body = new Models\CreateRedemptionRequest(
    $body_redemption,
    $body_idempotencyKey
);

$apiResponse = $discountCodesApi->createRedemption($discountCodeId, $body);

if ($apiResponse->isSuccess()) {
    $createRedemptionResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Retrieve Redemption

Retrieves a [Redemption](../../doc/models/redemption.md) based on the redemption ID and the
discount code ID.
This endpoint is useful for ensuring optimistic concurrency when updating a `Redemption`
(that is, make sure you are using the correct version number in your `UpdateRedemption` request).

```php
function retrieveRedemption(string $redemptionId, string $discountCodeId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `redemptionId` | `string` | Template, Required | The ID of the `Redemption` to retrieve. |
| `discountCodeId` | `string` | Template, Required | The ID of the `DiscountCode` that was applied when the `Redemption` was created. |

## Response Type

[`RetrieveRedemptionResponse`](../../doc/models/retrieve-redemption-response.md)

## Example Usage

```php
$redemptionId = 'redemption_id6';
$discountCodeId = 'discount_code_id8';

$apiResponse = $discountCodesApi->retrieveRedemption($redemptionId, $discountCodeId);

if ($apiResponse->isSuccess()) {
    $retrieveRedemptionResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Update Redemption

Updates the state of an existing [Redemption](../../doc/models/redemption.md).
You can change the redemption state between PENDING and CANCELED.

```php
function updateRedemption(
    string $redemptionId,
    string $discountCodeId,
    UpdateRedemptionRequest $body
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `redemptionId` | `string` | Template, Required | The ID of the `Redemption` to update. |
| `discountCodeId` | `string` | Template, Required | The ID of the `DiscountCode` that was applied when the `Redemption` was created. |
| `body` | [`UpdateRedemptionRequest`](../../doc/models/update-redemption-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`UpdateRedemptionResponse`](../../doc/models/update-redemption-response.md)

## Example Usage

```php
$redemptionId = 'redemption_id6';
$discountCodeId = 'discount_code_id8';
$body_redemption = new Models\Redemption;
$body = new Models\UpdateRedemptionRequest(
    $body_redemption
);

$apiResponse = $discountCodesApi->updateRedemption($redemptionId, $discountCodeId, $body);

if ($apiResponse->isSuccess()) {
    $updateRedemptionResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


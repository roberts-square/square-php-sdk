# Checkouts

```php
$checkoutsApi = $client->getCheckoutsApi();
```

## Class Name

`CheckoutsApi`

## Methods

* [List Terminal Checkouts](../../doc/apis/checkouts.md#list-terminal-checkouts)
* [Create Terminal Checkout](../../doc/apis/checkouts.md#create-terminal-checkout)
* [Get Terminal Checkout](../../doc/apis/checkouts.md#get-terminal-checkout)
* [Ack Terminal Checkout](../../doc/apis/checkouts.md#ack-terminal-checkout)
* [Cancel Terminal Checkout](../../doc/apis/checkouts.md#cancel-terminal-checkout)


# List Terminal Checkouts

Method definition for the [ListCheckouts](#endpoint-listcheckouts) endpoint.

```php
function listTerminalCheckouts(
    ?string $deviceId = null,
    ?string $cursor = null,
    ?string $beginTime = null,
    ?string $endTime = null,
    ?string $sortOrder = null,
    ?string $status = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `deviceId` | `?string` | Query, Optional | The `TerminalCheckout` objects associated with a specific device. If no device is specified, then all<br>`TerminalCheckout` objects for the signed-in account are displayed. |
| `cursor` | `?string` | Query, Optional | A pagination cursor returned by a previous call to this endpoint.<br>Provide this cursor to retrieve the next set of results for the original query.<br>See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information. |
| `beginTime` | `?string` | Query, Optional | The RFC 3339 timestamp for the beginning of the reporting period, which is inclusive.<br>Default value: The current time minus one day. |
| `endTime` | `?string` | Query, Optional | The RFC 3339 timestamp for the end of the reporting period, which is inclusive.<br>Default value: The current time. |
| `sortOrder` | `?string` | Query, Optional | The order in which results are listed.<br><br>- `ASC` - Oldest to newest.<br>- `DESC` - Newest to oldest (default). |
| `status` | `?string` | Query, Optional | Filtered results with the desired status of the `TerminalCheckout`. |

## Response Type

[`ListTerminalCheckoutsResponse`](../../doc/models/list-terminal-checkouts-response.md)

## Example Usage

```php
$apiResponse = $checkoutsApi->listTerminalCheckouts();

if ($apiResponse->isSuccess()) {
    $listTerminalCheckoutsResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Create Terminal Checkout

Method definition for the [CreateTerminalCheckout](#endpoint-createcheckout) endpoint.

```php
function createTerminalCheckout(CreateTerminalCheckoutRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CreateTerminalCheckoutRequest`](../../doc/models/create-terminal-checkout-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`CreateTerminalCheckoutResponse`](../../doc/models/create-terminal-checkout-response.md)

## Example Usage

```php
$body_idempotencyKey = '28a0c3bc-7839-11ea-bc55-0242ac130003';
$body_checkout_amountMoney = new Models\Money;
$body_checkout_amountMoney->setAmount(2610);
$body_checkout_amountMoney->setCurrency(Models\Currency::USD);
$body_checkout_deviceOptions_deviceId = 'dbb5d83a-7838-11ea-bc55-0242ac130003';
$body_checkout_deviceOptions = new Models\DeviceCheckoutOptions(
    $body_checkout_deviceOptions_deviceId
);
$body_checkout = new Models\TerminalCheckout(
    $body_checkout_amountMoney,
    $body_checkout_deviceOptions
);
$body_checkout->setReferenceId('id11572');
$body_checkout->setNote('A brief note');
$body = new Models\CreateTerminalCheckoutRequest(
    $body_idempotencyKey,
    $body_checkout
);

$apiResponse = $checkoutsApi->createTerminalCheckout($body);

if ($apiResponse->isSuccess()) {
    $createTerminalCheckoutResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Get Terminal Checkout

Method definition for the [GetCheckout](#endpoint-getcheckout) endpoint.

```php
function getTerminalCheckout(string $checkoutId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `checkoutId` | `string` | Template, Required | The unique ID for the desired `TerminalCheckout`. |

## Response Type

[`GetTerminalCheckoutResponse`](../../doc/models/get-terminal-checkout-response.md)

## Example Usage

```php
$checkoutId = 'checkout_id8';

$apiResponse = $checkoutsApi->getTerminalCheckout($checkoutId);

if ($apiResponse->isSuccess()) {
    $getTerminalCheckoutResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Ack Terminal Checkout

Method definition for the [AckCheckout](#endpoint-ackcheckout) endpoint.

```php
function ackTerminalCheckout(string $checkoutId, AckTerminalCheckoutRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `checkoutId` | `string` | Template, Required | The unique ID for the desired `TerminalCheckout`. |
| `body` | [`AckTerminalCheckoutRequest`](../../doc/models/ack-terminal-checkout-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`AckTerminalCheckoutResponse`](../../doc/models/ack-terminal-checkout-response.md)

## Example Usage

```php
$checkoutId = 'checkout_id8';
$body = new Models\AckTerminalCheckoutRequest;

$apiResponse = $checkoutsApi->ackTerminalCheckout($checkoutId, $body);

if ($apiResponse->isSuccess()) {
    $ackTerminalCheckoutResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Cancel Terminal Checkout

Method definition for the [CancelCheckout](#endpoint-cancelcheckout) endpoint.

```php
function cancelTerminalCheckout(string $checkoutId, CancelTerminalCheckoutRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `checkoutId` | `string` | Template, Required | The unique ID for the desired `TerminalCheckout`. |
| `body` | [`CancelTerminalCheckoutRequest`](../../doc/models/cancel-terminal-checkout-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`CancelTerminalCheckoutResponse`](../../doc/models/cancel-terminal-checkout-response.md)

## Example Usage

```php
$checkoutId = 'checkout_id8';
$body = new Models\CancelTerminalCheckoutRequest;

$apiResponse = $checkoutsApi->cancelTerminalCheckout($checkoutId, $body);

if ($apiResponse->isSuccess()) {
    $cancelTerminalCheckoutResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


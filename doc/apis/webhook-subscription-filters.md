# Webhook Subscription Filters

```php
$webhookSubscriptionFiltersApi = $client->getWebhookSubscriptionFiltersApi();
```

## Class Name

`WebhookSubscriptionFiltersApi`

## Methods

* [List Webhook Subscription Filters](../../doc/apis/webhook-subscription-filters.md#list-webhook-subscription-filters)
* [Create Webhook Subscription Filter](../../doc/apis/webhook-subscription-filters.md#create-webhook-subscription-filter)
* [Delete Webhook Subscription Filter](../../doc/apis/webhook-subscription-filters.md#delete-webhook-subscription-filter)
* [Retrieve Webhook Subscription Filter](../../doc/apis/webhook-subscription-filters.md#retrieve-webhook-subscription-filter)
* [Update Webhook Subscription Filter](../../doc/apis/webhook-subscription-filters.md#update-webhook-subscription-filter)
* [List Webhook Subscription Filter Values](../../doc/apis/webhook-subscription-filters.md#list-webhook-subscription-filter-values)
* [Add Webhook Subscription Filter Values](../../doc/apis/webhook-subscription-filters.md#add-webhook-subscription-filter-values)
* [Remove Webhook Subscription Filter Values](../../doc/apis/webhook-subscription-filters.md#remove-webhook-subscription-filter-values)


# List Webhook Subscription Filters

Lists webhook subscription filters.

```php
function listWebhookSubscriptionFilters(
    string $subscriptionId,
    ?string $cursor = null,
    ?string $sortOrder = null,
    ?int $limit = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | [REQUIRED] Id of the webhook subscription that owns the filter. |
| `cursor` | `?string` | Query, Optional | A pagination cursor returned by a previous call to this endpoint.<br>Provide this to retrieve the next set of results for your original query.<br><br>See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information. |
| `sortOrder` | [`?string (SortOrder)`](../../doc/models/sort-order.md) | Query, Optional | Sorts the returned list by when the subscription filter was created with the specified order.<br>This field defaults to ASC. |
| `limit` | `?int` | Query, Optional | The maximum number of results to be returned in a single page.<br>It is possible to receive fewer results than the specified limit on a given page.<br>The default value of 100 is also the maximum allowed value. If the provided value is greater<br>than 100, it is ignored and the default value is used instead.<br><br>Default: 100 |

## Response Type

[`ListWebhookSubscriptionFiltersResponse`](../../doc/models/list-webhook-subscription-filters-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';

$apiResponse = $webhookSubscriptionFiltersApi->listWebhookSubscriptionFilters($subscriptionId);

if ($apiResponse->isSuccess()) {
    $listWebhookSubscriptionFiltersResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Create Webhook Subscription Filter

Creates a webhook subscription filter.

```php
function createWebhookSubscriptionFilter(
    string $subscriptionId,
    CreateWebhookSubscriptionFilterRequest $body
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | [REQUIRED] Id of the webhook subscription that owns the filter. |
| `body` | [`CreateWebhookSubscriptionFilterRequest`](../../doc/models/create-webhook-subscription-filter-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`CreateWebhookSubscriptionFilterResponse`](../../doc/models/create-webhook-subscription-filter-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$body_idempotencyKey = '5574152b-3a17-47ad-bd75-3ebd3ea87f33';
$body_filter = new Models\WebhookSubscriptionFilter;
$body_filter->setAuthType(Models\WebhookSubscriptionFilterAuthType::OAUTH);
$body_filter->setFilterType(Models\WebhookSubscriptionFilterFilterType::MERCHANT_ID);
$body_filter->setFilterAction(Models\WebhookSubscriptionFilterFilterAction::ALLOW);
$body = new Models\CreateWebhookSubscriptionFilterRequest(
    $body_idempotencyKey,
    $body_filter
);

$apiResponse = $webhookSubscriptionFiltersApi->createWebhookSubscriptionFilter($subscriptionId, $body);

if ($apiResponse->isSuccess()) {
    $createWebhookSubscriptionFilterResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Delete Webhook Subscription Filter

Deletes a webhook subscription filter.

```php
function deleteWebhookSubscriptionFilter(string $subscriptionId, string $filterId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | [REQUIRED] Id of the webhook subscription that owns the filter. |
| `filterId` | `string` | Template, Required | [REQUIRED] Id of the webhook subscription filter to delete. |

## Response Type

[`DeleteWebhookSubscriptionFilterResponse`](../../doc/models/delete-webhook-subscription-filter-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$filterId = 'filter_id8';

$apiResponse = $webhookSubscriptionFiltersApi->deleteWebhookSubscriptionFilter($subscriptionId, $filterId);

if ($apiResponse->isSuccess()) {
    $deleteWebhookSubscriptionFilterResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Retrieve Webhook Subscription Filter

Retrieves a webhook subscription filter.

```php
function retrieveWebhookSubscriptionFilter(string $subscriptionId, string $filterId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | [REQUIRED] Id of the webhook subscription that owns the filter. |
| `filterId` | `string` | Template, Required | [REQUIRED] Id of the webhook subscription filter to retrieve. |

## Response Type

[`RetrieveWebhookSubscriptionFilterResponse`](../../doc/models/retrieve-webhook-subscription-filter-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$filterId = 'filter_id8';

$apiResponse = $webhookSubscriptionFiltersApi->retrieveWebhookSubscriptionFilter($subscriptionId, $filterId);

if ($apiResponse->isSuccess()) {
    $retrieveWebhookSubscriptionFilterResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Update Webhook Subscription Filter

Updates a webhook subscription filter.

```php
function updateWebhookSubscriptionFilter(
    string $subscriptionId,
    string $filterId,
    UpdateWebhookSubscriptionFilterRequest $body
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | [REQUIRED] Id of the webhook subscription that owns the filter. |
| `filterId` | `string` | Template, Required | [REQUIRED] Id of the webhook subscription filter to update. |
| `body` | [`UpdateWebhookSubscriptionFilterRequest`](../../doc/models/update-webhook-subscription-filter-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`UpdateWebhookSubscriptionFilterResponse`](../../doc/models/update-webhook-subscription-filter-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$filterId = 'filter_id8';
$body_filter = new Models\WebhookSubscriptionFilter;
$body_filter->setFilterAction(Models\WebhookSubscriptionFilterFilterAction::DISALLOW);
$body = new Models\UpdateWebhookSubscriptionFilterRequest(
    $body_filter
);

$apiResponse = $webhookSubscriptionFiltersApi->updateWebhookSubscriptionFilter($subscriptionId, $filterId, $body);

if ($apiResponse->isSuccess()) {
    $updateWebhookSubscriptionFilterResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# List Webhook Subscription Filter Values

Lists values of a webhook subscription filter.

```php
function listWebhookSubscriptionFilterValues(
    string $subscriptionId,
    string $filterId,
    ?string $cursor = null,
    ?string $sortOrder = null,
    ?int $limit = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | [REQUIRED] Id of the webhook subscription that owns the filter. |
| `filterId` | `string` | Template, Required | [REQUIRED] Id of the webhook subscription filter to retrieve values from. |
| `cursor` | `?string` | Query, Optional | A pagination cursor returned by a previous call to this endpoint.<br>Provide this to retrieve the next set of results for your original query.<br><br>See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information. |
| `sortOrder` | [`?string (SortOrder)`](../../doc/models/sort-order.md) | Query, Optional | Sorts the returned list of subscription filter values in alphabetical order.<br>This field defaults to ASC. |
| `limit` | `?int` | Query, Optional | The maximum number of results to be returned in a single page.<br>It is possible to receive fewer results than the specified limit on a given page.<br>The default value of 100 is also the maximum allowed value. If the provided value is greater<br>than 100, it is ignored and the default value is used instead.<br><br>Default: 100 |

## Response Type

[`ListWebhookSubscriptionFilterValuesResponse`](../../doc/models/list-webhook-subscription-filter-values-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$filterId = 'filter_id8';

$apiResponse = $webhookSubscriptionFiltersApi->listWebhookSubscriptionFilterValues($subscriptionId, $filterId);

if ($apiResponse->isSuccess()) {
    $listWebhookSubscriptionFilterValuesResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Add Webhook Subscription Filter Values

Adds values to a webhook subscription filter.

```php
function addWebhookSubscriptionFilterValues(
    string $subscriptionId,
    string $filterId,
    AddWebhookSubscriptionFilterValuesRequest $body
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | ID of the webhook subscription. |
| `filterId` | `string` | Template, Required | ID of the subscription filter for which to add values. |
| `body` | [`AddWebhookSubscriptionFilterValuesRequest`](../../doc/models/add-webhook-subscription-filter-values-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`AddWebhookSubscriptionFilterValuesResponse`](../../doc/models/add-webhook-subscription-filter-values-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$filterId = 'filter_id8';
$body_filterValues = ['1ZYMKZY1YFGBW', '6G31J2A44JQ0P'];
$body = new Models\AddWebhookSubscriptionFilterValuesRequest(
    $body_filterValues
);

$apiResponse = $webhookSubscriptionFiltersApi->addWebhookSubscriptionFilterValues($subscriptionId, $filterId, $body);

if ($apiResponse->isSuccess()) {
    $addWebhookSubscriptionFilterValuesResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Remove Webhook Subscription Filter Values

Removes values from a webhook subscription filter.

```php
function removeWebhookSubscriptionFilterValues(
    string $subscriptionId,
    string $filterId,
    RemoveWebhookSubscriptionFilterValuesRequest $body
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `string` | Template, Required | ID of the webhook subscription. |
| `filterId` | `string` | Template, Required | ID of the subscription filter from which to remove values. |
| `body` | [`RemoveWebhookSubscriptionFilterValuesRequest`](../../doc/models/remove-webhook-subscription-filter-values-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`RemoveWebhookSubscriptionFilterValuesResponse`](../../doc/models/remove-webhook-subscription-filter-values-response.md)

## Example Usage

```php
$subscriptionId = 'subscription_id0';
$filterId = 'filter_id8';
$body_filterValues = ['6G31J2A44JQ0P'];
$body = new Models\RemoveWebhookSubscriptionFilterValuesRequest(
    $body_filterValues
);

$apiResponse = $webhookSubscriptionFiltersApi->removeWebhookSubscriptionFilterValues($subscriptionId, $filterId, $body);

if ($apiResponse->isSuccess()) {
    $removeWebhookSubscriptionFilterValuesResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


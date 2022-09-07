# Order Custom Attributes

```php
$orderCustomAttributesApi = $client->getOrderCustomAttributesApi();
```

## Class Name

`OrderCustomAttributesApi`

## Methods

* [List Order Custom Attribute Definitions](../../doc/apis/order-custom-attributes.md#list-order-custom-attribute-definitions)
* [Create Order Custom Attribute Definition](../../doc/apis/order-custom-attributes.md#create-order-custom-attribute-definition)
* [Delete Order Custom Attribute Definition](../../doc/apis/order-custom-attributes.md#delete-order-custom-attribute-definition)
* [Get Order Custom Attribute Definition](../../doc/apis/order-custom-attributes.md#get-order-custom-attribute-definition)
* [Update Order Custom Attribute Definition](../../doc/apis/order-custom-attributes.md#update-order-custom-attribute-definition)
* [List Order Custom Attributes](../../doc/apis/order-custom-attributes.md#list-order-custom-attributes)
* [Bulk Delete Order Custom Attributes](../../doc/apis/order-custom-attributes.md#bulk-delete-order-custom-attributes)
* [Bulk Upsert Order Custom Attributes](../../doc/apis/order-custom-attributes.md#bulk-upsert-order-custom-attributes)
* [Delete Order Custom Attribute](../../doc/apis/order-custom-attributes.md#delete-order-custom-attribute)
* [Get Order Custom Attribute](../../doc/apis/order-custom-attributes.md#get-order-custom-attribute)
* [Upsert Order Custom Attribute](../../doc/apis/order-custom-attributes.md#upsert-order-custom-attribute)


# List Order Custom Attribute Definitions

ListOrderCustomAttributeDefinitions

```php
function listOrderCustomAttributeDefinitions(
    ?string $visibilityFilter = null,
    ?string $cursor = null,
    ?int $limit = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `visibilityFilter` | [`?string (VisibilityFilter)`](../../doc/models/visibility-filter.md) | Query, Optional | Filters the `CustomAttributeDefinition` results by their `visibility` values. |
| `cursor` | `?string` | Query, Optional | A pagination cursor returned by a previous call to this endpoint.<br>Provide this cursor to retrieve the next set of results for your original query.<br>For more information, see [Pagination](https://developer.squareup.com/docs/working-with-apis/pagination). |
| `limit` | `?int` | Query, Optional | A limit on the number of results to be returned in a single page. The limit is advisory -<br>the implementation may return more or fewer results. If the supplied limit is negative, zero, or<br>is higher than the maximum limit of 100, the request will fail. Default value: 20.<br>For more information, see [Pagination](https://developer.squareup.com/docs/working-with-apis/pagination). |

## Response Type

[`ListOrderCustomAttributeDefinitionsResponse`](../../doc/models/list-order-custom-attribute-definitions-response.md)

## Example Usage

```php
$apiResponse = $orderCustomAttributesApi->listOrderCustomAttributeDefinitions();

if ($apiResponse->isSuccess()) {
    $listOrderCustomAttributeDefinitionsResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Create Order Custom Attribute Definition

CreateOrderCustomAttributeDefinition

```php
function createOrderCustomAttributeDefinition(CreateOrderCustomAttributeDefinitionRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CreateOrderCustomAttributeDefinitionRequest`](../../doc/models/create-order-custom-attribute-definition-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`CreateOrderCustomAttributeDefinitionResponse`](../../doc/models/create-order-custom-attribute-definition-response.md)

## Example Usage

```php
$body_customAttributeDefinition = new Models\CustomAttributeDefinition;
$body = new Models\CreateOrderCustomAttributeDefinitionRequest(
    $body_customAttributeDefinition
);

$apiResponse = $orderCustomAttributesApi->createOrderCustomAttributeDefinition($body);

if ($apiResponse->isSuccess()) {
    $createOrderCustomAttributeDefinitionResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Delete Order Custom Attribute Definition

DeleteOrderCustomAttributeDefinition

```php
function deleteOrderCustomAttributeDefinition(string $key): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `key` | `string` | Template, Required | The key of the `CustomAttributeDefinition` to delete. |

## Response Type

[`DeleteOrderCustomAttributeDefinitionResponse`](../../doc/models/delete-order-custom-attribute-definition-response.md)

## Example Usage

```php
$key = 'key0';

$apiResponse = $orderCustomAttributesApi->deleteOrderCustomAttributeDefinition($key);

if ($apiResponse->isSuccess()) {
    $deleteOrderCustomAttributeDefinitionResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Get Order Custom Attribute Definition

GetOrderCustomAttributeDefinition

```php
function getOrderCustomAttributeDefinition(string $key, ?int $version = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `key` | `string` | Template, Required | The key of the `CustomAttributeDefinition` to retrieve. |
| `version` | `?int` | Query, Optional | Used for optimistic concurrency. The `version` of the `CustomAttributeDefinition` returned will be<br>at least equal to the version set. |

## Response Type

[`GetOrderCustomAttributeDefinitionResponse`](../../doc/models/get-order-custom-attribute-definition-response.md)

## Example Usage

```php
$key = 'key0';

$apiResponse = $orderCustomAttributesApi->getOrderCustomAttributeDefinition($key);

if ($apiResponse->isSuccess()) {
    $getOrderCustomAttributeDefinitionResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Update Order Custom Attribute Definition

UpdateOrderCustomAttributeDefinition

```php
function updateOrderCustomAttributeDefinition(
    string $key,
    UpdateOrderCustomAttributeDefinitionRequest $body
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `key` | `string` | Template, Required | The key of the `CustomAttributeDefinition` to update. |
| `body` | [`UpdateOrderCustomAttributeDefinitionRequest`](../../doc/models/update-order-custom-attribute-definition-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`UpdateOrderCustomAttributeDefinitionResponse`](../../doc/models/update-order-custom-attribute-definition-response.md)

## Example Usage

```php
$key = 'key0';
$body_customAttributeDefinition = new Models\CustomAttributeDefinition;
$body = new Models\UpdateOrderCustomAttributeDefinitionRequest(
    $body_customAttributeDefinition
);

$apiResponse = $orderCustomAttributesApi->updateOrderCustomAttributeDefinition($key, $body);

if ($apiResponse->isSuccess()) {
    $updateOrderCustomAttributeDefinitionResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# List Order Custom Attributes

ListOrderCustomAttributes

```php
function listOrderCustomAttributes(
    string $orderId,
    ?string $visibilityFilter = null,
    ?string $cursor = null,
    ?int $limit = null,
    ?bool $withDefinitions = false
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | The ID of the parent resource. |
| `visibilityFilter` | [`?string (VisibilityFilter)`](../../doc/models/visibility-filter.md) | Query, Optional | Filters the `CustomAttributeDefinition` results by their `visibility` values. |
| `cursor` | `?string` | Query, Optional | A pagination cursor returned by a previous call to this endpoint.<br>Provide this cursor to retrieve the next set of results for your original query.<br>For more information, see [Pagination](https://developer.squareup.com/docs/working-with-apis/pagination). |
| `limit` | `?int` | Query, Optional | A limit on the number of results to be returned in a single page. The limit is advisory -<br>the implementation may return more or fewer results. If the supplied limit is negative, zero, or<br>is higher than the maximum limit of 100, the request will fail. Default value: 20.<br>For more information, see [Pagination](https://developer.squareup.com/docs/working-with-apis/pagination). |
| `withDefinitions` | `?bool` | Query, Optional | If `true`, the matching `CustomAttributeDefinition` object will be included in each result on the `definition` field.<br>This flag could be used to avoid making separate calls for the definition and values.<br>**Default**: `false` |

## Response Type

[`ListOrderCustomAttributesResponse`](../../doc/models/list-order-custom-attributes-response.md)

## Example Usage

```php
$orderId = 'order_id6';
$withDefinitions = false;

$apiResponse = $orderCustomAttributesApi->listOrderCustomAttributes($orderId, null, null, null, $withDefinitions);

if ($apiResponse->isSuccess()) {
    $listOrderCustomAttributesResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Bulk Delete Order Custom Attributes

BulkDeleteOrderCustomAttributes

```php
function bulkDeleteOrderCustomAttributes(
    string $orderId,
    BulkDeleteOrderCustomAttributesRequest $body
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | The ID of the parent resource. |
| `body` | [`BulkDeleteOrderCustomAttributesRequest`](../../doc/models/bulk-delete-order-custom-attributes-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`BulkDeleteOrderCustomAttributesResponse`](../../doc/models/bulk-delete-order-custom-attributes-response.md)

## Example Usage

```php
$orderId = 'order_id6';
$body_values = [];

$body_values[''] = new Models\BulkDeleteOrderCustomAttributesRequestDeleteCustomAttribute;

$body_values[''] = new Models\BulkDeleteOrderCustomAttributesRequestDeleteCustomAttribute;

$body = new Models\BulkDeleteOrderCustomAttributesRequest(
    $body_values
);

$apiResponse = $orderCustomAttributesApi->bulkDeleteOrderCustomAttributes($orderId, $body);

if ($apiResponse->isSuccess()) {
    $bulkDeleteOrderCustomAttributesResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Bulk Upsert Order Custom Attributes

BulkUpsertOrderCustomAttributes

```php
function bulkUpsertOrderCustomAttributes(
    string $orderId,
    BulkUpsertOrderCustomAttributesRequest $body
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | The ID of the parent resource. |
| `body` | [`BulkUpsertOrderCustomAttributesRequest`](../../doc/models/bulk-upsert-order-custom-attributes-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`BulkUpsertOrderCustomAttributesResponse`](../../doc/models/bulk-upsert-order-custom-attributes-response.md)

## Example Usage

```php
$orderId = 'order_id6';
$body_values = [];

$body_values__customAttribute = new Models\CustomAttribute;
$body_values[''] = new Models\BulkUpsertOrderCustomAttributesRequestUpsertCustomAttribute(
    $body_values__customAttribute
);

$body_values__customAttribute = new Models\CustomAttribute;
$body_values[''] = new Models\BulkUpsertOrderCustomAttributesRequestUpsertCustomAttribute(
    $body_values__customAttribute
);

$body = new Models\BulkUpsertOrderCustomAttributesRequest(
    $body_values
);

$apiResponse = $orderCustomAttributesApi->bulkUpsertOrderCustomAttributes($orderId, $body);

if ($apiResponse->isSuccess()) {
    $bulkUpsertOrderCustomAttributesResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Delete Order Custom Attribute

DeleteOrderCustomAttribute

```php
function deleteOrderCustomAttribute(string $orderId, string $customAttributeKey): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | The ID of the parent resource. |
| `customAttributeKey` | `string` | Template, Required | The key of the custom attribute to insert or update.<br>`custom_attribute_key` must match the key from an existing `CustomAttributeDefinition`. |

## Response Type

[`DeleteOrderCustomAttributeResponse`](../../doc/models/delete-order-custom-attribute-response.md)

## Example Usage

```php
$orderId = 'order_id6';
$customAttributeKey = 'custom_attribute_key2';

$apiResponse = $orderCustomAttributesApi->deleteOrderCustomAttribute($orderId, $customAttributeKey);

if ($apiResponse->isSuccess()) {
    $deleteOrderCustomAttributeResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Get Order Custom Attribute

GetOrderCustomAttribute

```php
function getOrderCustomAttribute(
    string $orderId,
    string $customAttributeKey,
    ?int $version = null,
    ?bool $withDefinition = false
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | The ID of the parent resource. |
| `customAttributeKey` | `string` | Template, Required | The key of the custom attribute value to retrieve.<br>`custom_attribute_key` must match the key from an existing `CustomAttributeDefinition`. |
| `version` | `?int` | Query, Optional | Used for optimistic concurrency. The `version` of the `CustomAttribute` returned will be<br>at least equal to the version set. |
| `withDefinition` | `?bool` | Query, Optional | If `true`, the matching `CustomAttributeDefinition` object will be included in the result's `definition` field<br>This flag could be used to avoid making separate calls for the definition and values.<br>**Default**: `false` |

## Response Type

[`GetOrderCustomAttributeResponse`](../../doc/models/get-order-custom-attribute-response.md)

## Example Usage

```php
$orderId = 'order_id6';
$customAttributeKey = 'custom_attribute_key2';
$withDefinition = false;

$apiResponse = $orderCustomAttributesApi->getOrderCustomAttribute($orderId, $customAttributeKey, null, $withDefinition);

if ($apiResponse->isSuccess()) {
    $getOrderCustomAttributeResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Upsert Order Custom Attribute

UpsertOrderCustomAttribute

```php
function upsertOrderCustomAttribute(
    string $orderId,
    string $customAttributeKey,
    UpsertOrderCustomAttributeRequest $body
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | The ID of the parent resource. |
| `customAttributeKey` | `string` | Template, Required | The key of the custom attribute to insert or update.<br>`custom_attribute_key` must match the key from an existing `CustomAttributeDefinition`. |
| `body` | [`UpsertOrderCustomAttributeRequest`](../../doc/models/upsert-order-custom-attribute-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`UpsertOrderCustomAttributeResponse`](../../doc/models/upsert-order-custom-attribute-response.md)

## Example Usage

```php
$orderId = 'order_id6';
$customAttributeKey = 'custom_attribute_key2';
$body_customAttribute = new Models\CustomAttribute;
$body = new Models\UpsertOrderCustomAttributeRequest(
    $body_customAttribute
);

$apiResponse = $orderCustomAttributesApi->upsertOrderCustomAttribute($orderId, $customAttributeKey, $body);

if ($apiResponse->isSuccess()) {
    $upsertOrderCustomAttributeResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


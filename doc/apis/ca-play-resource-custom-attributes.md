# Ca Play Resource Custom Attributes

```php
$caPlayResourceCustomAttributesApi = $client->getCaPlayResourceCustomAttributesApi();
```

## Class Name

`CaPlayResourceCustomAttributesApi`

## Methods

* [List Ca Play Resource Custom Attribute Definitions](../../doc/apis/ca-play-resource-custom-attributes.md#list-ca-play-resource-custom-attribute-definitions)
* [Create Ca Play Resource Custom Attribute Definition](../../doc/apis/ca-play-resource-custom-attributes.md#create-ca-play-resource-custom-attribute-definition)
* [Delete Ca Play Resource Custom Attribute Definition](../../doc/apis/ca-play-resource-custom-attributes.md#delete-ca-play-resource-custom-attribute-definition)
* [Get Ca Play Resource Custom Attribute Definition](../../doc/apis/ca-play-resource-custom-attributes.md#get-ca-play-resource-custom-attribute-definition)
* [Update Ca Play Resource Custom Attribute Definition](../../doc/apis/ca-play-resource-custom-attributes.md#update-ca-play-resource-custom-attribute-definition)
* [List Ca Play Resource Custom Attributes](../../doc/apis/ca-play-resource-custom-attributes.md#list-ca-play-resource-custom-attributes)
* [Bulk Delete Ca Play Resource Custom Attributes](../../doc/apis/ca-play-resource-custom-attributes.md#bulk-delete-ca-play-resource-custom-attributes)
* [Bulk Upsert Ca Play Resource Custom Attributes](../../doc/apis/ca-play-resource-custom-attributes.md#bulk-upsert-ca-play-resource-custom-attributes)
* [Delete Ca Play Resource Custom Attribute](../../doc/apis/ca-play-resource-custom-attributes.md#delete-ca-play-resource-custom-attribute)
* [Get Ca Play Resource Custom Attribute](../../doc/apis/ca-play-resource-custom-attributes.md#get-ca-play-resource-custom-attribute)
* [Upsert Ca Play Resource Custom Attribute](../../doc/apis/ca-play-resource-custom-attributes.md#upsert-ca-play-resource-custom-attribute)


# List Ca Play Resource Custom Attribute Definitions

ListCaPlayResourceCustomAttributeDefinitions

```php
function listCaPlayResourceCustomAttributeDefinitions(
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

[`ListCaPlayResourceCustomAttributeDefinitionsApiResponse`](../../doc/models/list-ca-play-resource-custom-attribute-definitions-api-response.md)

## Example Usage

```php
$apiResponse = $caPlayResourceCustomAttributesApi->listCaPlayResourceCustomAttributeDefinitions();

if ($apiResponse->isSuccess()) {
    $listCaPlayResourceCustomAttributeDefinitionsApiResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Create Ca Play Resource Custom Attribute Definition

CreateCaPlayResourceCustomAttributeDefinition

```php
function createCaPlayResourceCustomAttributeDefinition(
    CreateCaPlayResourceCustomAttributeDefinitionApiRequest $body
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CreateCaPlayResourceCustomAttributeDefinitionApiRequest`](../../doc/models/create-ca-play-resource-custom-attribute-definition-api-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`CreateCaPlayResourceCustomAttributeDefinitionApiResponse`](../../doc/models/create-ca-play-resource-custom-attribute-definition-api-response.md)

## Example Usage

```php
$body_customAttributeDefinition = new Models\CustomAttributeDefinition;
$body = new Models\CreateCaPlayResourceCustomAttributeDefinitionApiRequest(
    $body_customAttributeDefinition
);

$apiResponse = $caPlayResourceCustomAttributesApi->createCaPlayResourceCustomAttributeDefinition($body);

if ($apiResponse->isSuccess()) {
    $createCaPlayResourceCustomAttributeDefinitionApiResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Delete Ca Play Resource Custom Attribute Definition

DeleteCaPlayResourceCustomAttributeDefinition

```php
function deleteCaPlayResourceCustomAttributeDefinition(string $key, ?bool $hardDelete = false): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `key` | `string` | Template, Required | The key of the `CustomAttributeDefinition` to delete. |
| `hardDelete` | `?bool` | Query, Optional | If set to `true`, the object will be deleted without possibility of recovery.<br>**Default**: `false` |

## Response Type

[`DeleteCaPlayResourceCustomAttributeDefinitionApiResponse`](../../doc/models/delete-ca-play-resource-custom-attribute-definition-api-response.md)

## Example Usage

```php
$key = 'key0';
$hardDelete = false;

$apiResponse = $caPlayResourceCustomAttributesApi->deleteCaPlayResourceCustomAttributeDefinition($key, $hardDelete);

if ($apiResponse->isSuccess()) {
    $deleteCaPlayResourceCustomAttributeDefinitionApiResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Get Ca Play Resource Custom Attribute Definition

GetCaPlayResourceCustomAttributeDefinition

```php
function getCaPlayResourceCustomAttributeDefinition(string $key, ?int $version = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `key` | `string` | Template, Required | The key of the `CustomAttributeDefinition` to retrieve. |
| `version` | `?int` | Query, Optional | Used for optimistic concurrency. The `version` of the `CustomAttributeDefinition` returned will be<br>at least equal to the version set. |

## Response Type

[`GetCaPlayResourceCustomAttributeDefinitionApiResponse`](../../doc/models/get-ca-play-resource-custom-attribute-definition-api-response.md)

## Example Usage

```php
$key = 'key0';

$apiResponse = $caPlayResourceCustomAttributesApi->getCaPlayResourceCustomAttributeDefinition($key);

if ($apiResponse->isSuccess()) {
    $getCaPlayResourceCustomAttributeDefinitionApiResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Update Ca Play Resource Custom Attribute Definition

UpdateCaPlayResourceCustomAttributeDefinition

```php
function updateCaPlayResourceCustomAttributeDefinition(
    string $key,
    UpdateCaPlayResourceCustomAttributeDefinitionApiRequest $body
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `key` | `string` | Template, Required | The key of the `CustomAttributeDefinition` to update. |
| `body` | [`UpdateCaPlayResourceCustomAttributeDefinitionApiRequest`](../../doc/models/update-ca-play-resource-custom-attribute-definition-api-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`UpdateCaPlayResourceCustomAttributeDefinitionApiResponse`](../../doc/models/update-ca-play-resource-custom-attribute-definition-api-response.md)

## Example Usage

```php
$key = 'key0';
$body_customAttributeDefinition = new Models\CustomAttributeDefinition;
$body = new Models\UpdateCaPlayResourceCustomAttributeDefinitionApiRequest(
    $body_customAttributeDefinition
);

$apiResponse = $caPlayResourceCustomAttributesApi->updateCaPlayResourceCustomAttributeDefinition($key, $body);

if ($apiResponse->isSuccess()) {
    $updateCaPlayResourceCustomAttributeDefinitionApiResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# List Ca Play Resource Custom Attributes

ListCaPlayResourceCustomAttributes

```php
function listCaPlayResourceCustomAttributes(
    string $resourceId,
    ?string $visibilityFilter = null,
    ?string $cursor = null,
    ?int $limit = null,
    ?bool $withDefinitions = false
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `resourceId` | `string` | Template, Required | The ID of the parent resource. |
| `visibilityFilter` | [`?string (VisibilityFilter)`](../../doc/models/visibility-filter.md) | Query, Optional | Filters the `CustomAttributeDefinition` results by their `visibility` values. |
| `cursor` | `?string` | Query, Optional | A pagination cursor returned by a previous call to this endpoint.<br>Provide this cursor to retrieve the next set of results for your original query.<br>For more information, see [Pagination](https://developer.squareup.com/docs/working-with-apis/pagination). |
| `limit` | `?int` | Query, Optional | A limit on the number of results to be returned in a single page. The limit is advisory -<br>the implementation may return more or fewer results. If the supplied limit is negative, zero, or<br>is higher than the maximum limit of 100, the request will fail. Default value: 20.<br>For more information, see [Pagination](https://developer.squareup.com/docs/working-with-apis/pagination). |
| `withDefinitions` | `?bool` | Query, Optional | If `true`, the matching `CustomAttributeDefinition` object will be included in each result on the `definition` field.<br>This flag could be used to avoid making separate calls for the definition and values.<br>**Default**: `false` |

## Response Type

[`ListCaPlayResourceCustomAttributesApiResponse`](../../doc/models/list-ca-play-resource-custom-attributes-api-response.md)

## Example Usage

```php
$resourceId = 'resource_id4';
$withDefinitions = false;

$apiResponse = $caPlayResourceCustomAttributesApi->listCaPlayResourceCustomAttributes($resourceId, null, null, null, $withDefinitions);

if ($apiResponse->isSuccess()) {
    $listCaPlayResourceCustomAttributesApiResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Bulk Delete Ca Play Resource Custom Attributes

BulkDeleteCaPlayResourceCustomAttributes

```php
function bulkDeleteCaPlayResourceCustomAttributes(
    string $resourceId,
    BulkDeleteCaPlayResourceCustomAttributesApiRequest $body
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `resourceId` | `string` | Template, Required | The ID of the parent resource. |
| `body` | [`BulkDeleteCaPlayResourceCustomAttributesApiRequest`](../../doc/models/bulk-delete-ca-play-resource-custom-attributes-api-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`BulkDeleteCaPlayResourceCustomAttributesApiResponse`](../../doc/models/bulk-delete-ca-play-resource-custom-attributes-api-response.md)

## Example Usage

```php
$resourceId = 'resource_id4';
$body_values = [];

$body_values[''] = new Models\BulkDeleteCaPlayResourceCustomAttributesApiRequestDeleteCustomAttribute;

$body_values[''] = new Models\BulkDeleteCaPlayResourceCustomAttributesApiRequestDeleteCustomAttribute;

$body = new Models\BulkDeleteCaPlayResourceCustomAttributesApiRequest(
    $body_values
);

$apiResponse = $caPlayResourceCustomAttributesApi->bulkDeleteCaPlayResourceCustomAttributes($resourceId, $body);

if ($apiResponse->isSuccess()) {
    $bulkDeleteCaPlayResourceCustomAttributesApiResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Bulk Upsert Ca Play Resource Custom Attributes

BulkUpsertCaPlayResourceCustomAttributes

```php
function bulkUpsertCaPlayResourceCustomAttributes(
    string $resourceId,
    BulkUpsertCaPlayResourceCustomAttributesApiRequest $body
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `resourceId` | `string` | Template, Required | The ID of the parent resource. |
| `body` | [`BulkUpsertCaPlayResourceCustomAttributesApiRequest`](../../doc/models/bulk-upsert-ca-play-resource-custom-attributes-api-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`BulkUpsertCaPlayResourceCustomAttributesApiResponse`](../../doc/models/bulk-upsert-ca-play-resource-custom-attributes-api-response.md)

## Example Usage

```php
$resourceId = 'resource_id4';
$body_values = [];

$body_values__customAttribute = new Models\CustomAttribute;
$body_values[''] = new Models\BulkUpsertCaPlayResourceCustomAttributesApiRequestUpsertCustomAttribute(
    $body_values__customAttribute
);

$body_values__customAttribute = new Models\CustomAttribute;
$body_values[''] = new Models\BulkUpsertCaPlayResourceCustomAttributesApiRequestUpsertCustomAttribute(
    $body_values__customAttribute
);

$body = new Models\BulkUpsertCaPlayResourceCustomAttributesApiRequest(
    $body_values
);

$apiResponse = $caPlayResourceCustomAttributesApi->bulkUpsertCaPlayResourceCustomAttributes($resourceId, $body);

if ($apiResponse->isSuccess()) {
    $bulkUpsertCaPlayResourceCustomAttributesApiResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Delete Ca Play Resource Custom Attribute

DeleteCaPlayResourceCustomAttribute

```php
function deleteCaPlayResourceCustomAttribute(
    string $resourceId,
    string $customAttributeKey,
    ?bool $hardDelete = false
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `resourceId` | `string` | Template, Required | The ID of the parent resource. |
| `customAttributeKey` | `string` | Template, Required | The key of the custom attribute to insert or update.<br>`custom_attribute_key` must match the key from an existing `CustomAttributeDefinition`. |
| `hardDelete` | `?bool` | Query, Optional | If set to `true`, the object will be deleted without possibility of recovery.<br>**Default**: `false` |

## Response Type

[`DeleteCaPlayResourceCustomAttributeApiResponse`](../../doc/models/delete-ca-play-resource-custom-attribute-api-response.md)

## Example Usage

```php
$resourceId = 'resource_id4';
$customAttributeKey = 'custom_attribute_key2';
$hardDelete = false;

$apiResponse = $caPlayResourceCustomAttributesApi->deleteCaPlayResourceCustomAttribute($resourceId, $customAttributeKey, $hardDelete);

if ($apiResponse->isSuccess()) {
    $deleteCaPlayResourceCustomAttributeApiResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Get Ca Play Resource Custom Attribute

GetCaPlayResourceCustomAttribute

```php
function getCaPlayResourceCustomAttribute(
    string $resourceId,
    string $customAttributeKey,
    ?int $version = null,
    ?bool $withDefinition = false
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `resourceId` | `string` | Template, Required | The ID of the parent resource. |
| `customAttributeKey` | `string` | Template, Required | The key of the custom attribute value to retrieve.<br>`custom_attribute_key` must match the key from an existing `CustomAttributeDefinition`. |
| `version` | `?int` | Query, Optional | Used for optimistic concurrency. The `version` of the `CustomAttribute` returned will be<br>at least equal to the version set. |
| `withDefinition` | `?bool` | Query, Optional | If `true`, the matching `CustomAttributeDefinition` object will be included in the result's `definition` field<br>This flag could be used to avoid making separate calls for the definition and values.<br>**Default**: `false` |

## Response Type

[`GetCaPlayResourceCustomAttributeApiResponse`](../../doc/models/get-ca-play-resource-custom-attribute-api-response.md)

## Example Usage

```php
$resourceId = 'resource_id4';
$customAttributeKey = 'custom_attribute_key2';
$withDefinition = false;

$apiResponse = $caPlayResourceCustomAttributesApi->getCaPlayResourceCustomAttribute($resourceId, $customAttributeKey, null, $withDefinition);

if ($apiResponse->isSuccess()) {
    $getCaPlayResourceCustomAttributeApiResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Upsert Ca Play Resource Custom Attribute

UpsertCaPlayResourceCustomAttribute

```php
function upsertCaPlayResourceCustomAttribute(
    string $resourceId,
    string $customAttributeKey,
    UpsertCaPlayResourceCustomAttributeApiRequest $body
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `resourceId` | `string` | Template, Required | The ID of the parent resource. |
| `customAttributeKey` | `string` | Template, Required | The key of the custom attribute to insert or update.<br>`custom_attribute_key` must match the key from an existing `CustomAttributeDefinition`. |
| `body` | [`UpsertCaPlayResourceCustomAttributeApiRequest`](../../doc/models/upsert-ca-play-resource-custom-attribute-api-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`UpsertCaPlayResourceCustomAttributeApiResponse`](../../doc/models/upsert-ca-play-resource-custom-attribute-api-response.md)

## Example Usage

```php
$resourceId = 'resource_id4';
$customAttributeKey = 'custom_attribute_key2';
$body_customAttribute = new Models\CustomAttribute;
$body = new Models\UpsertCaPlayResourceCustomAttributeApiRequest(
    $body_customAttribute
);

$apiResponse = $caPlayResourceCustomAttributesApi->upsertCaPlayResourceCustomAttribute($resourceId, $customAttributeKey, $body);

if ($apiResponse->isSuccess()) {
    $upsertCaPlayResourceCustomAttributeApiResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


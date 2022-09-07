# Resource

```php
$resourceApi = $client->getResourceApi();
```

## Class Name

`ResourceApi`

## Methods

* [List Resources](../../doc/apis/resource.md#list-resources)
* [Get Resource](../../doc/apis/resource.md#get-resource)


# List Resources

ListResources

```php
function listResources(): ApiResponse
```

## Response Type

[`ListResourcesResponse`](../../doc/models/list-resources-response.md)

## Example Usage

```php
$apiResponse = $resourceApi->listResources();

if ($apiResponse->isSuccess()) {
    $listResourcesResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Get Resource

GetResource

```php
function getResource(string $resourceId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `resourceId` | `string` | Template, Required | - |

## Response Type

[`GetResourceResponse`](../../doc/models/get-resource-response.md)

## Example Usage

```php
$resourceId = 'resource_id4';

$apiResponse = $resourceApi->getResource($resourceId);

if ($apiResponse->isSuccess()) {
    $getResourceResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


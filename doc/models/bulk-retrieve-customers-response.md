
# Bulk Retrieve Customers Response

Defines the fields included in the response body from the
[BulkRetrieveCustomers](../../doc/apis/customers.md#bulk-retrieve-customers) endpoint.

## Structure

`BulkRetrieveCustomersResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `responses` | [`?array<string,RetrieveCustomerResponse>`](../../doc/models/retrieve-customer-response.md) | Optional | A map of key-value pairs as the [RetrieveCustomer](#endpoint-retrievecustomer) response body.<br><br>Each key-value pair in the map represents an `{customer.id: RetrieveCustomerResponse}`<br>combination. If the `RetrieveCustomer` request fails, the entry includes error information about<br>the failure. | getResponses(): ?array | setResponses(?array responses): void |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Any errors that occurred during the request. | getErrors(): ?array | setErrors(?array errors): void |

## Example (as JSON)

```json
{
  "responses": null,
  "errors": null
}
```


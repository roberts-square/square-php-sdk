
# Bulk Create Customers Response

Defines the fields included in the response body from the
[BulkCreateCustomers](../../doc/apis/customers.md#bulk-create-customers) endpoint.

## Structure

`BulkCreateCustomersResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `responses` | [`?array<string,CreateCustomerResponse>`](../../doc/models/create-customer-response.md) | Optional | A map of key-value pairs as the [CreateCustomer](#endpoint-createcustomer) response body.<br><br>Each key-value pair in the map represents an `{idempotency_key: CreateCustomerResponse}`<br>combination. If the `CreateCustomer` request succeeded, the entry is a valid customer profile.<br>If the `CreateCustomer` request failed, the entry includes error information about the failure. | getResponses(): ?array | setResponses(?array responses): void |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Any errors that occurred during the request. | getErrors(): ?array | setErrors(?array errors): void |

## Example (as JSON)

```json
{
  "responses": null,
  "errors": null
}
```


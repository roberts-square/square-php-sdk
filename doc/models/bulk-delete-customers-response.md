
# Bulk Delete Customers Response

Defines the fields included in the response body from the
[BulkDeleteCustomers](../../doc/apis/customers.md#bulk-delete-customers) endpoint.

## Structure

`BulkDeleteCustomersResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `responses` | [`?array<string,DeleteCustomerResponse>`](../../doc/models/delete-customer-response.md) | Optional | A map of key-value pairs as the [DeleteCustomer](#endpoint-deletecustomer) response body.<br><br>Each key-value pair in the map represents an `{customer.id: DeleteCustomerResponse}`<br>combination. If the `DeleteCustomer` request fails, the entry includes error information about<br>the failure. | getResponses(): ?array | setResponses(?array responses): void |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Any errors that occurred during the request. | getErrors(): ?array | setErrors(?array errors): void |

## Example (as JSON)

```json
{
  "responses": null,
  "errors": null
}
```


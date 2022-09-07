
# Bulk Update Customers Response

Defines the fields included in the response body from the
[BulkUpdateCustomers](../../doc/apis/customers.md#bulk-update-customers) endpoint.

## Structure

`BulkUpdateCustomersResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `responses` | [`?array<string,UpdateCustomerResponse>`](../../doc/models/update-customer-response.md) | Optional | A map of key-value pairs as the [Update Customer](#endpoint-updatecustomer) response body.<br><br>Each key-value pair in the map represents an `{customer.id: UpdateCustomerResponse}<br>combination. If the UpdateCustomer request succeeds, the entry is a valid customer profile.<br>If the UpdateCustomer request fails, the entry includes error information about the failure. | getResponses(): ?array | setResponses(?array responses): void |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Any errors that occurred during the request. | getErrors(): ?array | setErrors(?array errors): void |

## Example (as JSON)

```json
{
  "responses": null,
  "errors": null
}
```


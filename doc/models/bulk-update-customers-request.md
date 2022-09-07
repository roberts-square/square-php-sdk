
# Bulk Update Customers Request

Defines the body parameters that can be included in requests to the
[BulkUpdateCustomers](../../doc/apis/customers.md#bulk-update-customers) endpoint.

## Structure

`BulkUpdateCustomersRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customers` | [`?array<string,BulkUpdateCustomerData>`](../../doc/models/bulk-update-customer-data.md) | Optional | A map of key-value pairs as the [UpdateCustomer](#endpoint-createcustomer) request body.<br>Each key-value pair in the map represents a `{customer_id: UpdateCustomerRequest}` combination. | getCustomers(): ?array | setCustomers(?array customers): void |

## Example (as JSON)

```json
{
  "customers": null
}
```


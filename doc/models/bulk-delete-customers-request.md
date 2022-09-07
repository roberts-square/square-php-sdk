
# Bulk Delete Customers Request

Defines the body parameters that can be included in requests to the
[BulkDeleteCustomers](../../doc/apis/customers.md#bulk-delete-customers) endpoint.

## Structure

`BulkDeleteCustomersRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customerIds` | `?(string[])` | Optional | The list of customer ID strings identifying the customers whose profiles are to delete. For example: ["1", "2", "3"]. | getCustomerIds(): ?array | setCustomerIds(?array customerIds): void |

## Example (as JSON)

```json
{
  "customer_ids": null
}
```


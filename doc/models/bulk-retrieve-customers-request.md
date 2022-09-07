
# Bulk Retrieve Customers Request

Defines the body parameters that can be included in requests to the
[BulkRetrieveCustomers](../../doc/apis/customers.md#bulk-retrieve-customers) endpoint.

## Structure

`BulkRetrieveCustomersRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customerIds` | `?(string[])` | Optional | The list of customer ID strings identifying customers whose profiles are to be retrieved. For example: ["1", "2", "3"]. | getCustomerIds(): ?array | setCustomerIds(?array customerIds): void |

## Example (as JSON)

```json
{
  "customer_ids": null
}
```


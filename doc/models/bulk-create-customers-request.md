
# Bulk Create Customers Request

Defines the body parameters that can be included in requests to the
[BulkCreateCustomers](../../doc/apis/customers.md#bulk-create-customers) endpoint.

## Structure

`BulkCreateCustomersRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customers` | [`?array<string,BulkCreateCustomerData>`](../../doc/models/bulk-create-customer-data.md) | Optional | A map of key-value pairs as the [Create Customer](#endpoint-createcustomer) request body.<br><br>Each key-value pair in the map represents an `{idempotency_key: CreateCustomerRequest}`<br>combination. If the `CreateCustomerRequest` body includes an [idempotency key](https://developer.squareup.com/docs/working-with-apis/idempotency),<br>it must match the value provided as the map entry key. | getCustomers(): ?array | setCustomers(?array customers): void |

## Example (as JSON)

```json
{
  "customers": null
}
```


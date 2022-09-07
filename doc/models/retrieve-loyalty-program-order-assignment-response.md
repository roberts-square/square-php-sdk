
# Retrieve Loyalty Program Order Assignment Response

A response to retrieve a `LoyaltyOrderAssignment`.

## Structure

`RetrieveLoyaltyProgramOrderAssignmentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Any errors that occurred during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `loyaltyOrderAssignment` | [`?LoyaltyOrderAssignment`](../../doc/models/loyalty-order-assignment.md) | Optional | Represents a linkage between a loyalty account and an order. | getLoyaltyOrderAssignment(): ?LoyaltyOrderAssignment | setLoyaltyOrderAssignment(?LoyaltyOrderAssignment loyaltyOrderAssignment): void |

## Example (as JSON)

```json
{
  "errors": null,
  "loyalty_order_assignment": null
}
```


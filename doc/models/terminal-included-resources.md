
# Terminal Included Resources

## Structure

`TerminalIncludedResources`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cards` | [`?(Card[])`](../../doc/models/card.md) | Optional | Included card resources | getCards(): ?array | setCards(?array cards): void |
| `customers` | [`?(Customer[])`](../../doc/models/customer.md) | Optional | Included customer resources | getCustomers(): ?array | setCustomers(?array customers): void |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Information on errors encountered during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `orders` | [`?(Order[])`](../../doc/models/order.md) | Optional | Included order resources for a given order_id, if available. | getOrders(): ?array | setOrders(?array orders): void |
| `payments` | [`?(Payment[])`](../../doc/models/payment.md) | Optional | Included payments | getPayments(): ?array | setPayments(?array payments): void |

## Example (as JSON)

```json
{
  "cards": null,
  "customers": null,
  "errors": null,
  "orders": null,
  "payments": null
}
```


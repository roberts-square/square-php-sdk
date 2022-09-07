
# Redemption

Represents the application of a `DiscountCode` to an order.

## Structure

`Redemption`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | The Square-assigned ID of the `Redemption` resource. | getId(): ?string | setId(?string id): void |
| `discountCodeId` | `?string` | Optional | The ID of the discount code used. | getDiscountCodeId(): ?string | setDiscountCodeId(?string discountCodeId): void |
| `orderId` | `?string` | Optional | The ID of the order to which the discount code is applied. | getOrderId(): ?string | setOrderId(?string orderId): void |
| `state` | [`?string (RedemptionState)`](../../doc/models/redemption-state.md) | Optional | The status of the redemption. | getState(): ?string | setState(?string state): void |
| `createdAt` | `?string` | Optional | The timestamp when the `Redemption` was created, in RFC 3339 format. | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `updatedAt` | `?string` | Optional | The timestamp when the `Redemption` was last updated, in RFC 3339 format. | getUpdatedAt(): ?string | setUpdatedAt(?string updatedAt): void |
| `version` | `?string` | Optional | The `Redemption` version number. It increments each time an update is applied.<br>It is used to enforce [Optimistic Concurrency](https://developer.squareup.com/docs/working-with-apis/optimistic-concurrency).<br>**Constraints**: *Maximum Length*: `192` | getVersion(): ?string | setVersion(?string version): void |
| `customerId` | `?string` | Optional | The ID of the [Customer](../../doc/models/customer.md) that applied the discount code. | getCustomerId(): ?string | setCustomerId(?string customerId): void |

## Example (as JSON)

```json
{
  "discount_code_id": null,
  "order_id": null,
  "state": null
}
```


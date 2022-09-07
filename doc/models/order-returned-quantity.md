
# Order Returned Quantity

Represents a return quantity that applies to a line items/custom amount in an order.

## Structure

`OrderReturnedQuantity`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | A unique ID that identifies the return within this order. | getUid(): ?string | setUid(?string uid): void |
| `returnOrderId` | `?string` | Optional | The order that the return happened in | getReturnOrderId(): ?string | setReturnOrderId(?string returnOrderId): void |
| `returnUid` | `?string` | Optional | The return_uid from the return order | getReturnUid(): ?string | setReturnUid(?string returnUid): void |
| `returnLineItemUid` | `?string` | Optional | The return_line_item uid from the return order | getReturnLineItemUid(): ?string | setReturnLineItemUid(?string returnLineItemUid): void |
| `returnedQuantity` | `?string` | Optional | The quantity of the unit that were returned, can be fractional | getReturnedQuantity(): ?string | setReturnedQuantity(?string returnedQuantity): void |
| `refundedMoney` | [`?Money`](../../doc/models/money.md) | Optional | Represents an amount of money. `Money` fields can be signed or unsigned.<br>Fields that do not explicitly define whether they are signed or unsigned are<br>considered unsigned and can only hold positive amounts. For signed fields, the<br>sign of the value indicates the purpose of the money transfer. See<br>[Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-monetary-amounts)<br>for more information. | getRefundedMoney(): ?Money | setRefundedMoney(?Money refundedMoney): void |
| `state` | [`?string (OrderReturnedQuantityState)`](../../doc/models/order-returned-quantity-state.md) | Optional | The current state of this returned quantity. | getState(): ?string | setState(?string state): void |

## Example (as JSON)

```json
{
  "uid": null,
  "return_order_id": null,
  "return_uid": null,
  "return_line_item_uid": null,
  "returned_quantity": null,
  "refunded_money": null,
  "state": null
}
```


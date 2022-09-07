
# Order Fulfillment Digital Details

## Structure

`OrderFulfillmentDigitalDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `recipient` | [`?OrderFulfillmentRecipient`](../../doc/models/order-fulfillment-recipient.md) | Optional | Information about the fulfillment recipient. | getRecipient(): ?OrderFulfillmentRecipient | setRecipient(?OrderFulfillmentRecipient recipient): void |
| `placedAt` | `?string` | Optional | The date the fulfillment was requested. | getPlacedAt(): ?string | setPlacedAt(?string placedAt): void |
| `completedAt` | `?string` | Optional | The date the fulfillment was completed. | getCompletedAt(): ?string | setCompletedAt(?string completedAt): void |
| `canceledAt` | `?string` | Optional | The date the fulfillment was canceled by either the merchant or the buyer. | getCanceledAt(): ?string | setCanceledAt(?string canceledAt): void |
| `cancelReason` | `?string` | Optional | A description of why the fulfillment was canceled.<br>**Constraints**: *Maximum Length*: `100` | getCancelReason(): ?string | setCancelReason(?string cancelReason): void |

## Example (as JSON)

```json
{
  "recipient": null,
  "placed_at": null,
  "completed_at": null,
  "canceled_at": null,
  "cancel_reason": null
}
```


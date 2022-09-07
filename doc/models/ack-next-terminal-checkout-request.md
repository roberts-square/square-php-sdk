
# Ack Next Terminal Checkout Request

## Structure

`AckNextTerminalCheckoutRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `idempotencyKey` | `string` | Required | A unique string that identifies this `AckNextTerminalCheckout` request. Keys can be any<br>valid string but must be unique for every `AckNextTerminalCheckout` request.<br><br>See [Idempotency keys](https://developer.squareup.com/docs/basics/api101/idempotency) for more information.<br>**Constraints**: *Minimum Length*: `1` | getIdempotencyKey(): string | setIdempotencyKey(string idempotencyKey): void |
| `deviceId` | `?string` | Optional | The device associated with this `TerminalCheckout`. | getDeviceId(): ?string | setDeviceId(?string deviceId): void |
| `ackReason` | [`?string (AckReasonsAckReason)`](../../doc/models/ack-reasons-ack-reason.md) | Optional | The reason for the ACK. | getAckReason(): ?string | setAckReason(?string ackReason): void |

## Example (as JSON)

```json
{
  "idempotency_key": "idempotency_key6",
  "device_id": null,
  "ack_reason": null
}
```



# Pay Order Request Delay Completion

The delay completion details including the reason (e.g. PAPER_TIP) and the payment IDs
to delay completion for. The same reason is used for all payments, but not all payments in the
payment group have to use delayed completion. For example, a split tender checkout where one
payment type cannot use delayed completion (e.g. ACH).

## Structure

`PayOrderRequestDelayCompletion`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `reason` | `string` | Required, Constant | The reason for the delayed completion of the payment group.<br>**Default**: `'PAPER_TIP'` | getReason(): string | setReason(string reason): void |
| `paymentIds` | `?(string[])` | Optional | - | getPaymentIds(): ?array | setPaymentIds(?array paymentIds): void |

## Example (as JSON)

```json
{
  "reason": "PAPER_TIP"
}
```


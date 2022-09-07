
# Recurring Payment Details

Additional details indicating that this payment is part of a recurring series.

## Structure

`RecurringPaymentDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `seriesPosition` | `string` | Required | The position of this payment in the recurring series, which must be one of the following:<br>INITIAL - The first payment in the series<br>SUBSEQUENT - All payments in the series other than the initial one.<br>**Constraints**: *Maximum Length*: `10` | getSeriesPosition(): string | setSeriesPosition(string seriesPosition): void |
| `previousPaymentId` | `?string` | Optional | The payment_id of the previous payment in the recurring sequence.  Should not be provided<br>when `series_position` is `INITIAL`.<br>**Constraints**: *Maximum Length*: `192` | getPreviousPaymentId(): ?string | setPreviousPaymentId(?string previousPaymentId): void |

## Example (as JSON)

```json
{
  "series_position": "series_position8",
  "previous_payment_id": null
}
```


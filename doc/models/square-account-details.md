
# Square Account Details

Additional details about Square Account payments.

## Structure

`SquareAccountDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentSourceToken` | `?string` | Optional | Unique identifier for the payment source used for this payment.<br>**Constraints**: *Maximum Length*: `255` | getPaymentSourceToken(): ?string | setPaymentSourceToken(?string paymentSourceToken): void |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Information about errors encountered during the request. | getErrors(): ?array | setErrors(?array errors): void |

## Example (as JSON)

```json
{
  "payment_source_token": null,
  "errors": null
}
```


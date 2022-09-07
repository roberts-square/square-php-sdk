
# List Payment Links Response

## Structure

`ListPaymentLinksResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Errors that occurred during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `paymentLinks` | [`?(PaymentLink[])`](../../doc/models/payment-link.md) | Optional | The list of payment links. | getPaymentLinks(): ?array | setPaymentLinks(?array paymentLinks): void |
| `cursor` | `?string` | Optional | When a response is truncated, it includes a cursor that you can use in a subsequent request<br>to retrieve the next set of gift cards. If a cursor is not present, this is the final response.<br>For more information, see [Pagination](https://developer.squareup.com/docs/basics/api101/pagination). | getCursor(): ?string | setCursor(?string cursor): void |

## Example (as JSON)

```json
{
  "errors": null,
  "payment_links": null,
  "cursor": null
}
```


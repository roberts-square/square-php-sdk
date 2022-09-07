
# Search Discount Codes Response

## Structure

`SearchDiscountCodesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `discountCodes` | [`?(DiscountCode[])`](../../doc/models/discount-code.md) | Optional | The `DiscountCode` returned. | getDiscountCodes(): ?array | setDiscountCodes(?array discountCodes): void |
| `cursor` | `?string` | Optional | When a response is truncated, it includes a cursor that you can use in a<br>subsequent request to fetch the next set of events. If it is empty, this is<br>the final response.<br><br>For more information, see [Pagination](https://developer.squareup.com/docs/working-with-apis/pagination). | getCursor(): ?string | setCursor(?string cursor): void |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Any errors that occurred during the request. | getErrors(): ?array | setErrors(?array errors): void |

## Example (as JSON)

```json
{
  "discount_codes": null,
  "cursor": null,
  "errors": null
}
```


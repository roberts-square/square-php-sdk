
# List Terminal Checkouts Response

## Structure

`ListTerminalCheckoutsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Information about errors encountered during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `checkout` | [`?(TerminalCheckout[])`](../../doc/models/terminal-checkout.md) | Optional | The requested list of `TerminalCheckout` objects. | getCheckout(): ?array | setCheckout(?array checkout): void |
| `cursor` | `?string` | Optional | The pagination cursor to be used in a subsequent request. If empty,<br>this is the final response.<br>See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information. | getCursor(): ?string | setCursor(?string cursor): void |

## Example (as JSON)

```json
{
  "errors": null,
  "checkout": null,
  "cursor": null
}
```


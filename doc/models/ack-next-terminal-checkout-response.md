
# Ack Next Terminal Checkout Response

## Structure

`AckNextTerminalCheckoutResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Information about errors encountered during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `checkout` | [`?TerminalCheckout`](../../doc/models/terminal-checkout.md) | Optional | Represents a checkout processed by the Square Terminal. | getCheckout(): ?TerminalCheckout | setCheckout(?TerminalCheckout checkout): void |

## Example (as JSON)

```json
{
  "errors": null,
  "checkout": null
}
```


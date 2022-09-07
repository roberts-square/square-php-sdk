
# Subscription Action Info

Provides information about the subscription action.

## Structure

`SubscriptionActionInfo`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `detail` | `?string` | Optional | A human-readable explanation for the action. | getDetail(): ?string | setDetail(?string detail): void |
| `code` | [`?string (SubscriptionActionInfoCode)`](../../doc/models/subscription-action-info-code.md) | Optional | Supported info codes of a subscription action. | getCode(): ?string | setCode(?string code): void |

## Example (as JSON)

```json
{
  "detail": null,
  "code": null
}
```


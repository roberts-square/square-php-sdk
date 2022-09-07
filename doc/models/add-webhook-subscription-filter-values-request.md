
# Add Webhook Subscription Filter Values Request

Adds values to a webhook subscription filter.

## Structure

`AddWebhookSubscriptionFilterValuesRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filterValues` | `string[]` | Required | The list of filter values to be added. | getFilterValues(): array | setFilterValues(array filterValues): void |

## Example (as JSON)

```json
{
  "filter_values": [
    "1ZYMKZY1YFGBW",
    "6G31J2A44JQ0P"
  ]
}
```


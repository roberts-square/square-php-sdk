
# Remove Webhook Subscription Filter Values Request

Removes values from a webhook subscription filter.

## Structure

`RemoveWebhookSubscriptionFilterValuesRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filterValues` | `string[]` | Required | The list of filter values to be removed. | getFilterValues(): array | setFilterValues(array filterValues): void |

## Example (as JSON)

```json
{
  "filter_values": [
    "6G31J2A44JQ0P"
  ]
}
```


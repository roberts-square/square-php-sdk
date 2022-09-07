
# List Webhook Subscription Filter Values Response

Defines the fields that are included in the response body of
a request to the [ListWebhookSubscriptionFilterValues](../../doc/apis/webhook-subscription-filters.md#list-webhook-subscription-filter-values) endpoint.

Note: if there are errors processing the request, the subscription filter values field will not be
present.

## Structure

`ListWebhookSubscriptionFilterValuesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Information on errors encountered during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `filterValues` | `?(string[])` | Optional | The requested subscription filter values. | getFilterValues(): ?array | setFilterValues(?array filterValues): void |
| `cursor` | `?string` | Optional | The pagination cursor to be used in a subsequent request. If empty,<br>this is the final response.<br><br>See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information. | getCursor(): ?string | setCursor(?string cursor): void |

## Example (as JSON)

```json
{
  "filter_values": [
    "1ZYMKZY1YFGBW",
    "6G31J2A44JQ0P"
  ]
}
```


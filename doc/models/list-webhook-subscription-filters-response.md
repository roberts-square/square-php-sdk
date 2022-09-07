
# List Webhook Subscription Filters Response

Defines the fields that are included in the response body of
a request to the [ListWebhookSubscriptionFilters](../../doc/apis/webhook-subscription-filters.md#list-webhook-subscription-filters) endpoint.

Note: if there are errors processing the request, the subscription filters field will not be
present.

## Structure

`ListWebhookSubscriptionFiltersResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Information on errors encountered during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `filters` | [`?(WebhookSubscriptionFilter[])`](../../doc/models/webhook-subscription-filter.md) | Optional | The requested list of `SubscriptionFilter`s. | getFilters(): ?array | setFilters(?array filters): void |
| `cursor` | `?string` | Optional | The pagination cursor to be used in a subsequent request. If empty,<br>this is the final response.<br><br>See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information. | getCursor(): ?string | setCursor(?string cursor): void |

## Example (as JSON)

```json
{
  "filters": [
    {
      "auth_type": "OAUTH",
      "created_at": "2022-01-11 19:24:59 +0000 UTC",
      "filter_action": "ALLOW",
      "filter_type": "MERCHANT_ID",
      "id": "wbhk-fltr_a0e5cec9adf74b2bacd81a4a088d3056",
      "updated_at": "2022-01-11 19:24:59 +0000 UTC"
    }
  ]
}
```


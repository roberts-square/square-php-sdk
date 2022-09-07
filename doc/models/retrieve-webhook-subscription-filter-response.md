
# Retrieve Webhook Subscription Filter Response

Defines the fields that are included in the response body of
a request to the [RetrieveWebhookSubscriptionFilter](../../doc/apis/webhook-subscription-filters.md#retrieve-webhook-subscription-filter) endpoint.

Note: if there are errors processing the request, the subscription filter field will not be
present.

## Structure

`RetrieveWebhookSubscriptionFilterResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Information on errors encountered during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `filter` | [`?WebhookSubscriptionFilter`](../../doc/models/webhook-subscription-filter.md) | Optional | Represents the details of a webhook subscription filter. | getFilter(): ?WebhookSubscriptionFilter | setFilter(?WebhookSubscriptionFilter filter): void |

## Example (as JSON)

```json
{
  "filter": {
    "auth_type": "OAUTH",
    "created_at": "2022-01-11 19:24:59 +0000 UTC",
    "filter_action": "ALLOW",
    "filter_type": "MERCHANT_ID",
    "id": "wbhk-fltr_a0e5cec9adf74b2bacd81a4a088d3056",
    "updated_at": "2022-01-11 19:24:59 +0000 UTC"
  }
}
```


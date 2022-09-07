
# Update Webhook Subscription Filter Request

Updates a webhook subscription filter.

## Structure

`UpdateWebhookSubscriptionFilterRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filter` | [`WebhookSubscriptionFilter`](../../doc/models/webhook-subscription-filter.md) | Required | Represents the details of a webhook subscription filter. | getFilter(): WebhookSubscriptionFilter | setFilter(WebhookSubscriptionFilter filter): void |

## Example (as JSON)

```json
{
  "filter": {
    "filter_action": "DISALLOW"
  }
}
```


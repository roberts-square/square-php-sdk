
# Create Webhook Subscription Filter Request

Creates a webhook subscription filter.

## Structure

`CreateWebhookSubscriptionFilterRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `idempotencyKey` | `string` | Required | A unique string that identifies the [CreateWebhookSubscriptionFilter](../../doc/apis/webhook-subscription-filters.md#create-webhook-subscription-filter) request.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `45` | getIdempotencyKey(): string | setIdempotencyKey(string idempotencyKey): void |
| `filter` | [`WebhookSubscriptionFilter`](../../doc/models/webhook-subscription-filter.md) | Required | Represents the details of a webhook subscription filter. | getFilter(): WebhookSubscriptionFilter | setFilter(WebhookSubscriptionFilter filter): void |

## Example (as JSON)

```json
{
  "filter": {
    "auth_type": "OAUTH",
    "filter_action": "ALLOW",
    "filter_type": "MERCHANT_ID"
  },
  "idempotency_key": "5574152b-3a17-47ad-bd75-3ebd3ea87f33"
}
```


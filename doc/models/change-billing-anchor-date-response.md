
# Change Billing Anchor Date Response

Defines output parameters in a request to the
[ChangeBillingAnchorDate](../../doc/apis/subscriptions.md#change-billing-anchor-date) endpoint.

## Structure

`ChangeBillingAnchorDateResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Errors encountered during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `subscription` | [`?Subscription`](../../doc/models/subscription.md) | Optional | Represents a subscription to a subscription plan by a subscriber.<br><br>For an overview of the `Subscription` type, see<br>[Subscription object](https://developer.squareup.com/docs/subscriptions-api/overview#subscription-object-overview). | getSubscription(): ?Subscription | setSubscription(?Subscription subscription): void |
| `actions` | [`?(SubscriptionAction[])`](../../doc/models/subscription-action.md) | Optional | A list of a single billing anchor date change for the subscription. | getActions(): ?array | setActions(?array actions): void |

## Example (as JSON)

```json
{
  "errors": null,
  "subscription": null,
  "actions": null
}
```


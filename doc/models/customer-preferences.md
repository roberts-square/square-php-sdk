
# Customer Preferences

Represents communication preferences for the customer profile.

## Structure

`CustomerPreferences`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `emailUnsubscribed` | `?bool` | Optional | Indicates whether the customer has unsubscribed from marketing campaign emails. A value of `true` means that the customer chose to opt out of email marketing from the current Square seller or from all Square sellers. This value is read-only from the Customers API. | getEmailUnsubscribed(): ?bool | setEmailUnsubscribed(?bool emailUnsubscribed): void |
| `marketingSubscriptionStatus` | [`?string (CustomerPreferencesMarketingSubscriptionStatus)`](../../doc/models/customer-preferences-marketing-subscription-status.md) | Optional | Indicates the customer preferences for receiving marketing emails. | getMarketingSubscriptionStatus(): ?string | setMarketingSubscriptionStatus(?string marketingSubscriptionStatus): void |

## Example (as JSON)

```json
{
  "email_unsubscribed": null,
  "marketing_subscription_status": null
}
```


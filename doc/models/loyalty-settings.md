
# Loyalty Settings

## Structure

`LoyaltySettings`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `showLoyaltyScreen` | `?bool` | Optional | Override device settings for display of the loyalty screen.<br>Defaults to false. | getShowLoyaltyScreen(): ?bool | setShowLoyaltyScreen(?bool showLoyaltyScreen): void |
| `showNonQualifyingLoyaltyScreen` | `?bool` | Optional | Override device settings for display of the non-qualifying loyalty screen.<br>Defaults to false. | getShowNonQualifyingLoyaltyScreen(): ?bool | setShowNonQualifyingLoyaltyScreen(?bool showNonQualifyingLoyaltyScreen): void |
| `loyaltyScreenMaxDisplayDuration` | `?string` | Optional | The timeout after which the loyalty screen should exit due to inactivity, expressed as<br>an RFC 3339 duration.<br>Default: 60 seconds from the beginning of the display of the loyalty screen.<br>Maximum: 90 seconds. | getLoyaltyScreenMaxDisplayDuration(): ?string | setLoyaltyScreenMaxDisplayDuration(?string loyaltyScreenMaxDisplayDuration): void |
| `showCardLinkedRewardRedemptionScreen` | `?bool` | Optional | Override device settings for display of card linked reward redemption screen.<br>Defaults to false. | getShowCardLinkedRewardRedemptionScreen(): ?bool | setShowCardLinkedRewardRedemptionScreen(?bool showCardLinkedRewardRedemptionScreen): void |

## Example (as JSON)

```json
{
  "show_loyalty_screen": null,
  "show_non_qualifying_loyalty_screen": null,
  "loyalty_screen_max_display_duration": null,
  "show_card_linked_reward_redemption_screen": null
}
```



# Terminal Device Checkout Options

## Structure

`TerminalDeviceCheckoutOptions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `skipReceiptScreen` | `?bool` | Optional | Instructs the device to skip the receipt screen. Defaults to false. | getSkipReceiptScreen(): ?bool | setSkipReceiptScreen(?bool skipReceiptScreen): void |
| `tipSettings` | [`?TipSettings`](../../doc/models/tip-settings.md) | Optional | - | getTipSettings(): ?TipSettings | setTipSettings(?TipSettings tipSettings): void |
| `loyaltySettings` | [`?LoyaltySettings`](../../doc/models/loyalty-settings.md) | Optional | - | getLoyaltySettings(): ?LoyaltySettings | setLoyaltySettings(?LoyaltySettings loyaltySettings): void |
| `showItemizedCart` | `?bool` | Optional | Show the itemization screen prior to taking a payment. This field is only meaningful when the<br>checkout includes an order ID. Defaults to true. | getShowItemizedCart(): ?bool | setShowItemizedCart(?bool showItemizedCart): void |

## Example (as JSON)

```json
{
  "skip_receipt_screen": null,
  "tip_settings": null,
  "loyalty_settings": null,
  "show_itemized_cart": null
}
```


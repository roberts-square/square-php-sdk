
# Tender Digital Wallet Details

Represents the details of a tender with `type` `WALLET`.

## Structure

`TenderDigitalWalletDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | [`?string (TenderDigitalWalletDetailsStatus)`](../../doc/models/tender-digital-wallet-details-status.md) | Optional | Indicates the digital wallet payment's current status. | getStatus(): ?string | setStatus(?string status): void |
| `digitalWalletBrand` | [`?string (TenderDigitalWalletDetailsBrand)`](../../doc/models/tender-digital-wallet-details-brand.md) | Optional | - | getDigitalWalletBrand(): ?string | setDigitalWalletBrand(?string digitalWalletBrand): void |
| `buyerFullName` | `?string` | Optional | The name of the digital wallet user.<br>**Constraints**: *Maximum Length*: `96` | getBuyerFullName(): ?string | setBuyerFullName(?string buyerFullName): void |

## Example (as JSON)

```json
{
  "status": null,
  "digital_wallet_brand": null,
  "buyer_full_name": null
}
```



# App Processing Fee

Represents an application processing fee.

## Structure

`AppProcessingFee`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `priceSelector` | `?(string[])` | Optional | The price selector ID of the payment fee being applied. | getPriceSelector(): ?array | setPriceSelector(?array priceSelector): void |
| `type` | `?string` | Optional | The type of payment fee being applied (for example, `THIRD_PARTY_PAYMENT_FEE`<br>or `THIRD_PARTY_REFUND_FEE`). | getType(): ?string | setType(?string type): void |
| `amountMoney` | [`?Money`](../../doc/models/money.md) | Optional | Represents an amount of money. `Money` fields can be signed or unsigned.<br>Fields that do not explicitly define whether they are signed or unsigned are<br>considered unsigned and can only hold positive amounts. For signed fields, the<br>sign of the value indicates the purpose of the money transfer. See<br>[Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-monetary-amounts)<br>for more information. | getAmountMoney(): ?Money | setAmountMoney(?Money amountMoney): void |
| `partyAccountId` | `?string` | Optional | The platform account token for this payment fee.<br>For a capture, this is the recipient of funds. For a refund, this is the source of funds. | getPartyAccountId(): ?string | setPartyAccountId(?string partyAccountId): void |
| `effectiveAt` | `?string` | Optional | The timestamp of when the fee takes effect, in RFC 3339 format. | getEffectiveAt(): ?string | setEffectiveAt(?string effectiveAt): void |

## Example (as JSON)

```json
{
  "price_selector": null,
  "type": null,
  "amount_money": null,
  "party_account_id": null,
  "effective_at": null
}
```


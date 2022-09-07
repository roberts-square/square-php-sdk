
# List Gift Card Offers Response

A response containing digital gift card offerings in a given ZIP code.

## Structure

`ListGiftCardOffersResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Any errors that occurred during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `giftCardOffers` | [`?(GiftCardOffer[])`](../../doc/models/gift-card-offer.md) | Optional | The digital gift card offerings that are present in the ZIP code provided in the request. The<br>maximum number of results is 10. If no sellers with digital gift card offerings are present in the<br>ZIP code provided, this returns an empty list. | getGiftCardOffers(): ?array | setGiftCardOffers(?array giftCardOffers): void |

## Example (as JSON)

```json
{
  "errors": null,
  "gift_card_offers": null
}
```


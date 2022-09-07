
# Gift Card Offer

The `GiftCardOffer` resource that is an abstraction of the seller offering digital gift cards.

## Structure

`GiftCardOffer`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | The unique ID for the offer. | getId(): ?string | setId(?string id): void |
| `name` | `?string` | Optional | The name of the offer. | getName(): ?string | setName(?string name): void |
| `image` | `?string` | Optional | The image URL for the digital gift card. | getImage(): ?string | setImage(?string image): void |
| `url` | `?string` | Optional | The URL of the gift card order page. The URL returned is different for each application.<br>It is appended with additional data to identify which third-party developer application<br>led a user here. | getUrl(): ?string | setUrl(?string url): void |

## Example (as JSON)

```json
{
  "id": null,
  "name": null,
  "image": null,
  "url": null
}
```


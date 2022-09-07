
# List Gift Card Offers Request

A request to retrieve digital gift card offers. By ZIP codes for now.

## Structure

`ListGiftCardOffersRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `zipcode` | `string` | Required | The ZIP code in which to look for sellers offering digital gift cards.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `5` | getZipcode(): string | setZipcode(string zipcode): void |

## Example (as JSON)

```json
{
  "zipcode": "zipcode6"
}
```


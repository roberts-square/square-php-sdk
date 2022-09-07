
# Order Discount Code

Represents a Discount Code that may be applied to an Order if the necessary
criteria are met. Discount Codes are created through the Discount Codes API.

## Structure

`OrderDiscountCode`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | The identifier of the Discount Code.<br>**Constraints**: *Minimum Length*: `1` | getId(): string | setId(string id): void |
| `quantity` | `?int` | Optional | The number of instances of the Discount Code. If unset, the quantity defaults to `1`. | getQuantity(): ?int | setQuantity(?int quantity): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "quantity": null
}
```



# Order Void Items

Stores details about the line items that were voided in this operation.

## Structure

`OrderVoidItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | A unique ID that identifies the void only within this order.<br>**Constraints**: *Maximum Length*: `60` | getUid(): ?string | setUid(?string uid): void |
| `lineItemUid` | `?string` | Optional | The ID that identifies the line item entry within this order that the void is associated<br>with. This entry is not guaranteed to exist, because line items with a quantity of 0 can be deleted. | getLineItemUid(): ?string | setLineItemUid(?string lineItemUid): void |
| `catalogObjectId` | `?string` | Optional | The catalog ID for the associated line item.<br>**Constraints**: *Maximum Length*: `192` | getCatalogObjectId(): ?string | setCatalogObjectId(?string catalogObjectId): void |
| `catalogVersion` | `?int` | Optional | The version of the catalog object that this line item references. | getCatalogVersion(): ?int | setCatalogVersion(?int catalogVersion): void |
| `basePriceMoney` | [`?Money`](../../doc/models/money.md) | Optional | Represents an amount of money. `Money` fields can be signed or unsigned.<br>Fields that do not explicitly define whether they are signed or unsigned are<br>considered unsigned and can only hold positive amounts. For signed fields, the<br>sign of the value indicates the purpose of the money transfer. See<br>[Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-monetary-amounts)<br>for more information. | getBasePriceMoney(): ?Money | setBasePriceMoney(?Money basePriceMoney): void |
| `quantity` | `string` | Required | The quantity voided from the purchase, formatted as a decimal number.<br>For example, `"3"`.<br><br>Voids that provide a `quantity_unit` can have non-integer quantities.<br>For example, `"1.70000"`.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `12` | getQuantity(): string | setQuantity(string quantity): void |
| `quantityUnit` | [`?OrderQuantityUnit`](../../doc/models/order-quantity-unit.md) | Optional | Contains the measurement unit for a quantity and a precision that<br>specifies the number of digits after the decimal point for decimal quantities. | getQuantityUnit(): ?OrderQuantityUnit | setQuantityUnit(?OrderQuantityUnit quantityUnit): void |
| `lineItemName` | `?string` | Optional | The line item name that this void entry represents. | getLineItemName(): ?string | setLineItemName(?string lineItemName): void |

## Example (as JSON)

```json
{
  "uid": null,
  "line_item_uid": null,
  "catalog_object_id": null,
  "catalog_version": null,
  "base_price_money": null,
  "quantity": "quantity6",
  "quantity_unit": null,
  "line_item_name": null
}
```


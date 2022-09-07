
# Catalog Attribute Value

An object defining the attribute value affected by a `CatalogUpdate` event.

## Structure

`CatalogAttributeValue`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `stringValue` | `?string` | Optional | Populated if the type of the `CatalogAttribute` type is `STRING`. | getStringValue(): ?string | setStringValue(?string stringValue): void |
| `intValue` | `?int` | Optional | Populated if the type of the `CatalogAttribute` type is `INT`. | getIntValue(): ?int | setIntValue(?int intValue): void |
| `boolValue` | `?bool` | Optional | Populated if the type of the `CatalogAttribute` type is `BOOL`. | getBoolValue(): ?bool | setBoolValue(?bool boolValue): void |
| `moneyValue` | [`?Money`](../../doc/models/money.md) | Optional | Represents an amount of money. `Money` fields can be signed or unsigned.<br>Fields that do not explicitly define whether they are signed or unsigned are<br>considered unsigned and can only hold positive amounts. For signed fields, the<br>sign of the value indicates the purpose of the money transfer. See<br>[Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-monetary-amounts)<br>for more information. | getMoneyValue(): ?Money | setMoneyValue(?Money moneyValue): void |

## Example (as JSON)

```json
{}
```


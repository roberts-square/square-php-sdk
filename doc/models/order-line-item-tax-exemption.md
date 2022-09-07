
# Order Line Item Tax Exemption

Represents a tax exemption that applies to one or more line item in the order.

## Structure

`OrderLineItemTaxExemption`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | A unique ID that identifies the tax exemption only within thisorder.<br>**Constraints**: *Maximum Length*: `60` | getUid(): ?string | setUid(?string uid): void |
| `catalogObjectId` | `?string` | Optional | The catalog object ID referencing  [CatalogTaxExemption](../../doc/models/catalog-tax-exemption.md).<br>**Constraints**: *Maximum Length*: `192` | getCatalogObjectId(): ?string | setCatalogObjectId(?string catalogObjectId): void |
| `catalogVersion` | `?int` | Optional | The version of the catalog object that this tax exemption references. | getCatalogVersion(): ?int | setCatalogVersion(?int catalogVersion): void |
| `name` | `?string` | Optional | The tax exemption's name.<br>**Constraints**: *Maximum Length*: `255` | getName(): ?string | setName(?string name): void |

## Example (as JSON)

```json
{
  "uid": null,
  "catalog_object_id": null,
  "catalog_version": null,
  "name": null
}
```


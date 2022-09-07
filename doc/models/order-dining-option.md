
# Order Dining Option

Represents a dining option that can be applied either to the order top level or to
individual line items. Dining options are created through the Catalog API.

## Structure

`OrderDiningOption`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | The name of the dining option.<br>**Constraints**: *Maximum Length*: `255` | getName(): ?string | setName(?string name): void |
| `catalogObjectId` | `?string` | Optional | The catalog object ID referencing the dining option [CatalogObject](../../doc/models/catalog-object.md).<br>**Constraints**: *Maximum Length*: `192` | getCatalogObjectId(): ?string | setCatalogObjectId(?string catalogObjectId): void |
| `catalogVersion` | `?int` | Optional | The version of the catalog object that this dining option references. | getCatalogVersion(): ?int | setCatalogVersion(?int catalogVersion): void |

## Example (as JSON)

```json
{
  "catalog_object_id": null,
  "catalog_version": null
}
```


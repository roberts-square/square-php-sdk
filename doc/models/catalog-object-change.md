
# Catalog Object Change

## Structure

`CatalogObjectChange`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `objectId` | `?string` | Optional | The object ID of any type of CatalogObjects for<br>which history should be retrieved. | getObjectId(): ?string | setObjectId(?string objectId): void |
| `latestName` | `?string` | Optional | Current name of the object in the merchant's catalog (not necessarily the name at the time of the change).<br>If the object is deleted, this is the name of the object at time of deletion. | getLatestName(): ?string | setLatestName(?string latestName): void |
| `objectType` | [`?string (CatalogObjectType)`](../../doc/models/catalog-object-type.md) | Optional | Possible types of CatalogObjects returned from the catalog, each<br>containing type-specific properties in the `*_data` field corresponding to the specfied object type. | getObjectType(): ?string | setObjectType(?string objectType): void |
| `parentId` | `?string` | Optional | The object ID of the parent CatalogObject of the affected object. For CatalogItemVariations,<br>this is the ID of the CatalogItem. For CatalogModifiers, this is the ID of the CatalogModifierList. | getParentId(): ?string | setParentId(?string parentId): void |
| `parentLatestName` | `?string` | Optional | The latest name of the parent of the affected object. or CatalogItemVariations, this is the name of the CatalogItem.<br>For CatalogModifiers, this is the ID of the CatalogModifierList. | getParentLatestName(): ?string | setParentLatestName(?string parentLatestName): void |
| `createdByUpdate` | `?bool` | Optional | Boolean describing whether or not the object was created by this update. | getCreatedByUpdate(): ?bool | setCreatedByUpdate(?bool createdByUpdate): void |
| `deletedByUpdate` | `?bool` | Optional | Boolean describing whether or not the object was deleted by this update. | getDeletedByUpdate(): ?bool | setDeletedByUpdate(?bool deletedByUpdate): void |
| `attributeChanges` | [`?(CatalogAttributeChange[])`](../../doc/models/catalog-attribute-change.md) | Optional | The set of [CatalogAttributeChange](../../doc/models/catalog-attribute-change.md)s included in this Catalog Object Change. | getAttributeChanges(): ?array | setAttributeChanges(?array attributeChanges): void |

## Example (as JSON)

```json
{}
```



# Catalog Nested Change

Details of a change to a nested field of a CatalogObject.

## Structure

`CatalogNestedChange`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | The unique identifier for an entry in the list of CatalogNestedChanges.<br>It can be either `location_id`, `tax_id`, `modifier_id` or `modifier_list_id`. | getId(): ?string | setId(?string id): void |
| `createdByUpdate` | `?bool` | Optional | Boolean describing whether or not the nested object was created by this update. | getCreatedByUpdate(): ?bool | setCreatedByUpdate(?bool createdByUpdate): void |
| `deletedByUpdate` | `?bool` | Optional | Boolean describing whether or not the nested object was deleted by this update. | getDeletedByUpdate(): ?bool | setDeletedByUpdate(?bool deletedByUpdate): void |
| `attributeChanges` | [`?(CatalogAttributeChange[])`](../../doc/models/catalog-attribute-change.md) | Optional | The set of [CatalogAttributeChange](../../doc/models/catalog-attribute-change.md)s included in the nested object. | getAttributeChanges(): ?array | setAttributeChanges(?array attributeChanges): void |
| `latestName` | `?string` | Optional | Current name of the CatalogObject that is related to the nested change.<br>If the object is deleted, this is the name at the time of deletion.<br>For example, if this nested change is a tax ID on an item, the name is the latest name of the tax. | getLatestName(): ?string | setLatestName(?string latestName): void |

## Example (as JSON)

```json
{
  "id": null,
  "created_by_update": null,
  "deleted_by_update": null,
  "attribute_changes": null,
  "latest_name": null
}
```


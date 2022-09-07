
# Order Void Void Reason

## Structure

`OrderVoidVoidReason`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `catalogObjectId` | `string` | Required | The ID for the void reason's catalog record.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `192` | getCatalogObjectId(): string | setCatalogObjectId(string catalogObjectId): void |
| `catalogVersion` | `?int` | Optional | The version of the catalog object that this void reason references. | getCatalogVersion(): ?int | setCatalogVersion(?int catalogVersion): void |
| `reasonDetail` | `string` | Required | The human-readable text indicating the reason why this void operation was performed.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255` | getReasonDetail(): string | setReasonDetail(string reasonDetail): void |

## Example (as JSON)

```json
{
  "catalog_object_id": "catalog_object_id6",
  "catalog_version": null,
  "reason_detail": "reason_detail2"
}
```


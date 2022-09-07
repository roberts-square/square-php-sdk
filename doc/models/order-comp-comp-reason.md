
# Order Comp Comp Reason

## Structure

`OrderCompCompReason`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `catalogObjectId` | `string` | Required | The catalog object ID referencing the catalog discount representing this comp in<br>the Merchant Catalog service.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `192` | getCatalogObjectId(): string | setCatalogObjectId(string catalogObjectId): void |
| `catalogVersion` | `?int` | Optional | The catalog version of the catalog discount representing this comp in<br>the Merchant Catalog service. | getCatalogVersion(): ?int | setCatalogVersion(?int catalogVersion): void |
| `reasonDetail` | `string` | Required | The human-readable text indicating the reason why this comp operation was performed.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255` | getReasonDetail(): string | setReasonDetail(string reasonDetail): void |

## Example (as JSON)

```json
{
  "catalog_object_id": "catalog_object_id6",
  "catalog_version": null,
  "reason_detail": "reason_detail2"
}
```


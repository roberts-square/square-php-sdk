
# Catalog Update

Details of a historical update to a Catalog Object.

## Structure

`CatalogUpdate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `occurredAt` | `?string` | Optional | [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates), in RFC 3339<br>format, e.g., "2016-09-04T23:59:33.123Z". The timestamp at which the update occurred. | getOccurredAt(): ?string | setOccurredAt(?string occurredAt): void |
| `source` | [`?SourceApplication`](../../doc/models/source-application.md) | Optional | Represents information about the application used to generate a change. | getSource(): ?SourceApplication | setSource(?SourceApplication source): void |
| `locationId` | `?string` | Optional | The ID of the location the update applies to. | getLocationId(): ?string | setLocationId(?string locationId): void |
| `fromSquareSupport` | `?bool` | Optional | Boolean to be set to true if a change was performed by Square Support on behalf of the merchant. | getFromSquareSupport(): ?bool | setFromSquareSupport(?bool fromSquareSupport): void |
| `employeeId` | `?string` | Optional | The Square ID of the [Employee](../../doc/models/employee.md) responsible for the<br>update. | getEmployeeId(): ?string | setEmployeeId(?string employeeId): void |
| `objectChangesCursor` | `?string` | Optional | Cursor populated if `object_changes` array is truncated due to more than 100 objects being<br>affected by the update. | getObjectChangesCursor(): ?string | setObjectChangesCursor(?string objectChangesCursor): void |
| `objectChanges` | [`?(CatalogObjectChange[])`](../../doc/models/catalog-object-change.md) | Optional | The set of [CatalogObjectChange](../../doc/models/catalog-object-change.md)s | getObjectChanges(): ?array | setObjectChanges(?array objectChanges): void |
| `id` | `?string` | Optional | An identifier to reference this update. | getId(): ?string | setId(?string id): void |

## Example (as JSON)

```json
{}
```


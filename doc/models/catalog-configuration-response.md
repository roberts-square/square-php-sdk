
# Catalog Configuration Response

## Structure

`CatalogConfigurationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Any errors that occurred during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `catalogConfiguration` | [`?CatalogConfiguration`](../../doc/models/catalog-configuration.md) | Optional | - | getCatalogConfiguration(): ?CatalogConfiguration | setCatalogConfiguration(?CatalogConfiguration catalogConfiguration): void |

## Example (as JSON)

```json
{
  "catalog_configuration": {
    "default_inventory_tracking": false
  }
}
```


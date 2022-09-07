
# Tender Payment Source

Stores additional information on what 3rd party app recorded the Tender.

## Structure

`TenderPaymentSource`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `applicationId` | `?string` | Optional | A global unique id for the 3rd party app which recorded this Tender. | getApplicationId(): ?string | setApplicationId(?string applicationId): void |
| `applicationName` | `?string` | Optional | A human readable name for the 3rd party app which recorded this Tender. | getApplicationName(): ?string | setApplicationName(?string applicationName): void |

## Example (as JSON)

```json
{
  "application_id": null,
  "application_name": null
}
```



# Phase

Represents a phase, which can override subscription phases as defined by plan_id

## Structure

`Phase`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | id of subscription phase stored in catalog | getUid(): ?string | setUid(?string uid): void |
| `ordinal` | `?int` | Optional | index of phase in total subscription plan | getOrdinal(): ?int | setOrdinal(?int ordinal): void |
| `orderTemplateId` | `?string` | Optional | id of order to be used in billing | getOrderTemplateId(): ?string | setOrderTemplateId(?string orderTemplateId): void |
| `planPhaseUid` | `?string` | Optional | the uid from the catalog subscription plan phase | getPlanPhaseUid(): ?string | setPlanPhaseUid(?string planPhaseUid): void |

## Example (as JSON)

```json
{
  "uid": null,
  "ordinal": null,
  "order_template_id": null,
  "plan_phase_uid": null
}
```



# Special Business Hours Period

Represents a period of time during which a business location is open.

## Structure

`SpecialBusinessHoursPeriod`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startDate` | `?string` | Optional | The start date of a special business hours period, specified in ISO-8601 format: YYYY-MM-DD | getStartDate(): ?string | setStartDate(?string startDate): void |
| `endDate` | `?string` | Optional | The start date of a special business hours period, specified in ISO-8601 format: YYYY-MM-DD | getEndDate(): ?string | setEndDate(?string endDate): void |
| `timePeriods` | [`?(TimePeriod[])`](../../doc/models/time-period.md) | Optional | The periods of time during which the location is open. There may be at most 10 per SpecialBusinessHoursPeriod | getTimePeriods(): ?array | setTimePeriods(?array timePeriods): void |
| `reason` | `?string` | Optional | An explanation for the special hours (e.g. holiday name)<br>**Constraints**: *Maximum Length*: `25` | getReason(): ?string | setReason(?string reason): void |
| `isClosed` | `?bool` | Optional | Whether the location is closed or not.<br>Cannot be true if time_periods is populated | getIsClosed(): ?bool | setIsClosed(?bool isClosed): void |

## Example (as JSON)

```json
{
  "start_date": null,
  "end_date": null,
  "time_periods": null,
  "reason": null,
  "is_closed": null
}
```


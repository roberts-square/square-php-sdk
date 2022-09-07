
# Time Period

## Structure

`TimePeriod`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startLocalTime` | `?string` | Optional | The start time of a special business hours time period, specified in local time using partial-time<br>RFC 3339 format. For example, `8:30:00` for a period starting at 8:30 in the morning.<br>Note that the seconds value is always :00, but it is appended for conformance to the RFC. | getStartLocalTime(): ?string | setStartLocalTime(?string startLocalTime): void |
| `endLocalTime` | `?string` | Optional | The end time of a special business hours time period, specified in local time using partial-time<br>RFC 3339 format. For example, `8:30:00` for a period starting at 8:30 in the morning.<br>Note that the seconds value is always :00, but it is appended for conformance to the RFC. | getEndLocalTime(): ?string | setEndLocalTime(?string endLocalTime): void |

## Example (as JSON)

```json
{
  "start_local_time": null,
  "end_local_time": null
}
```


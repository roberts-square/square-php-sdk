
# List Terminal Checkouts Request

## Structure

`ListTerminalCheckoutsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceId` | `?string` | Optional | The `TerminalCheckout` objects associated with a specific device. If no device is specified, then all<br>`TerminalCheckout` objects for the signed-in account are displayed. | getDeviceId(): ?string | setDeviceId(?string deviceId): void |
| `cursor` | `?string` | Optional | A pagination cursor returned by a previous call to this endpoint.<br>Provide this cursor to retrieve the next set of results for the original query.<br>See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information. | getCursor(): ?string | setCursor(?string cursor): void |
| `beginTime` | `?string` | Optional | The RFC 3339 timestamp for the beginning of the reporting period, which is inclusive.<br>Default value: The current time minus one day. | getBeginTime(): ?string | setBeginTime(?string beginTime): void |
| `endTime` | `?string` | Optional | The RFC 3339 timestamp for the end of the reporting period, which is inclusive.<br>Default value: The current time. | getEndTime(): ?string | setEndTime(?string endTime): void |
| `sortOrder` | `?string` | Optional | The order in which results are listed.<br><br>- `ASC` - Oldest to newest.<br>- `DESC` - Newest to oldest (default). | getSortOrder(): ?string | setSortOrder(?string sortOrder): void |
| `status` | `?string` | Optional | Filtered results with the desired status of the `TerminalCheckout`. | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "device_id": null,
  "cursor": null,
  "begin_time": null,
  "end_time": null,
  "sort_order": null,
  "status": null
}
```



# Order Void

Represents a void on an order.

## Structure

`OrderVoid`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | A unique ID of the void within the order or line item.<br>**Constraints**: *Maximum Length*: `60` | getUid(): ?string | setUid(?string uid): void |
| `scope` | [`?string (OrderVoidScope)`](../../doc/models/order-void-scope.md) | Optional | - | getScope(): ?string | setScope(?string scope): void |
| `reason` | [`?OrderVoidVoidReason`](../../doc/models/order-void-void-reason.md) | Optional | - | getReason(): ?OrderVoidVoidReason | setReason(?OrderVoidVoidReason reason): void |
| `employeeId` | `?string` | Optional | The ID identifying the employee who executed this void operation.<br>**Constraints**: *Maximum Length*: `192` | getEmployeeId(): ?string | setEmployeeId(?string employeeId): void |
| `deviceCredentialId` | `?string` | Optional | The ID identifying the device through which this void operation was performed. | getDeviceCredentialId(): ?string | setDeviceCredentialId(?string deviceCredentialId): void |
| `createdAt` | `?string` | Optional | The timestamp for when the void operation was executed.<br>The timestamp must be in RFC 3339 format (for example, "2016-09-04T23:59:33.123Z"). | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `items` | [`?(OrderVoidItems[])`](../../doc/models/order-void-items.md) | Optional | When the void scope is LINE ITEM, this is used to specify the particular line items<br>that should be voided and in what quantity. | getItems(): ?array | setItems(?array items): void |

## Example (as JSON)

```json
{
  "uid": null,
  "scope": null,
  "reason": null,
  "employee_id": null,
  "device_credential_id": null,
  "items": null
}
```


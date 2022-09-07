
# Order Comp

Represents a comp on an order.

## Structure

`OrderComp`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | A unique ID of the `Comp` within the order or line item.<br>**Constraints**: *Maximum Length*: `60` | getUid(): ?string | setUid(?string uid): void |
| `discountUid` | `?string` | Optional | The `uid` of the 100% discount associated with this comp operation. If this uid is a member<br>a line item's applied_discounts then this comp applies to the line item. | getDiscountUid(): ?string | setDiscountUid(?string discountUid): void |
| `reason` | [`?OrderCompCompReason`](../../doc/models/order-comp-comp-reason.md) | Optional | - | getReason(): ?OrderCompCompReason | setReason(?OrderCompCompReason reason): void |
| `employeeId` | `?string` | Optional | The ID identifying the employee who executed this comp operation.<br>**Constraints**: *Maximum Length*: `192` | getEmployeeId(): ?string | setEmployeeId(?string employeeId): void |
| `deviceCredentialId` | `?string` | Optional | The ID identifying the device through which this comp operation was performed. | getDeviceCredentialId(): ?string | setDeviceCredentialId(?string deviceCredentialId): void |
| `createdAt` | `?string` | Optional | The timestamp for when the comp operation was executed.<br>The timestamp must be in RFC 3339 format (for example, "2016-09-04T23:59:33.123Z"). | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |

## Example (as JSON)

```json
{
  "uid": null,
  "discount_uid": null,
  "reason": null,
  "employee_id": null,
  "device_credential_id": null
}
```


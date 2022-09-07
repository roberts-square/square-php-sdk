
# Discount Code Filter

Filter parameters used to search for discount codes.

## Structure

`DiscountCodeFilter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?string` | Optional | The `code` associated with a `DiscountCode` resource.<br>You must provide either this field or the `customer_id` field.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]+$` | getCode(): ?string | setCode(?string code): void |
| `excludeInvalid` | `?bool` | Optional | If true, it excludes `DiscountCode` resources with an `expires_at` in the past or a `valid_from`<br>in the future from the results. | getExcludeInvalid(): ?bool | setExcludeInvalid(?bool excludeInvalid): void |
| `excludeFullyRedeemed` | `?bool` | Optional | If true, it excludes `DiscountCode` resources that have been redeemed the maximum number of<br>times (as configured by `max_redemptions`) from the results. | getExcludeFullyRedeemed(): ?bool | setExcludeFullyRedeemed(?bool excludeFullyRedeemed): void |
| `customerId` | `?string` | Optional | The ID of the customer to whom the `DiscountCode` resources are issued.<br>You must provide either this field or the `code` field.<br>**Constraints**: *Maximum Length*: `50` | getCustomerId(): ?string | setCustomerId(?string customerId): void |

## Example (as JSON)

```json
{
  "code": null,
  "exclude_invalid": null,
  "exclude_fully_redeemed": null,
  "customer_id": null
}
```


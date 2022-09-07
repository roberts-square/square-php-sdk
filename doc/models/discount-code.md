
# Discount Code

Associates a discount to a code issued to customers.
The pricing rule referenced by this resource determines how and what is discounted.

## Structure

`DiscountCode`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | The Square-assigned ID of the discount code. | getId(): ?string | setId(?string id): void |
| `code` | `?string` | Optional | The alphanumeric code that can be used to look up the discount code. The `code` is unique<br>within the seller account. The code is always represented in uppercase.<br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]+$` | getCode(): ?string | setCode(?string code): void |
| `pricingRuleId` | `?string` | Optional | The ID of the [CatalogPricingRule](../../doc/models/catalog-pricing-rule.md)<br>that determines how and what is discounted when the<br>`DiscountCode` is applied to an order. | getPricingRuleId(): ?string | setPricingRuleId(?string pricingRuleId): void |
| `maxRedemptions` | `?int` | Optional | The number of orders to which the `DiscountCode` can be applied. The default is 1.<br>The value -1 indicates that the `DiscountCode` can be applied to any number of orders (no usage limit).<br>**Constraints**: `>= -1` | getMaxRedemptions(): ?int | setMaxRedemptions(?int maxRedemptions): void |
| `validFrom` | `?string` | Optional | The timestamp after which the `DiscountCode` can be redeemed, in RFC 3339 format. | getValidFrom(): ?string | setValidFrom(?string validFrom): void |
| `expiresAt` | `?string` | Optional | The timestamp before which the `DiscountCode` can be redeemed, in RFC 3339 format.<br>If the discount code has no expiry, this field is null. | getExpiresAt(): ?string | setExpiresAt(?string expiresAt): void |
| `createdAt` | `?string` | Optional | The timestamp when the `DiscountCode` was created, in RFC 3339 format. | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `updatedAt` | `?string` | Optional | The timestamp when the `DiscountCode` was last updated, in RFC 3339 format. | getUpdatedAt(): ?string | setUpdatedAt(?string updatedAt): void |
| `version` | `?string` | Optional | The `DiscountCode` version number. It increments each time an update is applied.<br>It is used to enforce [Optimistic Concurrency](https://developer.squareup.com/docs/working-with-apis/optimistic-concurrency).<br>**Constraints**: *Maximum Length*: `192` | getVersion(): ?string | setVersion(?string version): void |
| `customerId` | `?string` | Optional | The ID of the associated [Customer](../../doc/models/customer.md).<br>This field can be used in [SearchDiscountCodes](../../doc/apis/discount-codes.md#search-discount-codes)<br>to retrieve discount codes for a given customer.<br>However, this does not limit the redemption of the discount code to that customer.<br>**Constraints**: *Maximum Length*: `50` | getCustomerId(): ?string | setCustomerId(?string customerId): void |

## Example (as JSON)

```json
{
  "code": null,
  "pricing_rule_id": null,
  "max_redemptions": null,
  "valid_from": null,
  "expires_at": null,
  "customer_id": null
}
```


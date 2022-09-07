
# Subscription Tax Info

Describes the information to be used when calculating taxes for subscriptions.

## Structure

`SubscriptionTaxInfo`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `sellerCode` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getSellerCode(): string | setSellerCode(string sellerCode): void |
| `productCode` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getProductCode(): string | setProductCode(string productCode): void |
| `productClass` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getProductClass(): string | setProductClass(string productClass): void |

## Example (as JSON)

```json
{
  "seller_code": "seller_code6",
  "product_code": "product_code6",
  "product_class": "product_class0"
}
```


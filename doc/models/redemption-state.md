
# Redemption State

The status of the redemption.

## Enumeration

`RedemptionState`

## Fields

| Name | Description |
|  --- | --- |
| `PENDING` | Indicates that the order, to which a `DiscountCode` is applied, is<br>currently open. |
| `COMPLETED` | Indicates that the order, to which a `DiscountCode` is applied, is<br>finalized. |
| `CANCELLED` | Indicates that the order to which the `DiscountCode` is applied is canceled<br>(by calling [UpdateOrder](../../doc/apis/orders.md#update-order))<br>or the `DiscountCode` is removed from the order<br>(by calling [UpdateRedemption](../../doc/apis/discount-codes.md#update-redemption)). |



# Loyalty Order Assignment

Represents a linkage between a loyalty account and an order.

## Structure

`LoyaltyOrderAssignment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Assignment's unique ID. | getId(): ?string | setId(?string id): void |
| `status` | [`?string (LoyaltyOrderAssignmentStatus)`](../../doc/models/loyalty-order-assignment-status.md) | Optional | Status of the assignment. | getStatus(): ?string | setStatus(?string status): void |
| `loyaltyAccountId` | `?string` | Optional | Unique identifier of the account that's associated with the assignment. | getLoyaltyAccountId(): ?string | setLoyaltyAccountId(?string loyaltyAccountId): void |
| `programId` | `?string` | Optional | Unique identifier of the program. | getProgramId(): ?string | setProgramId(?string programId): void |
| `points` | `?int` | Optional | Number of points that will be accumulated for this order. | getPoints(): ?int | setPoints(?int points): void |
| `orderId` | `?string` | Optional | Unique identifier of the reward this assignment links to. | getOrderId(): ?string | setOrderId(?string orderId): void |
| `rewardIds` | `?(string[])` | Optional | Rewards that are applied to the order in the sale and should be redeemed. | getRewardIds(): ?array | setRewardIds(?array rewardIds): void |
| `createdAt` | `?string` | Optional | Server time (RFC 3339) first created at. | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |

## Example (as JSON)

```json
{
  "status": null,
  "reward_ids": null
}
```


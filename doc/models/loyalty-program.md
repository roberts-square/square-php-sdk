
# Loyalty Program

Represents a Square loyalty program. Loyalty programs define how buyers can earn points and redeem points for rewards.
Square sellers can have only one loyalty program, which is created and managed from the Seller Dashboard.
For more information, see [Loyalty Program Overview](https://developer.squareup.com/docs/loyalty/overview).

## Structure

`LoyaltyProgram`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | The Square-assigned ID of the loyalty program. Updates to<br>the loyalty program do not modify the identifier.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `36` | getId(): string | setId(string id): void |
| `description` | `?string` | Optional | The program description. | getDescription(): ?string | setDescription(?string description): void |
| `status` | [`string (LoyaltyProgramStatus)`](../../doc/models/loyalty-program-status.md) | Required | Indicates whether the program is currently active. | getStatus(): string | setStatus(string status): void |
| `rewardTiers` | [`LoyaltyProgramRewardTier[]`](../../doc/models/loyalty-program-reward-tier.md) | Required | The list of rewards for buyers, sorted by ascending points. | getRewardTiers(): array | setRewardTiers(array rewardTiers): void |
| `rule` | [`?LoyaltyProgramAccrualRule`](../../doc/models/loyalty-program-accrual-rule.md) | Optional | Represents an accrual rule, which defines how buyers can earn points from the base [loyalty program](../../doc/models/loyalty-program.md). | getRule(): ?LoyaltyProgramAccrualRule | setRule(?LoyaltyProgramAccrualRule rule): void |
| `expirationPolicy` | [`?LoyaltyProgramExpirationPolicy`](../../doc/models/loyalty-program-expiration-policy.md) | Optional | Describes when the loyalty program expires. | getExpirationPolicy(): ?LoyaltyProgramExpirationPolicy | setExpirationPolicy(?LoyaltyProgramExpirationPolicy expirationPolicy): void |
| `terminology` | [`LoyaltyProgramTerminology`](../../doc/models/loyalty-program-terminology.md) | Required | Represents the naming used for loyalty points. | getTerminology(): LoyaltyProgramTerminology | setTerminology(LoyaltyProgramTerminology terminology): void |
| `locationIds` | `?(string[])` | Optional | The [locations](../../doc/models/location.md) at which the program is active. | getLocationIds(): ?array | setLocationIds(?array locationIds): void |
| `createdAt` | `string` | Required | The timestamp when the program was created, in RFC 3339 format.<br>**Constraints**: *Minimum Length*: `1` | getCreatedAt(): string | setCreatedAt(string createdAt): void |
| `updatedAt` | `string` | Required | The timestamp when the reward was last updated, in RFC 3339 format.<br>**Constraints**: *Minimum Length*: `1` | getUpdatedAt(): string | setUpdatedAt(string updatedAt): void |
| `accrualRules` | [`LoyaltyProgramAccrualRule[]`](../../doc/models/loyalty-program-accrual-rule.md) | Required | Defines how buyers can earn loyalty points from the base loyalty program.<br>To check for associated [loyalty promotions](../../doc/models/loyalty-promotion.md) that enable<br>buyers to earn extra points, call [ListLoyaltyPromotions](../../doc/apis/loyalty.md#list-loyalty-promotions). | getAccrualRules(): array | setAccrualRules(array accrualRules): void |

## Example (as JSON)

```json
{
  "status": "INACTIVE",
  "rule": null,
  "expiration_policy": null,
  "terminology": {}
}
```


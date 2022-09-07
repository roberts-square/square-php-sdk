
# Subscription Configuration

Describes the configuration for the subscription.

## Structure

`SubscriptionConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `buyerAllowIndefinitePausing` | `?bool` | Optional | Configuration for whether or not the buyer is allowed to pause the subscription indefinitely. | getBuyerAllowIndefinitePausing(): ?bool | setBuyerAllowIndefinitePausing(?bool buyerAllowIndefinitePausing): void |
| `buyerMaxCyclesToSkip` | `?int` | Optional | The number of cycles the buyer is allowed to skip. | getBuyerMaxCyclesToSkip(): ?int | setBuyerMaxCyclesToSkip(?int buyerMaxCyclesToSkip): void |

## Example (as JSON)

```json
{
  "buyer_allow_indefinite_pausing": null,
  "buyer_max_cycles_to_skip": null
}
```


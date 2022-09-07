
# Aggregation Strategy

Indicates how a CatalogPricingRule can be combined with other pricing rules.

## Enumeration

`AggregationStrategy`

## Fields

| Name | Description |
|  --- | --- |
| `UNKNOWN` | The pricing rule has an aggregation strategy that cannot be represented with the current<br>version of the API. |
| `STACKABLE` | The pricing rule can be combined with any other eligible pricing rules. |
| `EXCLUSIVE` | The pricing rule cannot be combined with other EXCLUSIVE pricing rules. |


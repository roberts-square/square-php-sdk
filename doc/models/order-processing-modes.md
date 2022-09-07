
# Order Processing Modes

The processing modes for order creation and completion.

## Structure

`OrderProcessingModes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `creationProcessingMode` | [`?string (OrderProcessingMode)`](../../doc/models/order-processing-mode.md) | Optional | - | getCreationProcessingMode(): ?string | setCreationProcessingMode(?string creationProcessingMode): void |
| `completionProcessingMode` | [`?string (OrderProcessingMode)`](../../doc/models/order-processing-mode.md) | Optional | - | getCompletionProcessingMode(): ?string | setCompletionProcessingMode(?string completionProcessingMode): void |

## Example (as JSON)

```json
{
  "creation_processing_mode": null,
  "completion_processing_mode": null
}
```


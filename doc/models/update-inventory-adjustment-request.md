
# Update Inventory Adjustment Request

## Structure

`UpdateInventoryAdjustmentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `idempotencyKey` | `string` | Required | A client-supplied, universally unique identifier (UUID) for the<br>request.<br><br>See [Idempotency](https://developer.squareup.com/docs/basics/api101/idempotency) in the<br>[API Development 101](https://developer.squareup.com/docs/basics/api101/overview) section for more<br>information.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `128` | getIdempotencyKey(): string | setIdempotencyKey(string idempotencyKey): void |
| `update` | [`?InventoryAdjustmentUpdate`](../../doc/models/inventory-adjustment-update.md) | Optional | Represents an update made to an inventory adjustment | getUpdate(): ?InventoryAdjustmentUpdate | setUpdate(?InventoryAdjustmentUpdate update): void |

## Example (as JSON)

```json
{
  "idempotency_key": "8fc6a5b0-9fe8-4b46-b46b-2ef95793abbe",
  "update": {
    "adjustment_id": "UDMOEO78BG6GYWA2XDRYX3KB",
    "quantity": "7.5"
  }
}
```


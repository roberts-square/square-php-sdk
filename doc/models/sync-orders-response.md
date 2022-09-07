
# Sync Orders Response

Either the `order_entries` or `orders` field is set, depending on whether
`return_entries` is set on the [SyncOrdersRequest](../../doc/apis/orders.md#search-orders).

## Structure

`SyncOrdersResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `orders` | [`?(Order[])`](../../doc/models/order.md) | Optional | A list of<br>[Order](../../doc/models/order.md) objects that match the query conditions. The list is populated only if<br>`return_entries` is set to `false` in the request. | getOrders(): ?array | setOrders(?array orders): void |
| `cursor` | `?string` | Optional | The cursor to be used in a subsequent request. | getCursor(): ?string | setCursor(?string cursor): void |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | [Errors](../../doc/models/error.md) encountered during the search. | getErrors(): ?array | setErrors(?array errors): void |
| `complete` | `?bool` | Optional | If `true`, there are no known orders newer than those returned in this response. | getComplete(): ?bool | setComplete(?bool complete): void |
| `cursorExpiration` | `?string` | Optional | Time after which the the sync cursor will no longer be valid, requiring a new bootstrap. | getCursorExpiration(): ?string | setCursorExpiration(?string cursorExpiration): void |

## Example (as JSON)

```json
{
  "complete": true,
  "cursor": "123",
  "cursor_expiration": "2022-02-16T00:00:00Z",
  "orders": [
    {
      "id": "CAISEM82RcpmcFBM0TfOyiHV3es",
      "line_items": [
        {
          "base_price_money": {
            "amount": 1599,
            "currency": "USD"
          },
          "name": "Awesome product",
          "quantity": "1",
          "total_money": {
            "amount": 1599,
            "currency": "USD"
          },
          "uid": "945986d1-9586-11e6-ad5a-28cfe92138cf"
        },
        {
          "base_price_money": {
            "amount": 2000,
            "currency": "USD"
          },
          "name": "Another awesome product",
          "quantity": "3",
          "total_money": {
            "amount": 6000,
            "currency": "USD"
          },
          "uid": "a8f4168c-9586-11e6-bdf0-28cfe92138cf"
        }
      ],
      "location_id": "057P5VYJ4A5X1",
      "reference_id": "my-order-001",
      "total_money": {
        "amount": 7599,
        "currency": "USD"
      }
    }
  ]
}
```


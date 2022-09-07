
# Sync Orders Bootstrap Response

Returns Orders for the SyncOrdersBootstrap request.
Upon reaching the terminal condition (bootstrap_complete=true),
updates can be streamed via the non-boostrap SyncOrdersRequest

## Structure

`SyncOrdersBootstrapResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `orders` | [`?(Order[])`](../../doc/models/order.md) | Optional | A list of<br>[Order](../../doc/models/order.md) objects that match the request conditions. | getOrders(): ?array | setOrders(?array orders): void |
| `bootstrapCursor` | `?string` | Optional | The pagination cursor to be used in a subsequent request.<br>For more information, see [Pagination](https://developer.squareup.com/docs/basics/api101/pagination). | getBootstrapCursor(): ?string | setBootstrapCursor(?string bootstrapCursor): void |
| `syncCursor` | `?string` | Optional | The cursor which can be used with the non-bootstrap Sync API. | getSyncCursor(): ?string | setSyncCursor(?string syncCursor): void |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | [Errors](../../doc/models/error.md) encountered during the search. | getErrors(): ?array | setErrors(?array errors): void |
| `syncCursorExpiration` | `?string` | Optional | Time after which the the sync cursor will no longer be valid, requiring a new bootstrap. | getSyncCursorExpiration(): ?string | setSyncCursorExpiration(?string syncCursorExpiration): void |

## Example (as JSON)

```json
{
  "bootstrap_complete": true,
  "cursor": "123",
  "orders": [
    {
      "created_at": "2020-05-18T16:30:49.614Z",
      "discounts": [
        {
          "applied_money": {
            "amount": 550,
            "currency": "USD"
          },
          "name": "50% Off",
          "percentage": "50",
          "scope": "ORDER",
          "type": "FIXED_PERCENTAGE",
          "uid": "zGsRZP69aqSSR9lq9euSPB"
        }
      ],
      "id": "CAISENgvlJ6jLWAzERDzjyHVybY",
      "line_items": [
        {
          "applied_discounts": [
            {
              "applied_money": {
                "amount": 250,
                "currency": "USD"
              },
              "discount_uid": "zGsRZP69aqSSR9lq9euSPB",
              "uid": "9zr9S4dxvPAixvn0lpa1VC"
            }
          ],
          "base_price_money": {
            "amount": 500,
            "currency": "USD"
          },
          "gross_sales_money": {
            "amount": 500,
            "currency": "USD"
          },
          "name": "Item 1",
          "quantity": "1",
          "total_discount_money": {
            "amount": 250,
            "currency": "USD"
          },
          "total_money": {
            "amount": 250,
            "currency": "USD"
          },
          "total_tax_money": {
            "amount": 0,
            "currency": "USD"
          },
          "uid": "ULkg0tQTRK2bkU9fNv3IJD",
          "variation_total_price_money": {
            "amount": 500,
            "currency": "USD"
          }
        },
        {
          "applied_discounts": [
            {
              "applied_money": {
                "amount": 300,
                "currency": "USD"
              },
              "discount_uid": "zGsRZP69aqSSR9lq9euSPB",
              "uid": "qa8LwwZK82FgSEkQc2HYVC"
            }
          ],
          "base_price_money": {
            "amount": 300,
            "currency": "USD"
          },
          "gross_sales_money": {
            "amount": 600,
            "currency": "USD"
          },
          "name": "Item 2",
          "quantity": "2",
          "total_discount_money": {
            "amount": 300,
            "currency": "USD"
          },
          "total_money": {
            "amount": 300,
            "currency": "USD"
          },
          "total_tax_money": {
            "amount": 0,
            "currency": "USD"
          },
          "uid": "mumY8Nun4BC5aKe2yyx5a",
          "variation_total_price_money": {
            "amount": 600,
            "currency": "USD"
          }
        }
      ],
      "location_id": "057P5VYJ4A5X1",
      "net_amounts": {
        "discount_money": {
          "amount": 550,
          "currency": "USD"
        },
        "service_charge_money": {
          "amount": 0,
          "currency": "USD"
        },
        "tax_money": {
          "amount": 0,
          "currency": "USD"
        },
        "tip_money": {
          "amount": 0,
          "currency": "USD"
        },
        "total_money": {
          "amount": 550,
          "currency": "USD"
        }
      },
      "state": "OPEN",
      "total_discount_money": {
        "amount": 550,
        "currency": "USD"
      },
      "total_money": {
        "amount": 550,
        "currency": "USD"
      },
      "total_service_charge_money": {
        "amount": 0,
        "currency": "USD"
      },
      "total_tax_money": {
        "amount": 0,
        "currency": "USD"
      },
      "total_tip_money": {
        "amount": 0,
        "currency": "USD"
      },
      "updated_at": "2020-05-18T16:30:49.614Z",
      "version": 1
    }
  ]
}
```


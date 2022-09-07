
# Create Account Request

Request object to be sent to the __CreateAccount__ endpoint.

## Structure

`CreateAccountRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `idempotencyKey` | `string` | Required | A value you specify that uniquely identifies this request among all your requests.<br>See [Idempotency](https://developer.squareup.com/docs/basics/api101/idempotency) for more information. | getIdempotencyKey(): string | setIdempotencyKey(string idempotencyKey): void |
| `account` | [`Account`](../../doc/models/account.md) | Required | Represents a Square seller account created by the Accounts API. | getAccount(): Account | setAccount(Account account): void |

## Example (as JSON)

```json
{
  "account": {
    "country_code": "US",
    "status": "ACTIVE"
  },
  "idempotency_key": "6407d28d-4cef-4d1f-9906-4faf588c01f0"
}
```


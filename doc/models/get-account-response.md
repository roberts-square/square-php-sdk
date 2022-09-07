
# Get Account Response

Response object for the __GetAccount__ endpoint.

## Structure

`GetAccountResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Information on errors encountered during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `account` | [`?Account`](../../doc/models/account.md) | Optional | Represents a Square seller account created by the Accounts API. | getAccount(): ?Account | setAccount(?Account account): void |

## Example (as JSON)

```json
{
  "account": {
    "country_code": "US",
    "creator_id": "1CWID8YSMF2BEBX7KL",
    "id": "1CMLBVD8QF44ABKVRL",
    "status": "ACTIVE",
    "version": 1
  }
}
```


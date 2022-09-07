
# Update Account Response

Response object returned by the __UpdateAccount__ endpoint.
If the call is successful, the endpoint will return the updated `Account`. If the call is
unsuccessful, the endpoint will return error information.

## Structure

`UpdateAccountResponse`

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
    "status": "INACTIVE",
    "version": 2
  }
}
```


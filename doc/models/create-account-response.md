
# Create Account Response

Response object returned by the __CreateAccount__ endpoint
after a successful call. If the call was unsuccessful, the endpoint will return an error.

## Structure

`CreateAccountResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Information on errors encountered during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `account` | [`?Account`](../../doc/models/account.md) | Optional | Represents a Square seller account created by the Accounts API. | getAccount(): ?Account | setAccount(?Account account): void |
| `accessToken` | `?string` | Optional | Access token for this account that can be used to authorize calls to<br>Square endpoints. Present only if the call was successful. | getAccessToken(): ?string | setAccessToken(?string accessToken): void |

## Example (as JSON)

```json
{
  "access_token": "sq0ats-lStPpxVm6iBgzaDQx4T7fd",
  "account": {
    "country_code": "US",
    "creator_id": "1CWID8YSMF2BEBX7KL",
    "id": "1CMLBVD8QF44ABKVRL",
    "status": "ACTIVE",
    "version": 1
  }
}
```


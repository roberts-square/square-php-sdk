
# Setup Merchant Response

Response object returned by the [SetupMerchant](../../doc/apis/merchants.md#setup-merchant) endpoint.

## Structure

`SetupMerchantResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Any errors that occurred during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `merchant` | [`?Merchant`](../../doc/models/merchant.md) | Optional | Represents a business that sells with Square. | getMerchant(): ?Merchant | setMerchant(?Merchant merchant): void |
| `location` | [`?Location`](../../doc/models/location.md) | Optional | Represents one of a business' [locations](https://developer.squareup.com/docs/locations-api). | getLocation(): ?Location | setLocation(?Location location): void |
| `employee` | [`?Employee`](../../doc/models/employee.md) | Optional | An employee object that is used by the external API. | getEmployee(): ?Employee | setEmployee(?Employee employee): void |
| `accessToken` | `?string` | Optional | Your application's access token. You provide this token in a header with every request to Connect API endpoints.<br>See [Request and response headers](https://docs.connect.squareup.com/api/connect/v2/#requestandresponseheaders)<br>for the format of this header. | getAccessToken(): ?string | setAccessToken(?string accessToken): void |
| `refreshToken` | `?string` | Optional | Your application's refresh token. You use this credential to generate new access tokens once the initial one expires. | getRefreshToken(): ?string | setRefreshToken(?string refreshToken): void |
| `accessTokenExpiresAt` | `?string` | Optional | The date when access_token expires, in [ISO 8601](http://www.iso.org/iso/home/standards/iso8601.htm) format. | getAccessTokenExpiresAt(): ?string | setAccessTokenExpiresAt(?string accessTokenExpiresAt): void |
| `existingMerchant` | `?bool` | Optional | After creating a merchant, if you send a request with the same<br>first name, last name, and email, the response sets this flag to true and<br>returns the previously created `Merchant`, `Location`, and `Employee` in the response. | getExistingMerchant(): ?bool | setExistingMerchant(?bool existingMerchant): void |

## Example (as JSON)

```json
{
  "errors": null,
  "merchant": null,
  "location": null,
  "employee": null,
  "access_token": null,
  "refresh_token": null,
  "access_token_expires_at": null,
  "existing_merchant": null
}
```


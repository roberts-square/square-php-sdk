
# Setup Merchant Request

Request object to the [SetupMerchant](../../doc/apis/merchants.md#setup-merchant) endpoint.

## Structure

`SetupMerchantRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `email` | `?string` | Optional | The email address of the business owner. | getEmail(): ?string | setEmail(?string email): void |
| `firstName` | `?string` | Optional | The first name of the business owner. | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | The last name of the business owner. | getLastName(): ?string | setLastName(?string lastName): void |
| `businessName` | `?string` | Optional | The name of the business. | getBusinessName(): ?string | setBusinessName(?string businessName): void |
| `country` | [`?string (Country)`](../../doc/models/country.md) | Optional | Indicates the country associated with another entity, such as a business.<br>Values are in [ISO 3166-1-alpha-2 format](http://www.iso.org/iso/home/standards/country_codes.htm). | getCountry(): ?string | setCountry(?string country): void |
| `timezone` | `?string` | Optional | The timezone for the business, in IANA format. | getTimezone(): ?string | setTimezone(?string timezone): void |
| `languageCode` | `?string` | Optional | The language associated with the merchant account in BCP 47 format. | getLanguageCode(): ?string | setLanguageCode(?string languageCode): void |
| `oauthScope` | `?(string[])` | Optional | The list of permissions to grant in the new OAuth session in the response. | getOauthScope(): ?array | setOauthScope(?array oauthScope): void |

## Example (as JSON)

```json
{
  "email": null,
  "first_name": null,
  "last_name": null,
  "business_name": null,
  "country": null,
  "timezone": null,
  "language_code": null,
  "oauth_scope": null
}
```



# Bulk Create Customer Data

## Structure

`BulkCreateCustomerData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `givenName` | `?string` | Optional | The customer's given (i.e., first) name. | getGivenName(): ?string | setGivenName(?string givenName): void |
| `familyName` | `?string` | Optional | The customer's family (i.e., last) name. | getFamilyName(): ?string | setFamilyName(?string familyName): void |
| `companyName` | `?string` | Optional | The name of the customer's company. | getCompanyName(): ?string | setCompanyName(?string companyName): void |
| `nickname` | `?string` | Optional | A nickname for the customer. | getNickname(): ?string | setNickname(?string nickname): void |
| `emailAddress` | `?string` | Optional | The customer's email address. | getEmailAddress(): ?string | setEmailAddress(?string emailAddress): void |
| `address` | [`?Address`](../../doc/models/address.md) | Optional | Represents a postal address in a country.<br>For more information, see [Working with Addresses](https://developer.squareup.com/docs/build-basics/working-with-addresses). | getAddress(): ?Address | setAddress(?Address address): void |
| `phoneNumber` | `?string` | Optional | The customer's phone number. | getPhoneNumber(): ?string | setPhoneNumber(?string phoneNumber): void |
| `referenceId` | `?string` | Optional | An optional second ID you can set to associate the customer with an<br>entity in another system. | getReferenceId(): ?string | setReferenceId(?string referenceId): void |
| `note` | `?string` | Optional | An optional note to associate with the customer. | getNote(): ?string | setNote(?string note): void |
| `birthday` | `?string` | Optional | The customer birthday in RFC-3339 format. Year is optional,<br>timezone and times are not allowed. Example: `0000-09-01T00:00:00-00:00`<br>for a birthday on September 1st. `1998-09-01T00:00:00-00:00` for a birthday<br>on September 1st 1998. | getBirthday(): ?string | setBirthday(?string birthday): void |
| `taxIds` | [`?CustomerTaxIds`](../../doc/models/customer-tax-ids.md) | Optional | Represents the tax ID associated with a [customer profile](../../doc/models/customer.md). The corresponding `tax_ids` field is available only for customers of sellers in EU countries or the United Kingdom.<br>For more information, see [Customer tax IDs](https://developer.squareup.com/docs/customers-api/what-it-does#customer-tax-ids). | getTaxIds(): ?CustomerTaxIds | setTaxIds(?CustomerTaxIds taxIds): void |

## Example (as JSON)

```json
{
  "given_name": null,
  "family_name": null,
  "company_name": null,
  "nickname": null,
  "email_address": null,
  "address": null,
  "phone_number": null,
  "reference_id": null,
  "note": null,
  "birthday": null,
  "tax_ids": null
}
```


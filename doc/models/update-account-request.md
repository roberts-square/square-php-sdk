
# Update Account Request

Request object to be sent to the __UpdateAccount__ endpoint.

## Structure

`UpdateAccountRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `account` | [`Account`](../../doc/models/account.md) | Required | Represents a Square seller account created by the Accounts API. | getAccount(): Account | setAccount(Account account): void |

## Example (as JSON)

```json
{
  "account": {
    "id": null,
    "version": null,
    "country_code": "LK",
    "status": null,
    "legal_entity_id": null,
    "creator_id": null
  }
}
```


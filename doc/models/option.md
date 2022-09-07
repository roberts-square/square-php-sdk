
# Option

## Structure

`Option`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `optionKey` | `string` | Required | A string that uniquely identifies the option within the set of<br>available options for a given question. | getOptionKey(): string | setOptionKey(string optionKey): void |
| `optionName` | `string` | Required | Human-readable text that explains the intended meaning of the option. | getOptionName(): string | setOptionName(string optionName): void |

## Example (as JSON)

```json
{
  "option_key": "option_key6",
  "option_name": "option_name4"
}
```


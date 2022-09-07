
# Complete Terminal Action Response

## Structure

`CompleteTerminalActionResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Information on errors encountered during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `action` | [`?TerminalAction`](../../doc/models/terminal-action.md) | Optional | Represents an action processed by the Square Terminal. | getAction(): ?TerminalAction | setAction(?TerminalAction action): void |

## Example (as JSON)

```json
{
  "errors": null,
  "action": null
}
```


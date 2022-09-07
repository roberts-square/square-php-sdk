
# Update Question Request

Request object for the UpdateQuestion endpoint.

## Structure

`UpdateQuestionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `response` | `?string` | Optional | A response to the question in the relevant format:<br>Responses to text prompts are provided as free form text. Responses to<br>multiple-choice questions are provided as a single option key<br>(single-selection) or comma-separated list of option keys (multi-selection). | getResponse(): ?string | setResponse(?string response): void |

## Example (as JSON)

```json
{
  "response": null
}
```


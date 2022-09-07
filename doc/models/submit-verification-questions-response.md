
# Submit Verification Questions Response

Response object for requests to the SubmitVerificationQuestions endpoint.

## Structure

`SubmitVerificationQuestionsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Information on errors encountered during the request. Only set if the<br>call fails. | getErrors(): ?array | setErrors(?array errors): void |

## Example (as JSON)

```json
{
  "errors": null
}
```


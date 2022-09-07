
# Get Verification Questions Response

Response object for requests to the GetVerificationQuestions endpoint.

## Structure

`GetVerificationQuestionsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dueDate` | `string` | Required | A timestamp, in RFC 3339 format, by which the provided questions must be<br>answered. | getDueDate(): string | setDueDate(string dueDate): void |
| `verificationQuestions` | [`VerificationQuestion[]`](../../doc/models/verification-question.md) | Required | The list of verification questions associated with the seller account. | getVerificationQuestions(): array | setVerificationQuestions(array verificationQuestions): void |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Information on errors encountered during the request. Only set if the<br>call fails. | getErrors(): ?array | setErrors(?array errors): void |

## Example (as JSON)

```json
{
  "due_date": "due_date8",
  "verification_questions": [
    {
      "question_key": "question_key2",
      "question_prompt": "question_prompt6",
      "question_id": "question_id6",
      "question_type": "TEXT",
      "options": null,
      "response": null,
      "file_uploads": null,
      "is_required": null,
      "payment_token": null,
      "is_rejected": null
    },
    {
      "question_key": "question_key3",
      "question_prompt": "question_prompt5",
      "question_id": "question_id5",
      "question_type": "MULTI_ANSWER_SELECT",
      "options": null,
      "response": null,
      "file_uploads": null,
      "is_required": null,
      "payment_token": null,
      "is_rejected": null
    }
  ],
  "errors": null
}
```


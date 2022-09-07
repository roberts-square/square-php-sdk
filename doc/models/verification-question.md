
# Verification Question

Represents a request for information required to reactivate a frozen or
deactivated seller account.

## Structure

`VerificationQuestion`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `questionKey` | `string` | Required | Unique, Square-generated ID for this question. | getQuestionKey(): string | setQuestionKey(string questionKey): void |
| `questionPrompt` | `string` | Required | The question text. Square has question texts for each locale. | getQuestionPrompt(): string | setQuestionPrompt(string questionPrompt): void |
| `questionId` | `string` | Required | Unique Square-generated ID for an instance of this question asked to<br>a particular seller. This value is required for submitting responses. | getQuestionId(): string | setQuestionId(string questionId): void |
| `questionType` | [`string (QuestionType)`](../../doc/models/question-type.md) | Required | Indicates the format of a verification question. | getQuestionType(): string | setQuestionType(string questionType): void |
| `options` | [`?(Option[])`](../../doc/models/option.md) | Optional | List of available options for multiple-choice question. Only populated<br>for `SELECT` and `MULTI_ANSWER_SELECT` questions. | getOptions(): ?array | setOptions(?array options): void |
| `response` | `?string` | Optional | A response to the question in the relevant format:<br>Responses to text prompts are provided as free form text. Responses to<br>multiple-choice questions are provided as a single option key<br>(single-selection) or comma-separated list of option keys (multi-selection). | getResponse(): ?string | setResponse(?string response): void |
| `fileUploads` | [`?(FileUpload[])`](../../doc/models/file-upload.md) | Optional | A list of `FileUpload` objects that should be uploaded. Only<br>populated for `FILE` questions. | getFileUploads(): ?array | setFileUploads(?array fileUploads): void |
| `isRequired` | `?bool` | Optional | Indicates whether a verification response is required in order to move<br>the frozen account forward to agent review. | getIsRequired(): ?bool | setIsRequired(?bool isRequired): void |
| `paymentToken` | `?string` | Optional | The payment object ID (`payment_id`) of the payment associated with<br>this question. Present only for questions that refer to a specific payment. | getPaymentToken(): ?string | setPaymentToken(?string paymentToken): void |
| `isRejected` | `?bool` | Optional | Indicates whether a Square agent has flagged this as invalid or<br>incomplete. Default: `false`. | getIsRejected(): ?bool | setIsRejected(?bool isRejected): void |

## Example (as JSON)

```json
{
  "question_key": "question_key0",
  "question_prompt": "question_prompt8",
  "question_id": "question_id8",
  "question_type": "TEXT",
  "options": null,
  "response": null,
  "file_uploads": null,
  "is_required": null,
  "payment_token": null,
  "is_rejected": null
}
```


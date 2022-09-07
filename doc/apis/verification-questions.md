# Verification Questions

```php
$verificationQuestionsApi = $client->getVerificationQuestionsApi();
```

## Class Name

`VerificationQuestionsApi`

## Methods

* [Get Verification Questions](../../doc/apis/verification-questions.md#get-verification-questions)
* [Submit Verification Questions](../../doc/apis/verification-questions.md#submit-verification-questions)
* [Update Question](../../doc/apis/verification-questions.md#update-question)
* [Upload File](../../doc/apis/verification-questions.md#upload-file)
* [Delete File](../../doc/apis/verification-questions.md#delete-file)


# Get Verification Questions

Fetch a list of verification questions that need responses before
Square can determine whether to reactivate a frozen or disabled account.

Questions are translated based on the requested region.
GetVerificationQuestions returns questions in US English by default:

<ul>
<li>English (United States): en</li>
<li>English (United Kingdom): en-GB</li>
<li>English (Canada): en-CA</li>
<li>English (Australia): en-AU</li>
<li>French (Canada): fr-CA</li>
<li>Japanese: ja</li>
<li>Spanish (Spain): es</li>
</ul>
The access token used for this endpoint must be from a frozen or deactivated account.

```php
function getVerificationQuestions(?string $locale = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `locale` | `?string` | Query, Optional | Indicates the desired language for the question prompt (based on<br>region). |

## Response Type

[`GetVerificationQuestionsResponse`](../../doc/models/get-verification-questions-response.md)

## Example Usage

```php
$apiResponse = $verificationQuestionsApi->getVerificationQuestions();

if ($apiResponse->isSuccess()) {
    $getVerificationQuestionsResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Submit Verification Questions

Notify Square that all required questions have been
completed and the account is ready for review.

```php
function submitVerificationQuestions(): ApiResponse
```

## Response Type

[`SubmitVerificationQuestionsResponse`](../../doc/models/submit-verification-questions-response.md)

## Example Usage

```php
$apiResponse = $verificationQuestionsApi->submitVerificationQuestions();

if ($apiResponse->isSuccess()) {
    $submitVerificationQuestionsResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Update Question

Submit or update a text-only response to a verification question.

```php
function updateQuestion(string $questionId, UpdateQuestionRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `questionId` | `string` | Template, Required | The unique, Square-generated identifier of the question to be updated. |
| `body` | [`UpdateQuestionRequest`](../../doc/models/update-question-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`UpdateQuestionResponse`](../../doc/models/update-question-response.md)

## Example Usage

```php
$questionId = 'question_id8';
$body = new Models\UpdateQuestionRequest;

$apiResponse = $verificationQuestionsApi->updateQuestion($questionId, $body);

if ($apiResponse->isSuccess()) {
    $updateQuestionResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Upload File

Uploads a file as part of a response to a verification question.
Accepts HTTP multipart/form-data image and PDF files.

In addition to standard headers, this endpoint requires the following:

```
Accept: application/json'
Content-Type: multipart/form-data'
```

```php
function uploadFile(string $questionId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `questionId` | `string` | Template, Required | The unique, Square-generated identifier of the question to be updated. |

## Response Type

[`UploadFileResponse`](../../doc/models/upload-file-response.md)

## Example Usage

```php
$questionId = 'question_id8';

$apiResponse = $verificationQuestionsApi->uploadFile($questionId);

if ($apiResponse->isSuccess()) {
    $uploadFileResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Delete File

Delete a file upload.

```php
function deleteFile(string $questionId, string $fileId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `questionId` | `string` | Template, Required | The unique, Square-generated identifier of the question to be updated. |
| `fileId` | `string` | Template, Required | The unique, Square-generated identifier of the file to be deleted. |

## Response Type

[`DeleteFileResponse`](../../doc/models/delete-file-response.md)

## Example Usage

```php
$questionId = 'question_id8';
$fileId = 'file_id6';

$apiResponse = $verificationQuestionsApi->deleteFile($questionId, $fileId);

if ($apiResponse->isSuccess()) {
    $deleteFileResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


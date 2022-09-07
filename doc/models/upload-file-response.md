
# Upload File Response

Response object for requests to the UploadFile endpoint.

## Structure

`UploadFileResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Information on errors encountered during the request. Only set if the<br>call fails. | getErrors(): ?array | setErrors(?array errors): void |
| `fileUpload` | [`?FileUpload`](../../doc/models/file-upload.md) | Optional | Represents a file uploaded as part of a response to a verification question. | getFileUpload(): ?FileUpload | setFileUpload(?FileUpload fileUpload): void |

## Example (as JSON)

```json
{
  "errors": null,
  "file_upload": null
}
```



# File Upload

Represents a file uploaded as part of a response to a verification question.

## Structure

`FileUpload`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fileName` | `string` | Required | Name of the file. | getFileName(): string | setFileName(string fileName): void |
| `fileId` | `string` | Required | Unique identifier for this `FileUpload`. | getFileId(): string | setFileId(string fileId): void |

## Example (as JSON)

```json
{
  "file_name": "file_name8",
  "file_id": "file_id6"
}
```


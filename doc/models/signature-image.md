
# Signature Image

## Structure

`SignatureImage`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | An identifier for the signature image. | getId(): ?string | setId(?string id): void |
| `imageType` | `?string` | Optional | The mime/type of the image data.<br>Use `image/png;base64` for png.<br>Use `image/svg+xml` for SVG. | getImageType(): ?string | setImageType(?string imageType): void |
| `data` | `?string` | Optional | The text representation of the image_type format. If the image type is base64,<br>this field contains the base64 representation of the image. If the image format is already text,<br>then this field contains the raw content. | getData(): ?string | setData(?string data): void |

## Example (as JSON)

```json
{}
```


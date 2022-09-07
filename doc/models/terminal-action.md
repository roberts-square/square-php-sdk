
# Terminal Action

Represents an action processed by the Square Terminal.

## Structure

`TerminalAction`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | A unique ID for this `TerminalAction`.<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `255` | getId(): ?string | setId(?string id): void |
| `deviceId` | `?string` | Optional | The unique Id of the device intended for this `TerminalAction`.<br>The Id can be retrieved from /v2/devices api. | getDeviceId(): ?string | setDeviceId(?string deviceId): void |
| `deadlineDuration` | `?string` | Optional | The duration as an RFC 3339 duration, after which the action will be automatically canceled.<br>TerminalActions that are `PENDING` will be automatically `CANCELED` and have a cancellation reason<br>of `TIMED_OUT`<br><br>Default: 5 minutes from creation<br><br>Maximum: 5 minutes | getDeadlineDuration(): ?string | setDeadlineDuration(?string deadlineDuration): void |
| `sessionId` | `?string` | Optional | Connect the action to referenced session. If no session is defined, Terminal API<br>may automatically generate a session. | getSessionId(): ?string | setSessionId(?string sessionId): void |
| `autocompleteSession` | `?bool` | Optional | Complete the current session (if active) if the action completes.<br>Defaults to true. | getAutocompleteSession(): ?bool | setAutocompleteSession(?bool autocompleteSession): void |
| `status` | `?string` | Optional | The status of the `TerminalAction`.<br>Options: `PENDING`, `IN_PROGRESS`, `CANCEL_REQUESTED`, `CANCELED`, `COMPLETED` | getStatus(): ?string | setStatus(?string status): void |
| `cancelReason` | [`?string (ActionCancelReason)`](../../doc/models/action-cancel-reason.md) | Optional | - | getCancelReason(): ?string | setCancelReason(?string cancelReason): void |
| `createdAt` | `?string` | Optional | The time when the `TerminalAction` was created as an RFC 3339 timestamp. | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `updatedAt` | `?string` | Optional | The time when the `TerminalAction` was last updated as an RFC 3339 timestamp. | getUpdatedAt(): ?string | setUpdatedAt(?string updatedAt): void |
| `appId` | `?string` | Optional | The ID of the application that created the action. | getAppId(): ?string | setAppId(?string appId): void |
| `type` | [`?string (TerminalActionActionType)`](../../doc/models/terminal-action-action-type.md) | Optional | Describes the type of this unit and indicates which field contains the unit information. This is an ‘open’ enum. | getType(): ?string | setType(?string type): void |
| `qrCodeOptions` | [`?QrCodeOptions`](../../doc/models/qr-code-options.md) | Optional | Fields to describe the action that displays QR-Codes. | getQrCodeOptions(): ?QrCodeOptions | setQrCodeOptions(?QrCodeOptions qrCodeOptions): void |
| `checkoutOptions` | [`?CheckoutOptions`](../../doc/models/checkout-options.md) | Optional | - | getCheckoutOptions(): ?CheckoutOptions | setCheckoutOptions(?CheckoutOptions checkoutOptions): void |
| `refundOptions` | [`?RefundOptions`](../../doc/models/refund-options.md) | Optional | - | getRefundOptions(): ?RefundOptions | setRefundOptions(?RefundOptions refundOptions): void |
| `saveCardOptions` | [`?SaveCardOptions`](../../doc/models/save-card-options.md) | Optional | Describes save-card action fields. | getSaveCardOptions(): ?SaveCardOptions | setSaveCardOptions(?SaveCardOptions saveCardOptions): void |
| `signatureOptions` | [`?SignatureOptions`](../../doc/models/signature-options.md) | Optional | - | getSignatureOptions(): ?SignatureOptions | setSignatureOptions(?SignatureOptions signatureOptions): void |
| `confirmationOptions` | [`?ConfirmationOptions`](../../doc/models/confirmation-options.md) | Optional | - | getConfirmationOptions(): ?ConfirmationOptions | setConfirmationOptions(?ConfirmationOptions confirmationOptions): void |
| `deviceMetadata` | [`?DeviceMetadata`](../../doc/models/device-metadata.md) | Optional | - | getDeviceMetadata(): ?DeviceMetadata | setDeviceMetadata(?DeviceMetadata deviceMetadata): void |
| `completable` | `?bool` | Optional | Indicates the action is completable, up-to-date with internal state. | getCompletable(): ?bool | setCompletable(?bool completable): void |
| `clientCompleted` | `?bool` | Optional | Indicates the action or workflow has been completed by the Terminal API client. | getClientCompleted(): ?bool | setClientCompleted(?bool clientCompleted): void |
| `completeRequested` | `?bool` | Optional | Indicates the action requires action-specific updates that have been applied,<br>but the action has not been completed. | getCompleteRequested(): ?bool | setCompleteRequested(?bool completeRequested): void |
| `cancelRequested` | `?bool` | Optional | Indicates the action has been requested to be canceled, but the Terminal API client owns<br>the action. | getCancelRequested(): ?bool | setCancelRequested(?bool cancelRequested): void |

## Example (as JSON)

```json
{
  "device_id": null,
  "deadline_duration": null,
  "session_id": null,
  "autocomplete_session": null,
  "cancel_reason": null,
  "type": null,
  "qr_code_options": null,
  "checkout_options": null,
  "refund_options": null,
  "save_card_options": null,
  "signature_options": null,
  "confirmation_options": null,
  "device_metadata": null,
  "completable": null,
  "client_completed": null,
  "complete_requested": null,
  "cancel_requested": null
}
```


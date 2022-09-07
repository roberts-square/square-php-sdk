<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents an action processed by the Square Terminal.
 */
class TerminalAction implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $deviceId;

    /**
     * @var string|null
     */
    private $deadlineDuration;

    /**
     * @var string|null
     */
    private $sessionId;

    /**
     * @var bool|null
     */
    private $autocompleteSession;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $cancelReason;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $updatedAt;

    /**
     * @var string|null
     */
    private $appId;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var QrCodeOptions|null
     */
    private $qrCodeOptions;

    /**
     * @var CheckoutOptions|null
     */
    private $checkoutOptions;

    /**
     * @var RefundOptions|null
     */
    private $refundOptions;

    /**
     * @var SaveCardOptions|null
     */
    private $saveCardOptions;

    /**
     * @var SignatureOptions|null
     */
    private $signatureOptions;

    /**
     * @var ConfirmationOptions|null
     */
    private $confirmationOptions;

    /**
     * @var DeviceMetadata|null
     */
    private $deviceMetadata;

    /**
     * @var bool|null
     */
    private $completable;

    /**
     * @var bool|null
     */
    private $clientCompleted;

    /**
     * @var bool|null
     */
    private $completeRequested;

    /**
     * @var bool|null
     */
    private $cancelRequested;

    /**
     * Returns Id.
     * A unique ID for this `TerminalAction`.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * A unique ID for this `TerminalAction`.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Device Id.
     * The unique Id of the device intended for this `TerminalAction`.
     * The Id can be retrieved from /v2/devices api.
     */
    public function getDeviceId(): ?string
    {
        return $this->deviceId;
    }

    /**
     * Sets Device Id.
     * The unique Id of the device intended for this `TerminalAction`.
     * The Id can be retrieved from /v2/devices api.
     *
     * @maps device_id
     */
    public function setDeviceId(?string $deviceId): void
    {
        $this->deviceId = $deviceId;
    }

    /**
     * Returns Deadline Duration.
     * The duration as an RFC 3339 duration, after which the action will be automatically canceled.
     * TerminalActions that are `PENDING` will be automatically `CANCELED` and have a cancellation reason
     * of `TIMED_OUT`
     *
     * Default: 5 minutes from creation
     *
     * Maximum: 5 minutes
     */
    public function getDeadlineDuration(): ?string
    {
        return $this->deadlineDuration;
    }

    /**
     * Sets Deadline Duration.
     * The duration as an RFC 3339 duration, after which the action will be automatically canceled.
     * TerminalActions that are `PENDING` will be automatically `CANCELED` and have a cancellation reason
     * of `TIMED_OUT`
     *
     * Default: 5 minutes from creation
     *
     * Maximum: 5 minutes
     *
     * @maps deadline_duration
     */
    public function setDeadlineDuration(?string $deadlineDuration): void
    {
        $this->deadlineDuration = $deadlineDuration;
    }

    /**
     * Returns Session Id.
     * Connect the action to referenced session. If no session is defined, Terminal API
     * may automatically generate a session.
     */
    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }

    /**
     * Sets Session Id.
     * Connect the action to referenced session. If no session is defined, Terminal API
     * may automatically generate a session.
     *
     * @maps session_id
     */
    public function setSessionId(?string $sessionId): void
    {
        $this->sessionId = $sessionId;
    }

    /**
     * Returns Autocomplete Session.
     * Complete the current session (if active) if the action completes.
     * Defaults to true.
     */
    public function getAutocompleteSession(): ?bool
    {
        return $this->autocompleteSession;
    }

    /**
     * Sets Autocomplete Session.
     * Complete the current session (if active) if the action completes.
     * Defaults to true.
     *
     * @maps autocomplete_session
     */
    public function setAutocompleteSession(?bool $autocompleteSession): void
    {
        $this->autocompleteSession = $autocompleteSession;
    }

    /**
     * Returns Status.
     * The status of the `TerminalAction`.
     * Options: `PENDING`, `IN_PROGRESS`, `CANCEL_REQUESTED`, `CANCELED`, `COMPLETED`
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * The status of the `TerminalAction`.
     * Options: `PENDING`, `IN_PROGRESS`, `CANCEL_REQUESTED`, `CANCELED`, `COMPLETED`
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Cancel Reason.
     */
    public function getCancelReason(): ?string
    {
        return $this->cancelReason;
    }

    /**
     * Sets Cancel Reason.
     *
     * @maps cancel_reason
     */
    public function setCancelReason(?string $cancelReason): void
    {
        $this->cancelReason = $cancelReason;
    }

    /**
     * Returns Created At.
     * The time when the `TerminalAction` was created as an RFC 3339 timestamp.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * The time when the `TerminalAction` was created as an RFC 3339 timestamp.
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     * The time when the `TerminalAction` was last updated as an RFC 3339 timestamp.
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     * The time when the `TerminalAction` was last updated as an RFC 3339 timestamp.
     *
     * @maps updated_at
     */
    public function setUpdatedAt(?string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns App Id.
     * The ID of the application that created the action.
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * Sets App Id.
     * The ID of the application that created the action.
     *
     * @maps app_id
     */
    public function setAppId(?string $appId): void
    {
        $this->appId = $appId;
    }

    /**
     * Returns Type.
     * Describes the type of this unit and indicates which field contains the unit information. This is an
     * ‘open’ enum.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Describes the type of this unit and indicates which field contains the unit information. This is an
     * ‘open’ enum.
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Qr Code Options.
     * Fields to describe the action that displays QR-Codes.
     */
    public function getQrCodeOptions(): ?QrCodeOptions
    {
        return $this->qrCodeOptions;
    }

    /**
     * Sets Qr Code Options.
     * Fields to describe the action that displays QR-Codes.
     *
     * @maps qr_code_options
     */
    public function setQrCodeOptions(?QrCodeOptions $qrCodeOptions): void
    {
        $this->qrCodeOptions = $qrCodeOptions;
    }

    /**
     * Returns Checkout Options.
     */
    public function getCheckoutOptions(): ?CheckoutOptions
    {
        return $this->checkoutOptions;
    }

    /**
     * Sets Checkout Options.
     *
     * @maps checkout_options
     */
    public function setCheckoutOptions(?CheckoutOptions $checkoutOptions): void
    {
        $this->checkoutOptions = $checkoutOptions;
    }

    /**
     * Returns Refund Options.
     */
    public function getRefundOptions(): ?RefundOptions
    {
        return $this->refundOptions;
    }

    /**
     * Sets Refund Options.
     *
     * @maps refund_options
     */
    public function setRefundOptions(?RefundOptions $refundOptions): void
    {
        $this->refundOptions = $refundOptions;
    }

    /**
     * Returns Save Card Options.
     * Describes save-card action fields.
     */
    public function getSaveCardOptions(): ?SaveCardOptions
    {
        return $this->saveCardOptions;
    }

    /**
     * Sets Save Card Options.
     * Describes save-card action fields.
     *
     * @maps save_card_options
     */
    public function setSaveCardOptions(?SaveCardOptions $saveCardOptions): void
    {
        $this->saveCardOptions = $saveCardOptions;
    }

    /**
     * Returns Signature Options.
     */
    public function getSignatureOptions(): ?SignatureOptions
    {
        return $this->signatureOptions;
    }

    /**
     * Sets Signature Options.
     *
     * @maps signature_options
     */
    public function setSignatureOptions(?SignatureOptions $signatureOptions): void
    {
        $this->signatureOptions = $signatureOptions;
    }

    /**
     * Returns Confirmation Options.
     */
    public function getConfirmationOptions(): ?ConfirmationOptions
    {
        return $this->confirmationOptions;
    }

    /**
     * Sets Confirmation Options.
     *
     * @maps confirmation_options
     */
    public function setConfirmationOptions(?ConfirmationOptions $confirmationOptions): void
    {
        $this->confirmationOptions = $confirmationOptions;
    }

    /**
     * Returns Device Metadata.
     */
    public function getDeviceMetadata(): ?DeviceMetadata
    {
        return $this->deviceMetadata;
    }

    /**
     * Sets Device Metadata.
     *
     * @maps device_metadata
     */
    public function setDeviceMetadata(?DeviceMetadata $deviceMetadata): void
    {
        $this->deviceMetadata = $deviceMetadata;
    }

    /**
     * Returns Completable.
     * Indicates the action is completable, up-to-date with internal state.
     */
    public function getCompletable(): ?bool
    {
        return $this->completable;
    }

    /**
     * Sets Completable.
     * Indicates the action is completable, up-to-date with internal state.
     *
     * @maps completable
     */
    public function setCompletable(?bool $completable): void
    {
        $this->completable = $completable;
    }

    /**
     * Returns Client Completed.
     * Indicates the action or workflow has been completed by the Terminal API client.
     */
    public function getClientCompleted(): ?bool
    {
        return $this->clientCompleted;
    }

    /**
     * Sets Client Completed.
     * Indicates the action or workflow has been completed by the Terminal API client.
     *
     * @maps client_completed
     */
    public function setClientCompleted(?bool $clientCompleted): void
    {
        $this->clientCompleted = $clientCompleted;
    }

    /**
     * Returns Complete Requested.
     * Indicates the action requires action-specific updates that have been applied,
     * but the action has not been completed.
     */
    public function getCompleteRequested(): ?bool
    {
        return $this->completeRequested;
    }

    /**
     * Sets Complete Requested.
     * Indicates the action requires action-specific updates that have been applied,
     * but the action has not been completed.
     *
     * @maps complete_requested
     */
    public function setCompleteRequested(?bool $completeRequested): void
    {
        $this->completeRequested = $completeRequested;
    }

    /**
     * Returns Cancel Requested.
     * Indicates the action has been requested to be canceled, but the Terminal API client owns
     * the action.
     */
    public function getCancelRequested(): ?bool
    {
        return $this->cancelRequested;
    }

    /**
     * Sets Cancel Requested.
     * Indicates the action has been requested to be canceled, but the Terminal API client owns
     * the action.
     *
     * @maps cancel_requested
     */
    public function setCancelRequested(?bool $cancelRequested): void
    {
        $this->cancelRequested = $cancelRequested;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->id)) {
            $json['id']                   = $this->id;
        }
        if (isset($this->deviceId)) {
            $json['device_id']            = $this->deviceId;
        }
        if (isset($this->deadlineDuration)) {
            $json['deadline_duration']    = $this->deadlineDuration;
        }
        if (isset($this->sessionId)) {
            $json['session_id']           = $this->sessionId;
        }
        if (isset($this->autocompleteSession)) {
            $json['autocomplete_session'] = $this->autocompleteSession;
        }
        if (isset($this->status)) {
            $json['status']               = $this->status;
        }
        if (isset($this->cancelReason)) {
            $json['cancel_reason']        = $this->cancelReason;
        }
        if (isset($this->createdAt)) {
            $json['created_at']           = $this->createdAt;
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']           = $this->updatedAt;
        }
        if (isset($this->appId)) {
            $json['app_id']               = $this->appId;
        }
        if (isset($this->type)) {
            $json['type']                 = $this->type;
        }
        if (isset($this->qrCodeOptions)) {
            $json['qr_code_options']      = $this->qrCodeOptions;
        }
        if (isset($this->checkoutOptions)) {
            $json['checkout_options']     = $this->checkoutOptions;
        }
        if (isset($this->refundOptions)) {
            $json['refund_options']       = $this->refundOptions;
        }
        if (isset($this->saveCardOptions)) {
            $json['save_card_options']    = $this->saveCardOptions;
        }
        if (isset($this->signatureOptions)) {
            $json['signature_options']    = $this->signatureOptions;
        }
        if (isset($this->confirmationOptions)) {
            $json['confirmation_options'] = $this->confirmationOptions;
        }
        if (isset($this->deviceMetadata)) {
            $json['device_metadata']      = $this->deviceMetadata;
        }
        if (isset($this->completable)) {
            $json['completable']          = $this->completable;
        }
        if (isset($this->clientCompleted)) {
            $json['client_completed']     = $this->clientCompleted;
        }
        if (isset($this->completeRequested)) {
            $json['complete_requested']   = $this->completeRequested;
        }
        if (isset($this->cancelRequested)) {
            $json['cancel_requested']     = $this->cancelRequested;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

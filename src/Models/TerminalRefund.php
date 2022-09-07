<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a payment refund processed by the Square Terminal. Only supports Interac (Canadian debit
 * network) payment refunds.
 */
class TerminalRefund implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $refundId;

    /**
     * @var string
     */
    private $paymentId;

    /**
     * @var CardPaymentDetails|null
     */
    private $cardDetails;

    /**
     * @var string|null
     */
    private $orderId;

    /**
     * @var Money
     */
    private $amountMoney;

    /**
     * @var string
     */
    private $reason;

    /**
     * @var string
     */
    private $deviceId;

    /**
     * @var string|null
     */
    private $referenceIdDeprecated;

    /**
     * @var string|null
     */
    private $noteDeprecated;

    /**
     * @var string|null
     */
    private $deadlineDuration;

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
     * @var Card|null
     */
    private $card;

    /**
     * @var string|null
     */
    private $locationId;

    /**
     * @var string|null
     */
    private $sessionId;

    /**
     * @var bool|null
     */
    private $autocompleteSession;

    /**
     * @param string $paymentId
     * @param Money $amountMoney
     * @param string $reason
     * @param string $deviceId
     */
    public function __construct(string $paymentId, Money $amountMoney, string $reason, string $deviceId)
    {
        $this->paymentId = $paymentId;
        $this->amountMoney = $amountMoney;
        $this->reason = $reason;
        $this->deviceId = $deviceId;
    }

    /**
     * Returns Id.
     * A unique ID for this `TerminalRefund`.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * A unique ID for this `TerminalRefund`.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Refund Id.
     * The reference to the payment refund created by completing this `TerminalRefund`.
     */
    public function getRefundId(): ?string
    {
        return $this->refundId;
    }

    /**
     * Sets Refund Id.
     * The reference to the payment refund created by completing this `TerminalRefund`.
     *
     * @maps refund_id
     */
    public function setRefundId(?string $refundId): void
    {
        $this->refundId = $refundId;
    }

    /**
     * Returns Payment Id.
     * The unique ID of the payment being refunded.
     */
    public function getPaymentId(): string
    {
        return $this->paymentId;
    }

    /**
     * Sets Payment Id.
     * The unique ID of the payment being refunded.
     *
     * @required
     * @maps payment_id
     */
    public function setPaymentId(string $paymentId): void
    {
        $this->paymentId = $paymentId;
    }

    /**
     * Returns Card Details.
     * Reflects the current status of a card payment. Contains only non-confidential information.
     */
    public function getCardDetails(): ?CardPaymentDetails
    {
        return $this->cardDetails;
    }

    /**
     * Sets Card Details.
     * Reflects the current status of a card payment. Contains only non-confidential information.
     *
     * @maps card_details
     */
    public function setCardDetails(?CardPaymentDetails $cardDetails): void
    {
        $this->cardDetails = $cardDetails;
    }

    /**
     * Returns Order Id.
     * The reference to the Square order ID for the payment identified by the `payment_id`.
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * Sets Order Id.
     * The reference to the Square order ID for the payment identified by the `payment_id`.
     *
     * @maps order_id
     */
    public function setOrderId(?string $orderId): void
    {
        $this->orderId = $orderId;
    }

    /**
     * Returns Amount Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     */
    public function getAmountMoney(): Money
    {
        return $this->amountMoney;
    }

    /**
     * Sets Amount Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     *
     * @required
     * @maps amount_money
     */
    public function setAmountMoney(Money $amountMoney): void
    {
        $this->amountMoney = $amountMoney;
    }

    /**
     * Returns Reason.
     * A description of the reason for the refund.
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * Sets Reason.
     * A description of the reason for the refund.
     *
     * @required
     * @maps reason
     */
    public function setReason(string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * Returns Device Id.
     * The unique ID of the device intended for this `TerminalRefund`.
     * The Id can be retrieved from /v2/devices api.
     */
    public function getDeviceId(): string
    {
        return $this->deviceId;
    }

    /**
     * Sets Device Id.
     * The unique ID of the device intended for this `TerminalRefund`.
     * The Id can be retrieved from /v2/devices api.
     *
     * @required
     * @maps device_id
     */
    public function setDeviceId(string $deviceId): void
    {
        $this->deviceId = $deviceId;
    }

    /**
     * Returns Reference Id Deprecated.
     * An optional user-defined reference ID that can be used to associate
     * this `TerminalRefund` to another entity in an external system. For example, an
     * ID generated by a third-party system.
     * Note: The maximum is 40 characters.
     */
    public function getReferenceIdDeprecated(): ?string
    {
        return $this->referenceIdDeprecated;
    }

    /**
     * Sets Reference Id Deprecated.
     * An optional user-defined reference ID that can be used to associate
     * this `TerminalRefund` to another entity in an external system. For example, an
     * ID generated by a third-party system.
     * Note: The maximum is 40 characters.
     *
     * @maps reference_id_deprecated
     */
    public function setReferenceIdDeprecated(?string $referenceIdDeprecated): void
    {
        $this->referenceIdDeprecated = $referenceIdDeprecated;
    }

    /**
     * Returns Note Deprecated.
     * An optional note to associate with the transaction.
     * Note: The maximum is 250 characters.
     */
    public function getNoteDeprecated(): ?string
    {
        return $this->noteDeprecated;
    }

    /**
     * Sets Note Deprecated.
     * An optional note to associate with the transaction.
     * Note: The maximum is 250 characters.
     *
     * @maps note_deprecated
     */
    public function setNoteDeprecated(?string $noteDeprecated): void
    {
        $this->noteDeprecated = $noteDeprecated;
    }

    /**
     * Returns Deadline Duration.
     * The RFC 3339 duration, after which the refund is automatically canceled.
     * A `TerminalRefund` that is `PENDING` is automatically `CANCELED` and has a cancellation reason
     * of `TIMED_OUT`.
     *
     * Default: 5 minutes from creation.
     *
     * Maximum: 5 minutes
     */
    public function getDeadlineDuration(): ?string
    {
        return $this->deadlineDuration;
    }

    /**
     * Sets Deadline Duration.
     * The RFC 3339 duration, after which the refund is automatically canceled.
     * A `TerminalRefund` that is `PENDING` is automatically `CANCELED` and has a cancellation reason
     * of `TIMED_OUT`.
     *
     * Default: 5 minutes from creation.
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
     * Returns Status.
     * The status of the `TerminalRefund`.
     * Options: `PENDING`, `IN_PROGRESS`, `CANCEL_REQUESTED`, `CANCELED`, or `COMPLETED`.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * The status of the `TerminalRefund`.
     * Options: `PENDING`, `IN_PROGRESS`, `CANCEL_REQUESTED`, `CANCELED`, or `COMPLETED`.
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
     * The time when the `TerminalRefund` was created, as an RFC 3339 timestamp.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * The time when the `TerminalRefund` was created, as an RFC 3339 timestamp.
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     * The time when the `TerminalRefund` was last updated, as an RFC 3339 timestamp.
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     * The time when the `TerminalRefund` was last updated, as an RFC 3339 timestamp.
     *
     * @maps updated_at
     */
    public function setUpdatedAt(?string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns App Id.
     * The ID of the application that created the refund.
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * Sets App Id.
     * The ID of the application that created the refund.
     *
     * @maps app_id
     */
    public function setAppId(?string $appId): void
    {
        $this->appId = $appId;
    }

    /**
     * Returns Card.
     * Represents the payment details of a card to be used for payments. These
     * details are determined by the payment token generated by Web Payments SDK.
     */
    public function getCard(): ?Card
    {
        return $this->card;
    }

    /**
     * Sets Card.
     * Represents the payment details of a card to be used for payments. These
     * details are determined by the payment token generated by Web Payments SDK.
     *
     * @maps card
     */
    public function setCard(?Card $card): void
    {
        $this->card = $card;
    }

    /**
     * Returns Location Id.
     * The location of the device where the `TerminalRefund` was directed.
     */
    public function getLocationId(): ?string
    {
        return $this->locationId;
    }

    /**
     * Sets Location Id.
     * The location of the device where the `TerminalRefund` was directed.
     *
     * @maps location_id
     */
    public function setLocationId(?string $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * Returns Session Id.
     * Connects the refund to a referenced session. If no session is defined, the Terminal API
     * might automatically generate a session.
     */
    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }

    /**
     * Sets Session Id.
     * Connects the refund to a referenced session. If no session is defined, the Terminal API
     * might automatically generate a session.
     *
     * @maps session_id
     */
    public function setSessionId(?string $sessionId): void
    {
        $this->sessionId = $sessionId;
    }

    /**
     * Returns Autocomplete Session.
     * Complete the current session (if active) if the refund completes.
     * Defaults to true.
     */
    public function getAutocompleteSession(): ?bool
    {
        return $this->autocompleteSession;
    }

    /**
     * Sets Autocomplete Session.
     * Complete the current session (if active) if the refund completes.
     * Defaults to true.
     *
     * @maps autocomplete_session
     */
    public function setAutocompleteSession(?bool $autocompleteSession): void
    {
        $this->autocompleteSession = $autocompleteSession;
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
            $json['id']                      = $this->id;
        }
        if (isset($this->refundId)) {
            $json['refund_id']               = $this->refundId;
        }
        $json['payment_id']                  = $this->paymentId;
        if (isset($this->cardDetails)) {
            $json['card_details']            = $this->cardDetails;
        }
        if (isset($this->orderId)) {
            $json['order_id']                = $this->orderId;
        }
        $json['amount_money']                = $this->amountMoney;
        $json['reason']                      = $this->reason;
        $json['device_id']                   = $this->deviceId;
        if (isset($this->referenceIdDeprecated)) {
            $json['reference_id_deprecated'] = $this->referenceIdDeprecated;
        }
        if (isset($this->noteDeprecated)) {
            $json['note_deprecated']         = $this->noteDeprecated;
        }
        if (isset($this->deadlineDuration)) {
            $json['deadline_duration']       = $this->deadlineDuration;
        }
        if (isset($this->status)) {
            $json['status']                  = $this->status;
        }
        if (isset($this->cancelReason)) {
            $json['cancel_reason']           = $this->cancelReason;
        }
        if (isset($this->createdAt)) {
            $json['created_at']              = $this->createdAt;
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']              = $this->updatedAt;
        }
        if (isset($this->appId)) {
            $json['app_id']                  = $this->appId;
        }
        if (isset($this->card)) {
            $json['card']                    = $this->card;
        }
        if (isset($this->locationId)) {
            $json['location_id']             = $this->locationId;
        }
        if (isset($this->sessionId)) {
            $json['session_id']              = $this->sessionId;
        }
        if (isset($this->autocompleteSession)) {
            $json['autocomplete_session']    = $this->autocompleteSession;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

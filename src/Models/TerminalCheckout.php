<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a checkout processed by the Square Terminal.
 */
class TerminalCheckout implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var Money
     */
    private $amountMoney;

    /**
     * @var string|null
     */
    private $referenceId;

    /**
     * @var string|null
     */
    private $note;

    /**
     * @var string|null
     */
    private $orderId;

    /**
     * @var PaymentOptions|null
     */
    private $paymentOptions;

    /**
     * @var DeviceCheckoutOptions
     */
    private $deviceOptions;

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
     * @var string[]|null
     */
    private $paymentIds;

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
    private $cancelReasonDeprecated;

    /**
     * @var string|null
     */
    private $locationId;

    /**
     * @var string|null
     */
    private $paymentType;

    /**
     * @var AuxiliaryInfo[]|null
     */
    private $auxiliaryInfo;

    /**
     * @var string[]|null
     */
    private $revenueAssociationTags;

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
    private $teamMemberId;

    /**
     * @var string|null
     */
    private $customerId;

    /**
     * @var Money|null
     */
    private $appFeeMoney;

    /**
     * @param Money $amountMoney
     * @param DeviceCheckoutOptions $deviceOptions
     */
    public function __construct(Money $amountMoney, DeviceCheckoutOptions $deviceOptions)
    {
        $this->amountMoney = $amountMoney;
        $this->deviceOptions = $deviceOptions;
    }

    /**
     * Returns Id.
     * A unique ID for this `TerminalCheckout`.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * A unique ID for this `TerminalCheckout`.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
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
     * Returns Reference Id.
     * An optional user-defined reference ID that can be used to associate
     * this `TerminalCheckout` to another entity in an external system. For example, an order
     * ID generated by a third-party shopping cart. The ID is also associated with any payments
     * used to complete the checkout.
     */
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }

    /**
     * Sets Reference Id.
     * An optional user-defined reference ID that can be used to associate
     * this `TerminalCheckout` to another entity in an external system. For example, an order
     * ID generated by a third-party shopping cart. The ID is also associated with any payments
     * used to complete the checkout.
     *
     * @maps reference_id
     */
    public function setReferenceId(?string $referenceId): void
    {
        $this->referenceId = $referenceId;
    }

    /**
     * Returns Note.
     * An optional note to associate with the checkout, as well as with any payments used to complete the
     * checkout.
     * Note: maximum 500 characters
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * Sets Note.
     * An optional note to associate with the checkout, as well as with any payments used to complete the
     * checkout.
     * Note: maximum 500 characters
     *
     * @maps note
     */
    public function setNote(?string $note): void
    {
        $this->note = $note;
    }

    /**
     * Returns Order Id.
     * The reference to the Square order ID for the checkout request. Supported only in the US.
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * Sets Order Id.
     * The reference to the Square order ID for the checkout request. Supported only in the US.
     *
     * @maps order_id
     */
    public function setOrderId(?string $orderId): void
    {
        $this->orderId = $orderId;
    }

    /**
     * Returns Payment Options.
     */
    public function getPaymentOptions(): ?PaymentOptions
    {
        return $this->paymentOptions;
    }

    /**
     * Sets Payment Options.
     *
     * @maps payment_options
     */
    public function setPaymentOptions(?PaymentOptions $paymentOptions): void
    {
        $this->paymentOptions = $paymentOptions;
    }

    /**
     * Returns Device Options.
     */
    public function getDeviceOptions(): DeviceCheckoutOptions
    {
        return $this->deviceOptions;
    }

    /**
     * Sets Device Options.
     *
     * @required
     * @maps device_options
     */
    public function setDeviceOptions(DeviceCheckoutOptions $deviceOptions): void
    {
        $this->deviceOptions = $deviceOptions;
    }

    /**
     * Returns Deadline Duration.
     * An RFC 3339 duration, after which the checkout is automatically canceled.
     * A `TerminalCheckout` that is `PENDING` is automatically `CANCELED` and has a cancellation reason
     * of `TIMED_OUT`.
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
     * An RFC 3339 duration, after which the checkout is automatically canceled.
     * A `TerminalCheckout` that is `PENDING` is automatically `CANCELED` and has a cancellation reason
     * of `TIMED_OUT`.
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
     * Returns Status.
     * The status of the `TerminalCheckout`.
     * Options: `PENDING`, `IN_PROGRESS`, `CANCEL_REQUESTED`, `CANCELED`, `COMPLETED`
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * The status of the `TerminalCheckout`.
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
     * Returns Payment Ids.
     * A list of IDs for payments created by this `TerminalCheckout`.
     *
     * @return string[]|null
     */
    public function getPaymentIds(): ?array
    {
        return $this->paymentIds;
    }

    /**
     * Sets Payment Ids.
     * A list of IDs for payments created by this `TerminalCheckout`.
     *
     * @maps payment_ids
     *
     * @param string[]|null $paymentIds
     */
    public function setPaymentIds(?array $paymentIds): void
    {
        $this->paymentIds = $paymentIds;
    }

    /**
     * Returns Created At.
     * The time when the `TerminalCheckout` was created, as an RFC 3339 timestamp.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * The time when the `TerminalCheckout` was created, as an RFC 3339 timestamp.
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     * The time when the `TerminalCheckout` was last updated, as an RFC 3339 timestamp.
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     * The time when the `TerminalCheckout` was last updated, as an RFC 3339 timestamp.
     *
     * @maps updated_at
     */
    public function setUpdatedAt(?string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns App Id.
     * The ID of the application that created the checkout.
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * Sets App Id.
     * The ID of the application that created the checkout.
     *
     * @maps app_id
     */
    public function setAppId(?string $appId): void
    {
        $this->appId = $appId;
    }

    /**
     * Returns Cancel Reason Deprecated.
     */
    public function getCancelReasonDeprecated(): ?string
    {
        return $this->cancelReasonDeprecated;
    }

    /**
     * Sets Cancel Reason Deprecated.
     *
     * @maps cancel_reason_deprecated
     */
    public function setCancelReasonDeprecated(?string $cancelReasonDeprecated): void
    {
        $this->cancelReasonDeprecated = $cancelReasonDeprecated;
    }

    /**
     * Returns Location Id.
     * The location of the device where the `TerminalCheckout` was directed.
     */
    public function getLocationId(): ?string
    {
        return $this->locationId;
    }

    /**
     * Sets Location Id.
     * The location of the device where the `TerminalCheckout` was directed.
     *
     * @maps location_id
     */
    public function setLocationId(?string $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * Returns Payment Type.
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    /**
     * Sets Payment Type.
     *
     * @maps payment_type
     */
    public function setPaymentType(?string $paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * Returns Auxiliary Info.
     * An optional field containing additional information about the payment. Provided field
     * keys and values are validated by Square application code and might be modified in processing the
     * request.
     *
     * @return AuxiliaryInfo[]|null
     */
    public function getAuxiliaryInfo(): ?array
    {
        return $this->auxiliaryInfo;
    }

    /**
     * Sets Auxiliary Info.
     * An optional field containing additional information about the payment. Provided field
     * keys and values are validated by Square application code and might be modified in processing the
     * request.
     *
     * @maps auxiliary_info
     *
     * @param AuxiliaryInfo[]|null $auxiliaryInfo
     */
    public function setAuxiliaryInfo(?array $auxiliaryInfo): void
    {
        $this->auxiliaryInfo = $auxiliaryInfo;
    }

    /**
     * Returns Revenue Association Tags.
     * An optional list of string tags describing Square products or features associated with
     * this checkout. This list is passed to the Terminal to be associated with the payment for internal
     * accounting.
     *
     * @return string[]|null
     */
    public function getRevenueAssociationTags(): ?array
    {
        return $this->revenueAssociationTags;
    }

    /**
     * Sets Revenue Association Tags.
     * An optional list of string tags describing Square products or features associated with
     * this checkout. This list is passed to the Terminal to be associated with the payment for internal
     * accounting.
     *
     * @maps revenue_association_tags
     *
     * @param string[]|null $revenueAssociationTags
     */
    public function setRevenueAssociationTags(?array $revenueAssociationTags): void
    {
        $this->revenueAssociationTags = $revenueAssociationTags;
    }

    /**
     * Returns Session Id.
     * Connect the checkout to a referenced session. If no session is defined, the Terminal API
     * might automatically generate a session.
     */
    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }

    /**
     * Sets Session Id.
     * Connect the checkout to a referenced session. If no session is defined, the Terminal API
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
     * Complete the current session (if active) if the checkout completes.
     * Defaults to true.
     */
    public function getAutocompleteSession(): ?bool
    {
        return $this->autocompleteSession;
    }

    /**
     * Sets Autocomplete Session.
     * Complete the current session (if active) if the checkout completes.
     * Defaults to true.
     *
     * @maps autocomplete_session
     */
    public function setAutocompleteSession(?bool $autocompleteSession): void
    {
        $this->autocompleteSession = $autocompleteSession;
    }

    /**
     * Returns Team Member Id.
     * An optional ID of the team member associated with creating the checkout.
     */
    public function getTeamMemberId(): ?string
    {
        return $this->teamMemberId;
    }

    /**
     * Sets Team Member Id.
     * An optional ID of the team member associated with creating the checkout.
     *
     * @maps team_member_id
     */
    public function setTeamMemberId(?string $teamMemberId): void
    {
        $this->teamMemberId = $teamMemberId;
    }

    /**
     * Returns Customer Id.
     * An optional ID of the customer associated with the checkout.
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     * An optional ID of the customer associated with the checkout.
     *
     * @maps customer_id
     */
    public function setCustomerId(?string $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns App Fee Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     */
    public function getAppFeeMoney(): ?Money
    {
        return $this->appFeeMoney;
    }

    /**
     * Sets App Fee Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     *
     * @maps app_fee_money
     */
    public function setAppFeeMoney(?Money $appFeeMoney): void
    {
        $this->appFeeMoney = $appFeeMoney;
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
            $json['id']                       = $this->id;
        }
        $json['amount_money']                 = $this->amountMoney;
        if (isset($this->referenceId)) {
            $json['reference_id']             = $this->referenceId;
        }
        if (isset($this->note)) {
            $json['note']                     = $this->note;
        }
        if (isset($this->orderId)) {
            $json['order_id']                 = $this->orderId;
        }
        if (isset($this->paymentOptions)) {
            $json['payment_options']          = $this->paymentOptions;
        }
        $json['device_options']               = $this->deviceOptions;
        if (isset($this->deadlineDuration)) {
            $json['deadline_duration']        = $this->deadlineDuration;
        }
        if (isset($this->status)) {
            $json['status']                   = $this->status;
        }
        if (isset($this->cancelReason)) {
            $json['cancel_reason']            = $this->cancelReason;
        }
        if (isset($this->paymentIds)) {
            $json['payment_ids']              = $this->paymentIds;
        }
        if (isset($this->createdAt)) {
            $json['created_at']               = $this->createdAt;
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']               = $this->updatedAt;
        }
        if (isset($this->appId)) {
            $json['app_id']                   = $this->appId;
        }
        if (isset($this->cancelReasonDeprecated)) {
            $json['cancel_reason_deprecated'] = $this->cancelReasonDeprecated;
        }
        if (isset($this->locationId)) {
            $json['location_id']              = $this->locationId;
        }
        if (isset($this->paymentType)) {
            $json['payment_type']             = $this->paymentType;
        }
        if (isset($this->auxiliaryInfo)) {
            $json['auxiliary_info']           = $this->auxiliaryInfo;
        }
        if (isset($this->revenueAssociationTags)) {
            $json['revenue_association_tags'] = $this->revenueAssociationTags;
        }
        if (isset($this->sessionId)) {
            $json['session_id']               = $this->sessionId;
        }
        if (isset($this->autocompleteSession)) {
            $json['autocomplete_session']     = $this->autocompleteSession;
        }
        if (isset($this->teamMemberId)) {
            $json['team_member_id']           = $this->teamMemberId;
        }
        if (isset($this->customerId)) {
            $json['customer_id']              = $this->customerId;
        }
        if (isset($this->appFeeMoney)) {
            $json['app_fee_money']            = $this->appFeeMoney;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class OrderFulfillmentDigitalDetails implements \JsonSerializable
{
    /**
     * @var OrderFulfillmentRecipient|null
     */
    private $recipient;

    /**
     * @var string|null
     */
    private $placedAt;

    /**
     * @var string|null
     */
    private $completedAt;

    /**
     * @var string|null
     */
    private $canceledAt;

    /**
     * @var string|null
     */
    private $cancelReason;

    /**
     * Returns Recipient.
     * Information about the fulfillment recipient.
     */
    public function getRecipient(): ?OrderFulfillmentRecipient
    {
        return $this->recipient;
    }

    /**
     * Sets Recipient.
     * Information about the fulfillment recipient.
     *
     * @maps recipient
     */
    public function setRecipient(?OrderFulfillmentRecipient $recipient): void
    {
        $this->recipient = $recipient;
    }

    /**
     * Returns Placed At.
     * The date the fulfillment was requested.
     */
    public function getPlacedAt(): ?string
    {
        return $this->placedAt;
    }

    /**
     * Sets Placed At.
     * The date the fulfillment was requested.
     *
     * @maps placed_at
     */
    public function setPlacedAt(?string $placedAt): void
    {
        $this->placedAt = $placedAt;
    }

    /**
     * Returns Completed At.
     * The date the fulfillment was completed.
     */
    public function getCompletedAt(): ?string
    {
        return $this->completedAt;
    }

    /**
     * Sets Completed At.
     * The date the fulfillment was completed.
     *
     * @maps completed_at
     */
    public function setCompletedAt(?string $completedAt): void
    {
        $this->completedAt = $completedAt;
    }

    /**
     * Returns Canceled At.
     * The date the fulfillment was canceled by either the merchant or the buyer.
     */
    public function getCanceledAt(): ?string
    {
        return $this->canceledAt;
    }

    /**
     * Sets Canceled At.
     * The date the fulfillment was canceled by either the merchant or the buyer.
     *
     * @maps canceled_at
     */
    public function setCanceledAt(?string $canceledAt): void
    {
        $this->canceledAt = $canceledAt;
    }

    /**
     * Returns Cancel Reason.
     * A description of why the fulfillment was canceled.
     */
    public function getCancelReason(): ?string
    {
        return $this->cancelReason;
    }

    /**
     * Sets Cancel Reason.
     * A description of why the fulfillment was canceled.
     *
     * @maps cancel_reason
     */
    public function setCancelReason(?string $cancelReason): void
    {
        $this->cancelReason = $cancelReason;
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
        if (isset($this->recipient)) {
            $json['recipient']     = $this->recipient;
        }
        if (isset($this->placedAt)) {
            $json['placed_at']     = $this->placedAt;
        }
        if (isset($this->completedAt)) {
            $json['completed_at']  = $this->completedAt;
        }
        if (isset($this->canceledAt)) {
            $json['canceled_at']   = $this->canceledAt;
        }
        if (isset($this->cancelReason)) {
            $json['cancel_reason'] = $this->cancelReason;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

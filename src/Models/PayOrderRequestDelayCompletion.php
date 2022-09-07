<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * The delay completion details including the reason (e.g. PAPER_TIP) and the payment IDs
 * to delay completion for. The same reason is used for all payments, but not all payments in the
 * payment group have to use delayed completion. For example, a split tender checkout where one
 * payment type cannot use delayed completion (e.g. ACH).
 */
class PayOrderRequestDelayCompletion implements \JsonSerializable
{
    /**
     * @var string
     */
    private $reason;

    /**
     * @var string[]|null
     */
    private $paymentIds;

    /**
     * Returns Reason.
     * The reason for the delayed completion of the payment group.
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * Sets Reason.
     * The reason for the delayed completion of the payment group.
     *
     * @maps reason
     */
    public function setReason(string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * Returns Payment Ids.
     *
     * @return string[]|null
     */
    public function getPaymentIds(): ?array
    {
        return $this->paymentIds;
    }

    /**
     * Sets Payment Ids.
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
        $json['reason']          = $this->reason;
        if (isset($this->paymentIds)) {
            $json['payment_ids'] = $this->paymentIds;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Additional details indicating that this payment is part of a recurring series.
 */
class RecurringPaymentDetails implements \JsonSerializable
{
    /**
     * @var string
     */
    private $seriesPosition;

    /**
     * @var string|null
     */
    private $previousPaymentId;

    /**
     * @param string $seriesPosition
     */
    public function __construct(string $seriesPosition)
    {
        $this->seriesPosition = $seriesPosition;
    }

    /**
     * Returns Series Position.
     * The position of this payment in the recurring series, which must be one of the following:
     * INITIAL - The first payment in the series
     * SUBSEQUENT - All payments in the series other than the initial one.
     */
    public function getSeriesPosition(): string
    {
        return $this->seriesPosition;
    }

    /**
     * Sets Series Position.
     * The position of this payment in the recurring series, which must be one of the following:
     * INITIAL - The first payment in the series
     * SUBSEQUENT - All payments in the series other than the initial one.
     *
     * @required
     * @maps series_position
     */
    public function setSeriesPosition(string $seriesPosition): void
    {
        $this->seriesPosition = $seriesPosition;
    }

    /**
     * Returns Previous Payment Id.
     * The payment_id of the previous payment in the recurring sequence.  Should not be provided
     * when `series_position` is `INITIAL`.
     */
    public function getPreviousPaymentId(): ?string
    {
        return $this->previousPaymentId;
    }

    /**
     * Sets Previous Payment Id.
     * The payment_id of the previous payment in the recurring sequence.  Should not be provided
     * when `series_position` is `INITIAL`.
     *
     * @maps previous_payment_id
     */
    public function setPreviousPaymentId(?string $previousPaymentId): void
    {
        $this->previousPaymentId = $previousPaymentId;
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
        $json['series_position']         = $this->seriesPosition;
        if (isset($this->previousPaymentId)) {
            $json['previous_payment_id'] = $this->previousPaymentId;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a period of time during which a business location is open.
 */
class SpecialBusinessHoursPeriod implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $startDate;

    /**
     * @var string|null
     */
    private $endDate;

    /**
     * @var TimePeriod[]|null
     */
    private $timePeriods;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * @var bool|null
     */
    private $isClosed;

    /**
     * Returns Start Date.
     * The start date of a special business hours period, specified in ISO-8601 format: YYYY-MM-DD
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    /**
     * Sets Start Date.
     * The start date of a special business hours period, specified in ISO-8601 format: YYYY-MM-DD
     *
     * @maps start_date
     */
    public function setStartDate(?string $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * Returns End Date.
     * The start date of a special business hours period, specified in ISO-8601 format: YYYY-MM-DD
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    /**
     * Sets End Date.
     * The start date of a special business hours period, specified in ISO-8601 format: YYYY-MM-DD
     *
     * @maps end_date
     */
    public function setEndDate(?string $endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * Returns Time Periods.
     * The periods of time during which the location is open. There may be at most 10 per
     * SpecialBusinessHoursPeriod
     *
     * @return TimePeriod[]|null
     */
    public function getTimePeriods(): ?array
    {
        return $this->timePeriods;
    }

    /**
     * Sets Time Periods.
     * The periods of time during which the location is open. There may be at most 10 per
     * SpecialBusinessHoursPeriod
     *
     * @maps time_periods
     *
     * @param TimePeriod[]|null $timePeriods
     */
    public function setTimePeriods(?array $timePeriods): void
    {
        $this->timePeriods = $timePeriods;
    }

    /**
     * Returns Reason.
     * An explanation for the special hours (e.g. holiday name)
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * Sets Reason.
     * An explanation for the special hours (e.g. holiday name)
     *
     * @maps reason
     */
    public function setReason(?string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * Returns Is Closed.
     * Whether the location is closed or not.
     * Cannot be true if time_periods is populated
     */
    public function getIsClosed(): ?bool
    {
        return $this->isClosed;
    }

    /**
     * Sets Is Closed.
     * Whether the location is closed or not.
     * Cannot be true if time_periods is populated
     *
     * @maps is_closed
     */
    public function setIsClosed(?bool $isClosed): void
    {
        $this->isClosed = $isClosed;
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
        if (isset($this->startDate)) {
            $json['start_date']   = $this->startDate;
        }
        if (isset($this->endDate)) {
            $json['end_date']     = $this->endDate;
        }
        if (isset($this->timePeriods)) {
            $json['time_periods'] = $this->timePeriods;
        }
        if (isset($this->reason)) {
            $json['reason']       = $this->reason;
        }
        if (isset($this->isClosed)) {
            $json['is_closed']    = $this->isClosed;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

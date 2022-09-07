<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * The list of time periods during which the business location is open on non-normal days (e.g.
 * holidays).
 */
class SpecialBusinessHours implements \JsonSerializable
{
    /**
     * @var SpecialBusinessHoursPeriod[]|null
     */
    private $periods;

    /**
     * Returns Periods.
     *
     * @return SpecialBusinessHoursPeriod[]|null
     */
    public function getPeriods(): ?array
    {
        return $this->periods;
    }

    /**
     * Sets Periods.
     *
     * @maps periods
     *
     * @param SpecialBusinessHoursPeriod[]|null $periods
     */
    public function setPeriods(?array $periods): void
    {
        $this->periods = $periods;
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
        if (isset($this->periods)) {
            $json['periods'] = $this->periods;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

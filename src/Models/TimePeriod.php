<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class TimePeriod implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $startLocalTime;

    /**
     * @var string|null
     */
    private $endLocalTime;

    /**
     * Returns Start Local Time.
     * The start time of a special business hours time period, specified in local time using partial-time
     * RFC 3339 format. For example, `8:30:00` for a period starting at 8:30 in the morning.
     * Note that the seconds value is always :00, but it is appended for conformance to the RFC.
     */
    public function getStartLocalTime(): ?string
    {
        return $this->startLocalTime;
    }

    /**
     * Sets Start Local Time.
     * The start time of a special business hours time period, specified in local time using partial-time
     * RFC 3339 format. For example, `8:30:00` for a period starting at 8:30 in the morning.
     * Note that the seconds value is always :00, but it is appended for conformance to the RFC.
     *
     * @maps start_local_time
     */
    public function setStartLocalTime(?string $startLocalTime): void
    {
        $this->startLocalTime = $startLocalTime;
    }

    /**
     * Returns End Local Time.
     * The end time of a special business hours time period, specified in local time using partial-time
     * RFC 3339 format. For example, `8:30:00` for a period starting at 8:30 in the morning.
     * Note that the seconds value is always :00, but it is appended for conformance to the RFC.
     */
    public function getEndLocalTime(): ?string
    {
        return $this->endLocalTime;
    }

    /**
     * Sets End Local Time.
     * The end time of a special business hours time period, specified in local time using partial-time
     * RFC 3339 format. For example, `8:30:00` for a period starting at 8:30 in the morning.
     * Note that the seconds value is always :00, but it is appended for conformance to the RFC.
     *
     * @maps end_local_time
     */
    public function setEndLocalTime(?string $endLocalTime): void
    {
        $this->endLocalTime = $endLocalTime;
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
        if (isset($this->startLocalTime)) {
            $json['start_local_time'] = $this->startLocalTime;
        }
        if (isset($this->endLocalTime)) {
            $json['end_local_time']   = $this->endLocalTime;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

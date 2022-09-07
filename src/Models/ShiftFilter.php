<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Defines a filter used in a search for `Shift` records. `AND` logic is
 * used by Square's servers to apply each filter property specified.
 */
class ShiftFilter implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $locationIds;

    /**
     * @var string[]|null
     */
    private $employeeIds;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var TimeRange|null
     */
    private $start;

    /**
     * @var TimeRange|null
     */
    private $end;

    /**
     * @var ShiftWorkday|null
     */
    private $workday;

    /**
     * @var string[]|null
     */
    private $locationId;

    /**
     * @var string[]|null
     */
    private $employeeId;

    /**
     * @var string[]|null
     */
    private $teamMemberIds;

    /**
     * Returns Location Ids.
     * Fetch shifts for the specified location.
     *
     * @return string[]|null
     */
    public function getLocationIds(): ?array
    {
        return $this->locationIds;
    }

    /**
     * Sets Location Ids.
     * Fetch shifts for the specified location.
     *
     * @maps location_ids
     *
     * @param string[]|null $locationIds
     */
    public function setLocationIds(?array $locationIds): void
    {
        $this->locationIds = $locationIds;
    }

    /**
     * Returns Employee Ids.
     * Fetch shifts for the specified employees. DEPRECATED at version 2020-08-26. Use `team_member_ids`
     * instead.
     *
     * @return string[]|null
     */
    public function getEmployeeIds(): ?array
    {
        return $this->employeeIds;
    }

    /**
     * Sets Employee Ids.
     * Fetch shifts for the specified employees. DEPRECATED at version 2020-08-26. Use `team_member_ids`
     * instead.
     *
     * @maps employee_ids
     *
     * @param string[]|null $employeeIds
     */
    public function setEmployeeIds(?array $employeeIds): void
    {
        $this->employeeIds = $employeeIds;
    }

    /**
     * Returns Status.
     * Specifies the `status` of `Shift` records to be returned.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Specifies the `status` of `Shift` records to be returned.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Start.
     * Represents a generic time range. The start and end values are
     * represented in RFC 3339 format. Time ranges are customized to be
     * inclusive or exclusive based on the needs of a particular endpoint.
     * Refer to the relevant endpoint-specific documentation to determine
     * how time ranges are handled.
     */
    public function getStart(): ?TimeRange
    {
        return $this->start;
    }

    /**
     * Sets Start.
     * Represents a generic time range. The start and end values are
     * represented in RFC 3339 format. Time ranges are customized to be
     * inclusive or exclusive based on the needs of a particular endpoint.
     * Refer to the relevant endpoint-specific documentation to determine
     * how time ranges are handled.
     *
     * @maps start
     */
    public function setStart(?TimeRange $start): void
    {
        $this->start = $start;
    }

    /**
     * Returns End.
     * Represents a generic time range. The start and end values are
     * represented in RFC 3339 format. Time ranges are customized to be
     * inclusive or exclusive based on the needs of a particular endpoint.
     * Refer to the relevant endpoint-specific documentation to determine
     * how time ranges are handled.
     */
    public function getEnd(): ?TimeRange
    {
        return $this->end;
    }

    /**
     * Sets End.
     * Represents a generic time range. The start and end values are
     * represented in RFC 3339 format. Time ranges are customized to be
     * inclusive or exclusive based on the needs of a particular endpoint.
     * Refer to the relevant endpoint-specific documentation to determine
     * how time ranges are handled.
     *
     * @maps end
     */
    public function setEnd(?TimeRange $end): void
    {
        $this->end = $end;
    }

    /**
     * Returns Workday.
     * A `Shift` search query filter parameter that sets a range of days that
     * a `Shift` must start or end in before passing the filter condition.
     */
    public function getWorkday(): ?ShiftWorkday
    {
        return $this->workday;
    }

    /**
     * Sets Workday.
     * A `Shift` search query filter parameter that sets a range of days that
     * a `Shift` must start or end in before passing the filter condition.
     *
     * @maps workday
     */
    public function setWorkday(?ShiftWorkday $workday): void
    {
        $this->workday = $workday;
    }

    /**
     * Returns Location Id.
     *
     * @return string[]|null
     */
    public function getLocationId(): ?array
    {
        return $this->locationId;
    }

    /**
     * Sets Location Id.
     *
     * @maps location_id
     *
     * @param string[]|null $locationId
     */
    public function setLocationId(?array $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * Returns Employee Id.
     *
     * @return string[]|null
     */
    public function getEmployeeId(): ?array
    {
        return $this->employeeId;
    }

    /**
     * Sets Employee Id.
     *
     * @maps employee_id
     *
     * @param string[]|null $employeeId
     */
    public function setEmployeeId(?array $employeeId): void
    {
        $this->employeeId = $employeeId;
    }

    /**
     * Returns Team Member Ids.
     * Fetch shifts for the specified team members. Replaced `employee_ids` at version "2020-08-26".
     *
     * @return string[]|null
     */
    public function getTeamMemberIds(): ?array
    {
        return $this->teamMemberIds;
    }

    /**
     * Sets Team Member Ids.
     * Fetch shifts for the specified team members. Replaced `employee_ids` at version "2020-08-26".
     *
     * @maps team_member_ids
     *
     * @param string[]|null $teamMemberIds
     */
    public function setTeamMemberIds(?array $teamMemberIds): void
    {
        $this->teamMemberIds = $teamMemberIds;
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
        if (isset($this->locationIds)) {
            $json['location_ids']    = $this->locationIds;
        }
        if (isset($this->employeeIds)) {
            $json['employee_ids']    = $this->employeeIds;
        }
        if (isset($this->status)) {
            $json['status']          = $this->status;
        }
        if (isset($this->start)) {
            $json['start']           = $this->start;
        }
        if (isset($this->end)) {
            $json['end']             = $this->end;
        }
        if (isset($this->workday)) {
            $json['workday']         = $this->workday;
        }
        if (isset($this->locationId)) {
            $json['location_id']     = $this->locationId;
        }
        if (isset($this->employeeId)) {
            $json['employee_id']     = $this->employeeId;
        }
        if (isset($this->teamMemberIds)) {
            $json['team_member_ids'] = $this->teamMemberIds;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

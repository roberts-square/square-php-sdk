<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Details of a historical update to a Catalog Object.
 */
class CatalogUpdate implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $occurredAt;

    /**
     * @var SourceApplication|null
     */
    private $source;

    /**
     * @var string|null
     */
    private $locationId;

    /**
     * @var bool|null
     */
    private $fromSquareSupport;

    /**
     * @var string|null
     */
    private $employeeId;

    /**
     * @var string|null
     */
    private $objectChangesCursor;

    /**
     * @var CatalogObjectChange[]|null
     */
    private $objectChanges;

    /**
     * @var string|null
     */
    private $id;

    /**
     * Returns Occurred At.
     * [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates), in RFC 3339
     * format, e.g., "2016-09-04T23:59:33.123Z". The timestamp at which the update occurred.
     */
    public function getOccurredAt(): ?string
    {
        return $this->occurredAt;
    }

    /**
     * Sets Occurred At.
     * [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates), in RFC 3339
     * format, e.g., "2016-09-04T23:59:33.123Z". The timestamp at which the update occurred.
     *
     * @maps occurred_at
     */
    public function setOccurredAt(?string $occurredAt): void
    {
        $this->occurredAt = $occurredAt;
    }

    /**
     * Returns Source.
     * Represents information about the application used to generate a change.
     */
    public function getSource(): ?SourceApplication
    {
        return $this->source;
    }

    /**
     * Sets Source.
     * Represents information about the application used to generate a change.
     *
     * @maps source
     */
    public function setSource(?SourceApplication $source): void
    {
        $this->source = $source;
    }

    /**
     * Returns Location Id.
     * The ID of the location the update applies to.
     */
    public function getLocationId(): ?string
    {
        return $this->locationId;
    }

    /**
     * Sets Location Id.
     * The ID of the location the update applies to.
     *
     * @maps location_id
     */
    public function setLocationId(?string $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * Returns From Square Support.
     * Boolean to be set to true if a change was performed by Square Support on behalf of the merchant.
     */
    public function getFromSquareSupport(): ?bool
    {
        return $this->fromSquareSupport;
    }

    /**
     * Sets From Square Support.
     * Boolean to be set to true if a change was performed by Square Support on behalf of the merchant.
     *
     * @maps from_square_support
     */
    public function setFromSquareSupport(?bool $fromSquareSupport): void
    {
        $this->fromSquareSupport = $fromSquareSupport;
    }

    /**
     * Returns Employee Id.
     * The Square ID of the [Employee]($m/Employee) responsible for the
     * update.
     */
    public function getEmployeeId(): ?string
    {
        return $this->employeeId;
    }

    /**
     * Sets Employee Id.
     * The Square ID of the [Employee]($m/Employee) responsible for the
     * update.
     *
     * @maps employee_id
     */
    public function setEmployeeId(?string $employeeId): void
    {
        $this->employeeId = $employeeId;
    }

    /**
     * Returns Object Changes Cursor.
     * Cursor populated if `object_changes` array is truncated due to more than 100 objects being
     * affected by the update.
     */
    public function getObjectChangesCursor(): ?string
    {
        return $this->objectChangesCursor;
    }

    /**
     * Sets Object Changes Cursor.
     * Cursor populated if `object_changes` array is truncated due to more than 100 objects being
     * affected by the update.
     *
     * @maps object_changes_cursor
     */
    public function setObjectChangesCursor(?string $objectChangesCursor): void
    {
        $this->objectChangesCursor = $objectChangesCursor;
    }

    /**
     * Returns Object Changes.
     * The set of [CatalogObjectChange]($m/CatalogObjectChange)s
     *
     * @return CatalogObjectChange[]|null
     */
    public function getObjectChanges(): ?array
    {
        return $this->objectChanges;
    }

    /**
     * Sets Object Changes.
     * The set of [CatalogObjectChange]($m/CatalogObjectChange)s
     *
     * @maps object_changes
     *
     * @param CatalogObjectChange[]|null $objectChanges
     */
    public function setObjectChanges(?array $objectChanges): void
    {
        $this->objectChanges = $objectChanges;
    }

    /**
     * Returns Id.
     * An identifier to reference this update.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * An identifier to reference this update.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
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
        if (isset($this->occurredAt)) {
            $json['occurred_at']           = $this->occurredAt;
        }
        if (isset($this->source)) {
            $json['source']                = $this->source;
        }
        if (isset($this->locationId)) {
            $json['location_id']           = $this->locationId;
        }
        if (isset($this->fromSquareSupport)) {
            $json['from_square_support']   = $this->fromSquareSupport;
        }
        if (isset($this->employeeId)) {
            $json['employee_id']           = $this->employeeId;
        }
        if (isset($this->objectChangesCursor)) {
            $json['object_changes_cursor'] = $this->objectChangesCursor;
        }
        if (isset($this->objectChanges)) {
            $json['object_changes']        = $this->objectChanges;
        }
        if (isset($this->id)) {
            $json['id']                    = $this->id;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

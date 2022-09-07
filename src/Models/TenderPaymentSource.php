<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Stores additional information on what 3rd party app recorded the Tender.
 */
class TenderPaymentSource implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $applicationId;

    /**
     * @var string|null
     */
    private $applicationName;

    /**
     * Returns Application Id.
     * A global unique id for the 3rd party app which recorded this Tender.
     */
    public function getApplicationId(): ?string
    {
        return $this->applicationId;
    }

    /**
     * Sets Application Id.
     * A global unique id for the 3rd party app which recorded this Tender.
     *
     * @maps application_id
     */
    public function setApplicationId(?string $applicationId): void
    {
        $this->applicationId = $applicationId;
    }

    /**
     * Returns Application Name.
     * A human readable name for the 3rd party app which recorded this Tender.
     */
    public function getApplicationName(): ?string
    {
        return $this->applicationName;
    }

    /**
     * Sets Application Name.
     * A human readable name for the 3rd party app which recorded this Tender.
     *
     * @maps application_name
     */
    public function setApplicationName(?string $applicationName): void
    {
        $this->applicationName = $applicationName;
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
        if (isset($this->applicationId)) {
            $json['application_id']   = $this->applicationId;
        }
        if (isset($this->applicationName)) {
            $json['application_name'] = $this->applicationName;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

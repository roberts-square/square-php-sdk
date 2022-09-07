<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class CatalogConfiguration implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $defaultInventoryTrackingEnabled;

    /**
     * Returns Default Inventory Tracking Enabled.
     * Whether inventory tracking is enabled by default for the creation of new items in this catalog.
     */
    public function getDefaultInventoryTrackingEnabled(): ?bool
    {
        return $this->defaultInventoryTrackingEnabled;
    }

    /**
     * Sets Default Inventory Tracking Enabled.
     * Whether inventory tracking is enabled by default for the creation of new items in this catalog.
     *
     * @maps default_inventory_tracking_enabled
     */
    public function setDefaultInventoryTrackingEnabled(?bool $defaultInventoryTrackingEnabled): void
    {
        $this->defaultInventoryTrackingEnabled = $defaultInventoryTrackingEnabled;
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
        if (isset($this->defaultInventoryTrackingEnabled)) {
            $json['default_inventory_tracking_enabled'] = $this->defaultInventoryTrackingEnabled;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

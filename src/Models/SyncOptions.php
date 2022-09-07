<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class SyncOptions implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $searchXlfLocations;

    /**
     * @var bool|null
     */
    private $onlyFulfillmentOrders;

    /**
     * Returns Search Xlf Locations.
     * Whether to expand query criteria to include cross-location fulfillment locations.
     * There's a slight performance hit compared to not.
     */
    public function getSearchXlfLocations(): ?bool
    {
        return $this->searchXlfLocations;
    }

    /**
     * Sets Search Xlf Locations.
     * Whether to expand query criteria to include cross-location fulfillment locations.
     * There's a slight performance hit compared to not.
     *
     * @maps search_xlf_locations
     */
    public function setSearchXlfLocations(?bool $searchXlfLocations): void
    {
        $this->searchXlfLocations = $searchXlfLocations;
    }

    /**
     * Returns Only Fulfillment Orders.
     * Return only orders that have fulfillments, whether single-location or cross-location.
     */
    public function getOnlyFulfillmentOrders(): ?bool
    {
        return $this->onlyFulfillmentOrders;
    }

    /**
     * Sets Only Fulfillment Orders.
     * Return only orders that have fulfillments, whether single-location or cross-location.
     *
     * @maps only_fulfillment_orders
     */
    public function setOnlyFulfillmentOrders(?bool $onlyFulfillmentOrders): void
    {
        $this->onlyFulfillmentOrders = $onlyFulfillmentOrders;
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
        if (isset($this->searchXlfLocations)) {
            $json['search_xlf_locations']    = $this->searchXlfLocations;
        }
        if (isset($this->onlyFulfillmentOrders)) {
            $json['only_fulfillment_orders'] = $this->onlyFulfillmentOrders;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

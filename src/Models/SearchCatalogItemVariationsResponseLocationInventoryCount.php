<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Contains the inventory count for a specific variation at a specific location.
 */
class SearchCatalogItemVariationsResponseLocationInventoryCount implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $variationId;

    /**
     * @var string|null
     */
    private $locationId;

    /**
     * @var string|null
     */
    private $count;

    /**
     * @var string|null
     */
    private $availableCount;

    /**
     * @var string|null
     */
    private $committedCount;

    /**
     * Returns Variation Id.
     * The variation for this inventory count.
     */
    public function getVariationId(): ?string
    {
        return $this->variationId;
    }

    /**
     * Sets Variation Id.
     * The variation for this inventory count.
     *
     * @maps variation_id
     */
    public function setVariationId(?string $variationId): void
    {
        $this->variationId = $variationId;
    }

    /**
     * Returns Location Id.
     * The location for this inventory count.
     */
    public function getLocationId(): ?string
    {
        return $this->locationId;
    }

    /**
     * Sets Location Id.
     * The location for this inventory count.
     *
     * @maps location_id
     */
    public function setLocationId(?string $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * Returns Count.
     * Inventory count as a decimal string. Supports up to 5 digits after the decimal point.
     */
    public function getCount(): ?string
    {
        return $this->count;
    }

    /**
     * Sets Count.
     * Inventory count as a decimal string. Supports up to 5 digits after the decimal point.
     *
     * @maps count
     */
    public function setCount(?string $count): void
    {
        $this->count = $count;
    }

    /**
     * Returns Available Count.
     * Available count as a decimal string. Supports up to 5 digits after the decimal point. Will be set
     * when merchant is feature flagged in CommittedInventoryForInvoices
     */
    public function getAvailableCount(): ?string
    {
        return $this->availableCount;
    }

    /**
     * Sets Available Count.
     * Available count as a decimal string. Supports up to 5 digits after the decimal point. Will be set
     * when merchant is feature flagged in CommittedInventoryForInvoices
     *
     * @maps available_count
     */
    public function setAvailableCount(?string $availableCount): void
    {
        $this->availableCount = $availableCount;
    }

    /**
     * Returns Committed Count.
     * Committed count as a decimal string. Supports up to 5 digits after the decimal point. Will be set
     * when merchant is feature flagged in CommittedInventoryForInvoices
     */
    public function getCommittedCount(): ?string
    {
        return $this->committedCount;
    }

    /**
     * Sets Committed Count.
     * Committed count as a decimal string. Supports up to 5 digits after the decimal point. Will be set
     * when merchant is feature flagged in CommittedInventoryForInvoices
     *
     * @maps committed_count
     */
    public function setCommittedCount(?string $committedCount): void
    {
        $this->committedCount = $committedCount;
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
        if (isset($this->variationId)) {
            $json['variation_id']    = $this->variationId;
        }
        if (isset($this->locationId)) {
            $json['location_id']     = $this->locationId;
        }
        if (isset($this->count)) {
            $json['count']           = $this->count;
        }
        if (isset($this->availableCount)) {
            $json['available_count'] = $this->availableCount;
        }
        if (isset($this->committedCount)) {
            $json['committed_count'] = $this->committedCount;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

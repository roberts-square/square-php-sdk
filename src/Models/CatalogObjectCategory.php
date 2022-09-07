<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents the relationship between a category (i.e., as a parent category) and an item or another
 * category.
 * For example, a t-shirt item or pants category can be categorized under the clothing category.
 */
class CatalogObjectCategory implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $ordinal;

    /**
     * Returns Id.
     * The ID of the item's/category's category, if any.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The ID of the item's/category's category, if any.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Ordinal.
     * The order placement of the item/category, within the category.
     */
    public function getOrdinal(): ?int
    {
        return $this->ordinal;
    }

    /**
     * Sets Ordinal.
     * The order placement of the item/category, within the category.
     *
     * @maps ordinal
     */
    public function setOrdinal(?int $ordinal): void
    {
        $this->ordinal = $ordinal;
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
        if (isset($this->id)) {
            $json['id']      = $this->id;
        }
        if (isset($this->ordinal)) {
            $json['ordinal'] = $this->ordinal;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

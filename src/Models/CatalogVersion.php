<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * The current version of the catalog
 */
class CatalogVersion implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $updatedAt;

    /**
     * Returns Updated At.
     * A read-only timestamp in RFC 3339 format that indicates when
     * the catalog was updated
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     * A read-only timestamp in RFC 3339 format that indicates when
     * the catalog was updated
     *
     * @maps updated_at
     */
    public function setUpdatedAt(?string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
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
        if (isset($this->updatedAt)) {
            $json['updated_at'] = $this->updatedAt;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

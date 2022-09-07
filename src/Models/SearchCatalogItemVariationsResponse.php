<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Defines the response body returned from the
 * [SearchCatalogItemVariations]($e/Catalog/SearchCatalogItemVariations) endpoint.
 */
class SearchCatalogItemVariationsResponse implements \JsonSerializable
{
    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * @var CatalogObject[]|null
     */
    private $itemVariations;

    /**
     * @var CatalogObject[]|null
     */
    private $relatedObjects;

    /**
     * @var SearchCatalogItemVariationsResponseLocationInventoryCount[]|null
     */
    private $inventoryCounts;

    /**
     * @var string|null
     */
    private $cursor;

    /**
     * Returns Errors.
     * Any errors that occurred during the request.
     *
     * @return Error[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     * Any errors that occurred during the request.
     *
     * @maps errors
     *
     * @param Error[]|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * Returns Item Variations.
     * Returned variations matching the specified query expressions.
     *
     * @return CatalogObject[]|null
     */
    public function getItemVariations(): ?array
    {
        return $this->itemVariations;
    }

    /**
     * Sets Item Variations.
     * Returned variations matching the specified query expressions.
     *
     * @maps item_variations
     *
     * @param CatalogObject[]|null $itemVariations
     */
    public function setItemVariations(?array $itemVariations): void
    {
        $this->itemVariations = $itemVariations;
    }

    /**
     * Returns Related Objects.
     * A list of CatalogObjects related to the variations returned. include_related_objects must be set on
     * the request for this field to be populated.
     *
     * @return CatalogObject[]|null
     */
    public function getRelatedObjects(): ?array
    {
        return $this->relatedObjects;
    }

    /**
     * Sets Related Objects.
     * A list of CatalogObjects related to the variations returned. include_related_objects must be set on
     * the request for this field to be populated.
     *
     * @maps related_objects
     *
     * @param CatalogObject[]|null $relatedObjects
     */
    public function setRelatedObjects(?array $relatedObjects): void
    {
        $this->relatedObjects = $relatedObjects;
    }

    /**
     * Returns Inventory Counts.
     * A list of LocationInventoryCount objects containing inventory count information on a per-variation
     * per-location basis.
     *
     * @return SearchCatalogItemVariationsResponseLocationInventoryCount[]|null
     */
    public function getInventoryCounts(): ?array
    {
        return $this->inventoryCounts;
    }

    /**
     * Sets Inventory Counts.
     * A list of LocationInventoryCount objects containing inventory count information on a per-variation
     * per-location basis.
     *
     * @maps inventory_counts
     *
     * @param SearchCatalogItemVariationsResponseLocationInventoryCount[]|null $inventoryCounts
     */
    public function setInventoryCounts(?array $inventoryCounts): void
    {
        $this->inventoryCounts = $inventoryCounts;
    }

    /**
     * Returns Cursor.
     * Pagination token used in the next request to return more of the search result. Only present if there
     * are more objects to return.
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }

    /**
     * Sets Cursor.
     * Pagination token used in the next request to return more of the search result. Only present if there
     * are more objects to return.
     *
     * @maps cursor
     */
    public function setCursor(?string $cursor): void
    {
        $this->cursor = $cursor;
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
        if (isset($this->errors)) {
            $json['errors']           = $this->errors;
        }
        if (isset($this->itemVariations)) {
            $json['item_variations']  = $this->itemVariations;
        }
        if (isset($this->relatedObjects)) {
            $json['related_objects']  = $this->relatedObjects;
        }
        if (isset($this->inventoryCounts)) {
            $json['inventory_counts'] = $this->inventoryCounts;
        }
        if (isset($this->cursor)) {
            $json['cursor']           = $this->cursor;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

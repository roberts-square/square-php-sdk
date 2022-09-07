<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Defines the request body for the
 * [SearchCatalogItemVariations]($e/Catalog/SearchCatalogItemVariations) endpoint.
 */
class SearchCatalogItemVariationsRequest implements \JsonSerializable
{
    /**
     * @var MultiFieldTextFilter[]|null
     */
    private $textFilter;

    /**
     * @var string[]|null
     */
    private $categoryIds;

    /**
     * @var string[]|null
     */
    private $stockLevels;

    /**
     * @var string[]|null
     */
    private $enabledLocationIds;

    /**
     * @var Sort|null
     */
    private $sort;

    /**
     * @var CustomAttributeFilter[]|null
     */
    private $customAttributeFilters;

    /**
     * @var string[]|null
     */
    private $trackInventoryLocationIds;

    /**
     * @var string[]|null
     */
    private $includeRelatedObjects;

    /**
     * @var int|null
     */
    private $limit;

    /**
     * @var string|null
     */
    private $cursor;

    /**
     * Returns Text Filter.
     * The text filters to apply to this search, and the attributes to which they should be applied.
     * Defaults to all available attributes.
     *
     * @return MultiFieldTextFilter[]|null
     */
    public function getTextFilter(): ?array
    {
        return $this->textFilter;
    }

    /**
     * Sets Text Filter.
     * The text filters to apply to this search, and the attributes to which they should be applied.
     * Defaults to all available attributes.
     *
     * @maps text_filter
     *
     * @param MultiFieldTextFilter[]|null $textFilter
     */
    public function setTextFilter(?array $textFilter): void
    {
        $this->textFilter = $textFilter;
    }

    /**
     * Returns Category Ids.
     * The category id query expression to return item variations containing the specified category tokens.
     *
     * @return string[]|null
     */
    public function getCategoryIds(): ?array
    {
        return $this->categoryIds;
    }

    /**
     * Sets Category Ids.
     * The category id query expression to return item variations containing the specified category tokens.
     *
     * @maps category_ids
     *
     * @param string[]|null $categoryIds
     */
    public function setCategoryIds(?array $categoryIds): void
    {
        $this->categoryIds = $categoryIds;
    }

    /**
     * Returns Stock Levels.
     * The stock-level query expression to return item variations with the specified stock levels.
     *
     * @return string[]|null
     */
    public function getStockLevels(): ?array
    {
        return $this->stockLevels;
    }

    /**
     * Sets Stock Levels.
     * The stock-level query expression to return item variations with the specified stock levels.
     *
     * @maps stock_levels
     *
     * @param string[]|null $stockLevels
     */
    public function setStockLevels(?array $stockLevels): void
    {
        $this->stockLevels = $stockLevels;
    }

    /**
     * Returns Enabled Location Ids.
     * The enabled-location query expression to return item variations having the specified enabled
     * locations.
     *
     * @return string[]|null
     */
    public function getEnabledLocationIds(): ?array
    {
        return $this->enabledLocationIds;
    }

    /**
     * Sets Enabled Location Ids.
     * The enabled-location query expression to return item variations having the specified enabled
     * locations.
     *
     * @maps enabled_location_ids
     *
     * @param string[]|null $enabledLocationIds
     */
    public function setEnabledLocationIds(?array $enabledLocationIds): void
    {
        $this->enabledLocationIds = $enabledLocationIds;
    }

    /**
     * Returns Sort.
     * Specifies how the variations returned by the search are sorted by designating a sort field and a
     * sort order.
     */
    public function getSort(): ?Sort
    {
        return $this->sort;
    }

    /**
     * Sets Sort.
     * Specifies how the variations returned by the search are sorted by designating a sort field and a
     * sort order.
     *
     * @maps sort
     */
    public function setSort(?Sort $sort): void
    {
        $this->sort = $sort;
    }

    /**
     * Returns Custom Attribute Filters.
     * The customer-attribute filter to return items or item variations matching the specified custom
     * attribute expressions.
     * A maximum number of 10 custom attribute expressions are supported in a single call to the
     * SearchCatalogItemVariations endpoint.
     *
     * @return CustomAttributeFilter[]|null
     */
    public function getCustomAttributeFilters(): ?array
    {
        return $this->customAttributeFilters;
    }

    /**
     * Sets Custom Attribute Filters.
     * The customer-attribute filter to return items or item variations matching the specified custom
     * attribute expressions.
     * A maximum number of 10 custom attribute expressions are supported in a single call to the
     * SearchCatalogItemVariations endpoint.
     *
     * @maps custom_attribute_filters
     *
     * @param CustomAttributeFilter[]|null $customAttributeFilters
     */
    public function setCustomAttributeFilters(?array $customAttributeFilters): void
    {
        $this->customAttributeFilters = $customAttributeFilters;
    }

    /**
     * Returns Track Inventory Location Ids.
     * The list of locations for which to only return variations that have inventory tracking enabled.
     *
     * @return string[]|null
     */
    public function getTrackInventoryLocationIds(): ?array
    {
        return $this->trackInventoryLocationIds;
    }

    /**
     * Sets Track Inventory Location Ids.
     * The list of locations for which to only return variations that have inventory tracking enabled.
     *
     * @maps track_inventory_location_ids
     *
     * @param string[]|null $trackInventoryLocationIds
     */
    public function setTrackInventoryLocationIds(?array $trackInventoryLocationIds): void
    {
        $this->trackInventoryLocationIds = $trackInventoryLocationIds;
    }

    /**
     * Returns Include Related Objects.
     * If present, fetches and includes unsorted, adjacent catalog objects in the response. Acceptable
     * value: ITEM.
     *
     * @return string[]|null
     */
    public function getIncludeRelatedObjects(): ?array
    {
        return $this->includeRelatedObjects;
    }

    /**
     * Sets Include Related Objects.
     * If present, fetches and includes unsorted, adjacent catalog objects in the response. Acceptable
     * value: ITEM.
     *
     * @maps include_related_objects
     *
     * @param string[]|null $includeRelatedObjects
     */
    public function setIncludeRelatedObjects(?array $includeRelatedObjects): void
    {
        $this->includeRelatedObjects = $includeRelatedObjects;
    }

    /**
     * Returns Limit.
     * The maximum number of results to return per page. The default value is 100.
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * Sets Limit.
     * The maximum number of results to return per page. The default value is 100.
     *
     * @maps limit
     */
    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * Returns Cursor.
     * The pagination token, returned in the previous response, used to fetch the next batch of pending
     * results.
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }

    /**
     * Sets Cursor.
     * The pagination token, returned in the previous response, used to fetch the next batch of pending
     * results.
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
        if (isset($this->textFilter)) {
            $json['text_filter']                  = $this->textFilter;
        }
        if (isset($this->categoryIds)) {
            $json['category_ids']                 = $this->categoryIds;
        }
        if (isset($this->stockLevels)) {
            $json['stock_levels']                 = $this->stockLevels;
        }
        if (isset($this->enabledLocationIds)) {
            $json['enabled_location_ids']         = $this->enabledLocationIds;
        }
        if (isset($this->sort)) {
            $json['sort']                         = $this->sort;
        }
        if (isset($this->customAttributeFilters)) {
            $json['custom_attribute_filters']     = $this->customAttributeFilters;
        }
        if (isset($this->trackInventoryLocationIds)) {
            $json['track_inventory_location_ids'] = $this->trackInventoryLocationIds;
        }
        if (isset($this->includeRelatedObjects)) {
            $json['include_related_objects']      = $this->includeRelatedObjects;
        }
        if (isset($this->limit)) {
            $json['limit']                        = $this->limit;
        }
        if (isset($this->cursor)) {
            $json['cursor']                       = $this->cursor;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

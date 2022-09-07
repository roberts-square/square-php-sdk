<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Supported query expressions to search for items or item variations.
 * When supplying any of the query expressions, be aware that newly created or updated
 * items or item variations may not appear in the search result if the search request
 * is submitted in 5 seconds or less after the items are created or updated. In this
 * case, the search result may include the items or item variations with old data if they
 * are updated, or the search result may not include the items or item variations at all
 * if they are newly created.
 */
class CatalogQueryFilteredItems implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $textFilter;

    /**
     * @var bool|null
     */
    private $searchVendorCode;

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
     * @var string[]|null
     */
    private $vendorIds;

    /**
     * @var string[]|null
     */
    private $productTypes;

    /**
     * @var CatalogQueryFilteredItemsCustomAttributeFilter[]|null
     */
    private $customAttributeFilters;

    /**
     * @var string[]|null
     */
    private $doesNotExist;

    /**
     * @var string|null
     */
    private $sortOrder;

    /**
     * Returns Text Filter.
     * The text query expression to search for items or item variations by
     * matching items' `name`, `abbreviation`, or `description` or item variations'
     * `name`, `sku` or `upc` attribute values against the specified text tokens.
     */
    public function getTextFilter(): ?string
    {
        return $this->textFilter;
    }

    /**
     * Sets Text Filter.
     * The text query expression to search for items or item variations by
     * matching items' `name`, `abbreviation`, or `description` or item variations'
     * `name`, `sku` or `upc` attribute values against the specified text tokens.
     *
     * @maps text_filter
     */
    public function setTextFilter(?string $textFilter): void
    {
        $this->textFilter = $textFilter;
    }

    /**
     * Returns Search Vendor Code.
     * The boolean expression to specify whether with the `text_filter` expression is also applied
     * to search for items or item variations to match seller's vendor codes against the
     * specified vendor code in `text_filter`.
     */
    public function getSearchVendorCode(): ?bool
    {
        return $this->searchVendorCode;
    }

    /**
     * Sets Search Vendor Code.
     * The boolean expression to specify whether with the `text_filter` expression is also applied
     * to search for items or item variations to match seller's vendor codes against the
     * specified vendor code in `text_filter`.
     *
     * @maps search_vendor_code
     */
    public function setSearchVendorCode(?bool $searchVendorCode): void
    {
        $this->searchVendorCode = $searchVendorCode;
    }

    /**
     * Returns Category Ids.
     * The category query expression to search for items or item variations by matching IDs
     * of their associated categories against the specified category IDs.
     *
     * @return string[]|null
     */
    public function getCategoryIds(): ?array
    {
        return $this->categoryIds;
    }

    /**
     * Sets Category Ids.
     * The category query expression to search for items or item variations by matching IDs
     * of their associated categories against the specified category IDs.
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
     * A query expression to search for item or item variations by matching items' stock levels
     * against the specified stock levels.
     * See [CatalogQueryFilteredItemsStockLevel](#type-catalogqueryfiltereditemsstocklevel) for possible
     * values
     *
     * @return string[]|null
     */
    public function getStockLevels(): ?array
    {
        return $this->stockLevels;
    }

    /**
     * Sets Stock Levels.
     * A query expression to search for item or item variations by matching items' stock levels
     * against the specified stock levels.
     * See [CatalogQueryFilteredItemsStockLevel](#type-catalogqueryfiltereditemsstocklevel) for possible
     * values
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
     * A query expression to search for items by matching IDs of items' enabled locations
     * against the specified location IDs.
     *
     * @return string[]|null
     */
    public function getEnabledLocationIds(): ?array
    {
        return $this->enabledLocationIds;
    }

    /**
     * Sets Enabled Location Ids.
     * A query expression to search for items by matching IDs of items' enabled locations
     * against the specified location IDs.
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
     * Returns Vendor Ids.
     * A query expression to search for item or item variations by matching items' vendor
     * IDs against the specified vendor IDs.
     *
     * @return string[]|null
     */
    public function getVendorIds(): ?array
    {
        return $this->vendorIds;
    }

    /**
     * Sets Vendor Ids.
     * A query expression to search for item or item variations by matching items' vendor
     * IDs against the specified vendor IDs.
     *
     * @maps vendor_ids
     *
     * @param string[]|null $vendorIds
     */
    public function setVendorIds(?array $vendorIds): void
    {
        $this->vendorIds = $vendorIds;
    }

    /**
     * Returns Product Types.
     * A query expression to search for items or item variations by matching items'
     * product types against the specified product types.
     * See [CatalogItemProductType](#type-catalogitemproducttype) for possible values
     *
     * @return string[]|null
     */
    public function getProductTypes(): ?array
    {
        return $this->productTypes;
    }

    /**
     * Sets Product Types.
     * A query expression to search for items or item variations by matching items'
     * product types against the specified product types.
     * See [CatalogItemProductType](#type-catalogitemproducttype) for possible values
     *
     * @maps product_types
     *
     * @param string[]|null $productTypes
     */
    public function setProductTypes(?array $productTypes): void
    {
        $this->productTypes = $productTypes;
    }

    /**
     * Returns Custom Attribute Filters.
     * One or more query expressions used to search by custom attributes to match all
     * of the specified query expressions. A maximum number of 10 custom attribute expressions
     * are supported in a call to the [SearchCatalogItems]($e/Catalog/SearchCatalogItems)
     * endpoint.
     *
     * @return CatalogQueryFilteredItemsCustomAttributeFilter[]|null
     */
    public function getCustomAttributeFilters(): ?array
    {
        return $this->customAttributeFilters;
    }

    /**
     * Sets Custom Attribute Filters.
     * One or more query expressions used to search by custom attributes to match all
     * of the specified query expressions. A maximum number of 10 custom attribute expressions
     * are supported in a call to the [SearchCatalogItems]($e/Catalog/SearchCatalogItems)
     * endpoint.
     *
     * @maps custom_attribute_filters
     *
     * @param CatalogQueryFilteredItemsCustomAttributeFilter[]|null $customAttributeFilters
     */
    public function setCustomAttributeFilters(?array $customAttributeFilters): void
    {
        $this->customAttributeFilters = $customAttributeFilters;
    }

    /**
     * Returns Does Not Exist.
     * The query expression to return items or item variations if values of the specified
     * attributes matching an associated query expression or the specified attributes do not
     * exist.
     * See [CatalogQueryFilteredItemsNullableAttribute](#type-catalogqueryfiltereditemsnullableattribute)
     * for possible values
     *
     * @return string[]|null
     */
    public function getDoesNotExist(): ?array
    {
        return $this->doesNotExist;
    }

    /**
     * Sets Does Not Exist.
     * The query expression to return items or item variations if values of the specified
     * attributes matching an associated query expression or the specified attributes do not
     * exist.
     * See [CatalogQueryFilteredItemsNullableAttribute](#type-catalogqueryfiltereditemsnullableattribute)
     * for possible values
     *
     * @maps does_not_exist
     *
     * @param string[]|null $doesNotExist
     */
    public function setDoesNotExist(?array $doesNotExist): void
    {
        $this->doesNotExist = $doesNotExist;
    }

    /**
     * Returns Sort Order.
     * The order (e.g., chronological or alphabetical) in which results from a request are returned.
     */
    public function getSortOrder(): ?string
    {
        return $this->sortOrder;
    }

    /**
     * Sets Sort Order.
     * The order (e.g., chronological or alphabetical) in which results from a request are returned.
     *
     * @maps sort_order
     */
    public function setSortOrder(?string $sortOrder): void
    {
        $this->sortOrder = $sortOrder;
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
            $json['text_filter']              = $this->textFilter;
        }
        if (isset($this->searchVendorCode)) {
            $json['search_vendor_code']       = $this->searchVendorCode;
        }
        if (isset($this->categoryIds)) {
            $json['category_ids']             = $this->categoryIds;
        }
        if (isset($this->stockLevels)) {
            $json['stock_levels']             = $this->stockLevels;
        }
        if (isset($this->enabledLocationIds)) {
            $json['enabled_location_ids']     = $this->enabledLocationIds;
        }
        if (isset($this->vendorIds)) {
            $json['vendor_ids']               = $this->vendorIds;
        }
        if (isset($this->productTypes)) {
            $json['product_types']            = $this->productTypes;
        }
        if (isset($this->customAttributeFilters)) {
            $json['custom_attribute_filters'] = $this->customAttributeFilters;
        }
        if (isset($this->doesNotExist)) {
            $json['does_not_exist']           = $this->doesNotExist;
        }
        if (isset($this->sortOrder)) {
            $json['sort_order']               = $this->sortOrder;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

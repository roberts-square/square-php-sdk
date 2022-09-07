<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * A query filter to search for items or item variations by matching
 * their custom attribute values against one or more of the supported query expressions.
 */
class CatalogQueryFilteredItemsCustomAttributeFilter implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $filterType;

    /**
     * @var string[]|null
     */
    private $customAttributeDefinitionIds;

    /**
     * @var string|null
     */
    private $customAttributeValueExact;

    /**
     * @var string|null
     */
    private $customAttributeValuePrefix;

    /**
     * @var string|null
     */
    private $customAttributeMinValue;

    /**
     * @var string|null
     */
    private $customAttributeMaxValue;

    /**
     * Returns Filter Type.
     * Supported types of a custom attribute query expression.
     */
    public function getFilterType(): ?string
    {
        return $this->filterType;
    }

    /**
     * Sets Filter Type.
     * Supported types of a custom attribute query expression.
     *
     * @maps filter_type
     */
    public function setFilterType(?string $filterType): void
    {
        $this->filterType = $filterType;
    }

    /**
     * Returns Custom Attribute Definition Ids.
     * The query expression to return items or item variations by matching the
     * `custom_attribute_definition_ids` property of contained custom attribute values
     * against the specified custom attribute definition IDs.
     *
     * @return string[]|null
     */
    public function getCustomAttributeDefinitionIds(): ?array
    {
        return $this->customAttributeDefinitionIds;
    }

    /**
     * Sets Custom Attribute Definition Ids.
     * The query expression to return items or item variations by matching the
     * `custom_attribute_definition_ids` property of contained custom attribute values
     * against the specified custom attribute definition IDs.
     *
     * @maps custom_attribute_definition_ids
     *
     * @param string[]|null $customAttributeDefinitionIds
     */
    public function setCustomAttributeDefinitionIds(?array $customAttributeDefinitionIds): void
    {
        $this->customAttributeDefinitionIds = $customAttributeDefinitionIds;
    }

    /**
     * Returns Custom Attribute Value Exact.
     * The query expression used, when `filter_type = EXACT`, to return items or
     * item variations by matching corresponding custom attribute values against the
     * specified text tokens exactly. Specifying an empty string, you will get
     * all results that have no value for the given custom attribute,
     * either because the specified attribute is not present on the object, or because
     * the attribute has an empty value.
     */
    public function getCustomAttributeValueExact(): ?string
    {
        return $this->customAttributeValueExact;
    }

    /**
     * Sets Custom Attribute Value Exact.
     * The query expression used, when `filter_type = EXACT`, to return items or
     * item variations by matching corresponding custom attribute values against the
     * specified text tokens exactly. Specifying an empty string, you will get
     * all results that have no value for the given custom attribute,
     * either because the specified attribute is not present on the object, or because
     * the attribute has an empty value.
     *
     * @maps custom_attribute_value_exact
     */
    public function setCustomAttributeValueExact(?string $customAttributeValueExact): void
    {
        $this->customAttributeValueExact = $customAttributeValueExact;
    }

    /**
     * Returns Custom Attribute Value Prefix.
     * The query expression used, when `filter_type = PREFIX`, to return items or
     * item variations by matching the start of corresponding custom attribute values
     * against the specified text tokens.
     */
    public function getCustomAttributeValuePrefix(): ?string
    {
        return $this->customAttributeValuePrefix;
    }

    /**
     * Sets Custom Attribute Value Prefix.
     * The query expression used, when `filter_type = PREFIX`, to return items or
     * item variations by matching the start of corresponding custom attribute values
     * against the specified text tokens.
     *
     * @maps custom_attribute_value_prefix
     */
    public function setCustomAttributeValuePrefix(?string $customAttributeValuePrefix): void
    {
        $this->customAttributeValuePrefix = $customAttributeValuePrefix;
    }

    /**
     * Returns Custom Attribute Min Value.
     * The query expression used, when `filter_type = RANGE`, to return items or
     * item variations with corresponding custom attribute numerical values
     * greater than the specified lower bound.
     */
    public function getCustomAttributeMinValue(): ?string
    {
        return $this->customAttributeMinValue;
    }

    /**
     * Sets Custom Attribute Min Value.
     * The query expression used, when `filter_type = RANGE`, to return items or
     * item variations with corresponding custom attribute numerical values
     * greater than the specified lower bound.
     *
     * @maps custom_attribute_min_value
     */
    public function setCustomAttributeMinValue(?string $customAttributeMinValue): void
    {
        $this->customAttributeMinValue = $customAttributeMinValue;
    }

    /**
     * Returns Custom Attribute Max Value.
     * The query expression used, when `filter_type = RANGE`, to return items or
     * item variations with corresponding custom attribute numerical values
     * less than the specified upper bound.
     */
    public function getCustomAttributeMaxValue(): ?string
    {
        return $this->customAttributeMaxValue;
    }

    /**
     * Sets Custom Attribute Max Value.
     * The query expression used, when `filter_type = RANGE`, to return items or
     * item variations with corresponding custom attribute numerical values
     * less than the specified upper bound.
     *
     * @maps custom_attribute_max_value
     */
    public function setCustomAttributeMaxValue(?string $customAttributeMaxValue): void
    {
        $this->customAttributeMaxValue = $customAttributeMaxValue;
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
        if (isset($this->filterType)) {
            $json['filter_type']                     = $this->filterType;
        }
        if (isset($this->customAttributeDefinitionIds)) {
            $json['custom_attribute_definition_ids'] = $this->customAttributeDefinitionIds;
        }
        if (isset($this->customAttributeValueExact)) {
            $json['custom_attribute_value_exact']    = $this->customAttributeValueExact;
        }
        if (isset($this->customAttributeValuePrefix)) {
            $json['custom_attribute_value_prefix']   = $this->customAttributeValuePrefix;
        }
        if (isset($this->customAttributeMinValue)) {
            $json['custom_attribute_min_value']      = $this->customAttributeMinValue;
        }
        if (isset($this->customAttributeMaxValue)) {
            $json['custom_attribute_max_value']      = $this->customAttributeMaxValue;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

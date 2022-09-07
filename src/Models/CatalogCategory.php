<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * A category to which a `CatalogItem` instance belongs.
 */
class CatalogCategory implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $abbreviation;

    /**
     * @var string|null
     */
    private $labelColor;

    /**
     * @var string[]|null
     */
    private $imageIds;

    /**
     * @var CatalogObjectCategory|null
     */
    private $parentCategory;

    /**
     * @var bool|null
     */
    private $isTopLevel;

    /**
     * Returns Name.
     * The category name. This is a searchable attribute for use in applicable query filters, and its value
     * length is of Unicode code points.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The category name. This is a searchable attribute for use in applicable query filters, and its value
     * length is of Unicode code points.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Abbreviation.
     * The text of the category's tile in the Square Point of Sale app. Only up to the first five
     * characters of the string are used.
     */
    public function getAbbreviation(): ?string
    {
        return $this->abbreviation;
    }

    /**
     * Sets Abbreviation.
     * The text of the category's tile in the Square Point of Sale app. Only up to the first five
     * characters of the string are used.
     *
     * @maps abbreviation
     */
    public function setAbbreviation(?string $abbreviation): void
    {
        $this->abbreviation = $abbreviation;
    }

    /**
     * Returns Label Color.
     * The color of the category's tile in the Square Point of Sale app. This must be a valid hex color
     * code without the leading '#'.
     */
    public function getLabelColor(): ?string
    {
        return $this->labelColor;
    }

    /**
     * Sets Label Color.
     * The color of the category's tile in the Square Point of Sale app. This must be a valid hex color
     * code without the leading '#'.
     *
     * @maps label_color
     */
    public function setLabelColor(?string $labelColor): void
    {
        $this->labelColor = $labelColor;
    }

    /**
     * Returns Image Ids.
     * The IDs of images associated with this `CatalogCategory` instance.
     * Currently these images are not displayed by Square, but are free to be displayed in 3rd party
     * applications.
     *
     * @return string[]|null
     */
    public function getImageIds(): ?array
    {
        return $this->imageIds;
    }

    /**
     * Sets Image Ids.
     * The IDs of images associated with this `CatalogCategory` instance.
     * Currently these images are not displayed by Square, but are free to be displayed in 3rd party
     * applications.
     *
     * @maps image_ids
     *
     * @param string[]|null $imageIds
     */
    public function setImageIds(?array $imageIds): void
    {
        $this->imageIds = $imageIds;
    }

    /**
     * Returns Parent Category.
     * Represents the relationship between a category (i.e., as a parent category) and an item or another
     * category.
     * For example, a t-shirt item or pants category can be categorized under the clothing category.
     */
    public function getParentCategory(): ?CatalogObjectCategory
    {
        return $this->parentCategory;
    }

    /**
     * Sets Parent Category.
     * Represents the relationship between a category (i.e., as a parent category) and an item or another
     * category.
     * For example, a t-shirt item or pants category can be categorized under the clothing category.
     *
     * @maps parent_category
     */
    public function setParentCategory(?CatalogObjectCategory $parentCategory): void
    {
        $this->parentCategory = $parentCategory;
    }

    /**
     * Returns Is Top Level.
     * Indicates whether a category is a top level category (i.e. doesn't have a parent_category)
     */
    public function getIsTopLevel(): ?bool
    {
        return $this->isTopLevel;
    }

    /**
     * Sets Is Top Level.
     * Indicates whether a category is a top level category (i.e. doesn't have a parent_category)
     *
     * @maps is_top_level
     */
    public function setIsTopLevel(?bool $isTopLevel): void
    {
        $this->isTopLevel = $isTopLevel;
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
        if (isset($this->name)) {
            $json['name']            = $this->name;
        }
        if (isset($this->abbreviation)) {
            $json['abbreviation']    = $this->abbreviation;
        }
        if (isset($this->labelColor)) {
            $json['label_color']     = $this->labelColor;
        }
        if (isset($this->imageIds)) {
            $json['image_ids']       = $this->imageIds;
        }
        if (isset($this->parentCategory)) {
            $json['parent_category'] = $this->parentCategory;
        }
        if (isset($this->isTopLevel)) {
            $json['is_top_level']    = $this->isTopLevel;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

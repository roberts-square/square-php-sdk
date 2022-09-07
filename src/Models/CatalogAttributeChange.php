<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Details of a change to a single `CatalogAttribute` in a
 * `CatalogObjectChange`.
 */
class CatalogAttributeChange implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $attributeField;

    /**
     * @var string|null
     */
    private $customAttributeId;

    /**
     * @var string|null
     */
    private $attributeDisplayName;

    /**
     * @var string|null
     */
    private $attributeType;

    /**
     * @var CatalogAttributeValue|null
     */
    private $previousValue;

    /**
     * @var CatalogAttributeValue|null
     */
    private $newValue;

    /**
     * @var CatalogNestedChange[]|null
     */
    private $nestedChanges;

    /**
     * Returns Attribute Field.
     * fully qualified path to field in API if change is NOT to a custom attribute e.g. `"item_data.name"`
     */
    public function getAttributeField(): ?string
    {
        return $this->attributeField;
    }

    /**
     * Sets Attribute Field.
     * fully qualified path to field in API if change is NOT to a custom attribute e.g. `"item_data.name"`
     *
     * @maps attribute_field
     */
    public function setAttributeField(?string $attributeField): void
    {
        $this->attributeField = $attributeField;
    }

    /**
     * Returns Custom Attribute Id.
     * id of custom attribute if change is to a custom attribute
     */
    public function getCustomAttributeId(): ?string
    {
        return $this->customAttributeId;
    }

    /**
     * Sets Custom Attribute Id.
     * id of custom attribute if change is to a custom attribute
     *
     * @maps custom_attribute_id
     */
    public function setCustomAttributeId(?string $customAttributeId): void
    {
        $this->customAttributeId = $customAttributeId;
    }

    /**
     * Returns Attribute Display Name.
     * display name of attribute e.g. "Name", "Price", "Vintage" (custom)
     */
    public function getAttributeDisplayName(): ?string
    {
        return $this->attributeDisplayName;
    }

    /**
     * Sets Attribute Display Name.
     * display name of attribute e.g. "Name", "Price", "Vintage" (custom)
     *
     * @maps attribute_display_name
     */
    public function setAttributeDisplayName(?string $attributeDisplayName): void
    {
        $this->attributeDisplayName = $attributeDisplayName;
    }

    /**
     * Returns Attribute Type.
     * Type of a changed CatalogAttribute.
     */
    public function getAttributeType(): ?string
    {
        return $this->attributeType;
    }

    /**
     * Sets Attribute Type.
     * Type of a changed CatalogAttribute.
     *
     * @maps attribute_type
     */
    public function setAttributeType(?string $attributeType): void
    {
        $this->attributeType = $attributeType;
    }

    /**
     * Returns Previous Value.
     * An object defining the attribute value affected by a `CatalogUpdate` event.
     */
    public function getPreviousValue(): ?CatalogAttributeValue
    {
        return $this->previousValue;
    }

    /**
     * Sets Previous Value.
     * An object defining the attribute value affected by a `CatalogUpdate` event.
     *
     * @maps previous_value
     */
    public function setPreviousValue(?CatalogAttributeValue $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * Returns New Value.
     * An object defining the attribute value affected by a `CatalogUpdate` event.
     */
    public function getNewValue(): ?CatalogAttributeValue
    {
        return $this->newValue;
    }

    /**
     * Sets New Value.
     * An object defining the attribute value affected by a `CatalogUpdate` event.
     *
     * @maps new_value
     */
    public function setNewValue(?CatalogAttributeValue $newValue): void
    {
        $this->newValue = $newValue;
    }

    /**
     * Returns Nested Changes.
     * If `attribute_type` is `NESTED`, this field will be populated with nested changes.
     *
     * @return CatalogNestedChange[]|null
     */
    public function getNestedChanges(): ?array
    {
        return $this->nestedChanges;
    }

    /**
     * Sets Nested Changes.
     * If `attribute_type` is `NESTED`, this field will be populated with nested changes.
     *
     * @maps nested_changes
     *
     * @param CatalogNestedChange[]|null $nestedChanges
     */
    public function setNestedChanges(?array $nestedChanges): void
    {
        $this->nestedChanges = $nestedChanges;
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
        if (isset($this->attributeField)) {
            $json['attribute_field']        = $this->attributeField;
        }
        if (isset($this->customAttributeId)) {
            $json['custom_attribute_id']    = $this->customAttributeId;
        }
        if (isset($this->attributeDisplayName)) {
            $json['attribute_display_name'] = $this->attributeDisplayName;
        }
        if (isset($this->attributeType)) {
            $json['attribute_type']         = $this->attributeType;
        }
        if (isset($this->previousValue)) {
            $json['previous_value']         = $this->previousValue;
        }
        if (isset($this->newValue)) {
            $json['new_value']              = $this->newValue;
        }
        if (isset($this->nestedChanges)) {
            $json['nested_changes']         = $this->nestedChanges;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

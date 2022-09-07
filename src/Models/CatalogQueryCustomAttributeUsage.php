<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class CatalogQueryCustomAttributeUsage implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $customAttributeDefinitionIds;

    /**
     * @var bool|null
     */
    private $hasValue;

    /**
     * Returns Custom Attribute Definition Ids.
     * The set of Custom Attribute Definition ids to search for.
     *
     * @return string[]|null
     */
    public function getCustomAttributeDefinitionIds(): ?array
    {
        return $this->customAttributeDefinitionIds;
    }

    /**
     * Sets Custom Attribute Definition Ids.
     * The set of Custom Attribute Definition ids to search for.
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
     * Returns Has Value.
     * If true, search for objects that contain a value for all of the given
     * definitions. If false, search for objects that do not contain a value for
     * and of the given definitions.
     */
    public function getHasValue(): ?bool
    {
        return $this->hasValue;
    }

    /**
     * Sets Has Value.
     * If true, search for objects that contain a value for all of the given
     * definitions. If false, search for objects that do not contain a value for
     * and of the given definitions.
     *
     * @maps has_value
     */
    public function setHasValue(?bool $hasValue): void
    {
        $this->hasValue = $hasValue;
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
        if (isset($this->customAttributeDefinitionIds)) {
            $json['custom_attribute_definition_ids'] = $this->customAttributeDefinitionIds;
        }
        if (isset($this->hasValue)) {
            $json['has_value']                       = $this->hasValue;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

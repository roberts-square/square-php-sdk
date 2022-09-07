<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a delete request for a `CustomAttribute` object in a BulkDeleteOrderCustomAttributes
 * request
 */
class BulkDeleteOrderCustomAttributesRequestDeleteCustomAttribute implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $definitionId;

    /**
     * @var string|null
     */
    private $key;

    /**
     * Returns Definition Id.
     * The id of the associated custom attribute definition.
     */
    public function getDefinitionId(): ?string
    {
        return $this->definitionId;
    }

    /**
     * Sets Definition Id.
     * The id of the associated custom attribute definition.
     *
     * @maps definition_id
     */
    public function setDefinitionId(?string $definitionId): void
    {
        $this->definitionId = $definitionId;
    }

    /**
     * Returns Key.
     * The key of the associated custom attribute definition.
     * Represented as a qualified key if the requesting app is not the definition owner.
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * Sets Key.
     * The key of the associated custom attribute definition.
     * Represented as a qualified key if the requesting app is not the definition owner.
     *
     * @maps key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
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
        if (isset($this->definitionId)) {
            $json['definition_id'] = $this->definitionId;
        }
        if (isset($this->key)) {
            $json['key']           = $this->key;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

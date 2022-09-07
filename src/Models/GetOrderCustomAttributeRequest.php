<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a get request for a `CustomAttribute` object.
 */
class GetOrderCustomAttributeRequest implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $version;

    /**
     * @var bool|null
     */
    private $withDefinition;

    /**
     * Returns Version.
     * Used for optimistic concurrency. The `version` of the `CustomAttribute` returned will be
     * at least equal to the version set.
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }

    /**
     * Sets Version.
     * Used for optimistic concurrency. The `version` of the `CustomAttribute` returned will be
     * at least equal to the version set.
     *
     * @maps version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * Returns With Definition.
     * If `true`, the matching `CustomAttributeDefinition` object will be included in the result's
     * `definition` field
     * This flag could be used to avoid making separate calls for the definition and values.
     */
    public function getWithDefinition(): ?bool
    {
        return $this->withDefinition;
    }

    /**
     * Sets With Definition.
     * If `true`, the matching `CustomAttributeDefinition` object will be included in the result's
     * `definition` field
     * This flag could be used to avoid making separate calls for the definition and values.
     *
     * @maps with_definition
     */
    public function setWithDefinition(?bool $withDefinition): void
    {
        $this->withDefinition = $withDefinition;
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
        if (isset($this->version)) {
            $json['version']         = $this->version;
        }
        if (isset($this->withDefinition)) {
            $json['with_definition'] = $this->withDefinition;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

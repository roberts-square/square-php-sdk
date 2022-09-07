<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * A filter for specifying which attributes to consider in a text search.
 */
class MultiFieldTextFilter implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $textFilter;

    /**
     * @var MultiFieldTextFilterFieldValues|null
     */
    private $fields;

    /**
     * Returns Text Filter.
     * The text to search for.
     */
    public function getTextFilter(): ?string
    {
        return $this->textFilter;
    }

    /**
     * Sets Text Filter.
     * The text to search for.
     *
     * @maps text_filter
     */
    public function setTextFilter(?string $textFilter): void
    {
        $this->textFilter = $textFilter;
    }

    /**
     * Returns Fields.
     * Specifies how each attribute should be considered when filtering.
     */
    public function getFields(): ?MultiFieldTextFilterFieldValues
    {
        return $this->fields;
    }

    /**
     * Sets Fields.
     * Specifies how each attribute should be considered when filtering.
     *
     * @maps fields
     */
    public function setFields(?MultiFieldTextFilterFieldValues $fields): void
    {
        $this->fields = $fields;
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
            $json['text_filter'] = $this->textFilter;
        }
        if (isset($this->fields)) {
            $json['fields']      = $this->fields;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

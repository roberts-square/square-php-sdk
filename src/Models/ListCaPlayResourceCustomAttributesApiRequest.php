<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a list request for `CustomAttribute` objects.
 */
class ListCaPlayResourceCustomAttributesApiRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $visibilityFilter;

    /**
     * @var string|null
     */
    private $cursor;

    /**
     * @var int|null
     */
    private $limit;

    /**
     * @var bool|null
     */
    private $withDefinitions;

    /**
     * Returns Visibility Filter.
     * Enumeration of visibility-filter values used to set the ability to view custom attributes or custom
     * attribute definitions.
     */
    public function getVisibilityFilter(): ?string
    {
        return $this->visibilityFilter;
    }

    /**
     * Sets Visibility Filter.
     * Enumeration of visibility-filter values used to set the ability to view custom attributes or custom
     * attribute definitions.
     *
     * @maps visibility_filter
     */
    public function setVisibilityFilter(?string $visibilityFilter): void
    {
        $this->visibilityFilter = $visibilityFilter;
    }

    /**
     * Returns Cursor.
     * A pagination cursor returned by a previous call to this endpoint.
     * Provide this cursor to retrieve the next set of results for your original query.
     * For more information, see [Pagination](https://developer.squareup.com/docs/working-with-
     * apis/pagination).
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }

    /**
     * Sets Cursor.
     * A pagination cursor returned by a previous call to this endpoint.
     * Provide this cursor to retrieve the next set of results for your original query.
     * For more information, see [Pagination](https://developer.squareup.com/docs/working-with-
     * apis/pagination).
     *
     * @maps cursor
     */
    public function setCursor(?string $cursor): void
    {
        $this->cursor = $cursor;
    }

    /**
     * Returns Limit.
     * A limit on the number of results to be returned in a single page. The limit is advisory -
     * the implementation may return more or fewer results. If the supplied limit is negative, zero, or
     * is higher than the maximum limit of 100, the request will fail. Default value: 20.
     * For more information, see [Pagination](https://developer.squareup.com/docs/working-with-
     * apis/pagination).
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * Sets Limit.
     * A limit on the number of results to be returned in a single page. The limit is advisory -
     * the implementation may return more or fewer results. If the supplied limit is negative, zero, or
     * is higher than the maximum limit of 100, the request will fail. Default value: 20.
     * For more information, see [Pagination](https://developer.squareup.com/docs/working-with-
     * apis/pagination).
     *
     * @maps limit
     */
    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * Returns With Definitions.
     * If `true`, the matching `CustomAttributeDefinition` object will be included in each result on the
     * `definition` field.
     * This flag could be used to avoid making separate calls for the definition and values.
     */
    public function getWithDefinitions(): ?bool
    {
        return $this->withDefinitions;
    }

    /**
     * Sets With Definitions.
     * If `true`, the matching `CustomAttributeDefinition` object will be included in each result on the
     * `definition` field.
     * This flag could be used to avoid making separate calls for the definition and values.
     *
     * @maps with_definitions
     */
    public function setWithDefinitions(?bool $withDefinitions): void
    {
        $this->withDefinitions = $withDefinitions;
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
        if (isset($this->visibilityFilter)) {
            $json['visibility_filter'] = $this->visibilityFilter;
        }
        if (isset($this->cursor)) {
            $json['cursor']            = $this->cursor;
        }
        if (isset($this->limit)) {
            $json['limit']             = $this->limit;
        }
        if (isset($this->withDefinitions)) {
            $json['with_definitions']  = $this->withDefinitions;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

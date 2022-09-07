<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a query used to search for `DiscountCode` resources.
 */
class DiscountCodeQuery implements \JsonSerializable
{
    /**
     * @var DiscountCodeFilter
     */
    private $filter;

    /**
     * @param DiscountCodeFilter $filter
     */
    public function __construct(DiscountCodeFilter $filter)
    {
        $this->filter = $filter;
    }

    /**
     * Returns Filter.
     * Filter parameters used to search for discount codes.
     */
    public function getFilter(): DiscountCodeFilter
    {
        return $this->filter;
    }

    /**
     * Sets Filter.
     * Filter parameters used to search for discount codes.
     *
     * @required
     * @maps filter
     */
    public function setFilter(DiscountCodeFilter $filter): void
    {
        $this->filter = $filter;
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
        $json['filter'] = $this->filter;
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

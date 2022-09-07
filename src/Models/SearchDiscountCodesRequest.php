<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class SearchDiscountCodesRequest implements \JsonSerializable
{
    /**
     * @var DiscountCodeQuery
     */
    private $query;

    /**
     * @var string|null
     */
    private $cursor;

    /**
     * @var int|null
     */
    private $limit;

    /**
     * @param DiscountCodeQuery $query
     */
    public function __construct(DiscountCodeQuery $query)
    {
        $this->query = $query;
    }

    /**
     * Returns Query.
     * Represents a query used to search for `DiscountCode` resources.
     */
    public function getQuery(): DiscountCodeQuery
    {
        return $this->query;
    }

    /**
     * Sets Query.
     * Represents a query used to search for `DiscountCode` resources.
     *
     * @required
     * @maps query
     */
    public function setQuery(DiscountCodeQuery $query): void
    {
        $this->query = $query;
    }

    /**
     * Returns Cursor.
     * When a response is truncated, it includes a cursor that you can use in a
     * subsequent request to fetch the next set of discount codes.
     * If it is empty, the response is final.
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }

    /**
     * Sets Cursor.
     * When a response is truncated, it includes a cursor that you can use in a
     * subsequent request to fetch the next set of discount codes.
     * If it is empty, the response is final.
     *
     * @maps cursor
     */
    public function setCursor(?string $cursor): void
    {
        $this->cursor = $cursor;
    }

    /**
     * Returns Limit.
     * The maximum number of discount codes to return (1000 is the maximum `limit`).
     * If the specified limit is negative, zero, or higher than the maximum limit, it is
     * ignored.
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * Sets Limit.
     * The maximum number of discount codes to return (1000 is the maximum `limit`).
     * If the specified limit is negative, zero, or higher than the maximum limit, it is
     * ignored.
     *
     * @maps limit
     */
    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
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
        $json['query']      = $this->query;
        if (isset($this->cursor)) {
            $json['cursor'] = $this->cursor;
        }
        if (isset($this->limit)) {
            $json['limit']  = $this->limit;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

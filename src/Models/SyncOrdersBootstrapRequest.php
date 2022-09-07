<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * The request does not have any required fields. When given no query criteria,
 * `SyncOrdersBootstrap` returns all Open Orders for all of the seller's locations newer than 1 month,
 * up to the default limit of 500. Additional results can be paginated supplying the cursor.
 */
class SyncOrdersBootstrapRequest implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $locationIds;

    /**
     * @var string|null
     */
    private $cursor;

    /**
     * @var int|null
     */
    private $limit;

    /**
     * @var string|null
     */
    private $newerThan;

    /**
     * Returns Location Ids.
     * The location IDs for the orders to query. All locations must belong to
     * the same merchant.
     *
     * Min: 1 location ID.
     *
     * Max: 10 location IDs.
     *
     * @return string[]|null
     */
    public function getLocationIds(): ?array
    {
        return $this->locationIds;
    }

    /**
     * Sets Location Ids.
     * The location IDs for the orders to query. All locations must belong to
     * the same merchant.
     *
     * Min: 1 location ID.
     *
     * Max: 10 location IDs.
     *
     * @maps location_ids
     *
     * @param string[]|null $locationIds
     */
    public function setLocationIds(?array $locationIds): void
    {
        $this->locationIds = $locationIds;
    }

    /**
     * Returns Cursor.
     * A nullable pagination cursor returned by a previous call to this endpoint.
     * Provide this cursor to retrieve the next set of results.
     * For more information, see [Pagination](https://developer.squareup.com/docs/basics/api101/pagination).
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }

    /**
     * Sets Cursor.
     * A nullable pagination cursor returned by a previous call to this endpoint.
     * Provide this cursor to retrieve the next set of results.
     * For more information, see [Pagination](https://developer.squareup.com/docs/basics/api101/pagination).
     *
     * @maps cursor
     */
    public function setCursor(?string $cursor): void
    {
        $this->cursor = $cursor;
    }

    /**
     * Returns Limit.
     * The maximum number of results to be returned in a single page. It is
     * possible to receive fewer results than the specified limit on a given page.
     *
     * Default: `500`
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * Sets Limit.
     * The maximum number of results to be returned in a single page. It is
     * possible to receive fewer results than the specified limit on a given page.
     *
     * Default: `500`
     *
     * @maps limit
     */
    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * Returns Newer Than.
     * Enables pagination to be restricted to newer than the supplied timestamp.
     * DEFAULT: 1 month prior.
     */
    public function getNewerThan(): ?string
    {
        return $this->newerThan;
    }

    /**
     * Sets Newer Than.
     * Enables pagination to be restricted to newer than the supplied timestamp.
     * DEFAULT: 1 month prior.
     *
     * @maps newer_than
     */
    public function setNewerThan(?string $newerThan): void
    {
        $this->newerThan = $newerThan;
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
        if (isset($this->locationIds)) {
            $json['location_ids'] = $this->locationIds;
        }
        if (isset($this->cursor)) {
            $json['cursor']       = $this->cursor;
        }
        if (isset($this->limit)) {
            $json['limit']        = $this->limit;
        }
        if (isset($this->newerThan)) {
            $json['newer_than']   = $this->newerThan;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

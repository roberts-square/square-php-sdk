<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Return orders for the given merchant
 */
class SyncOrdersRequest implements \JsonSerializable
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
    private $softLimit;

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
     * A cursor returned by a previous call to this endpoint.
     * Provide this cursor to retrieve results since the previous sync.
     * If not provided, a cursor is synthesized for the current time, meaning the result set will most
     * likely be empty; however, the cursor in the response can then be used to sync new orders going
     * forward.
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }

    /**
     * Sets Cursor.
     * A cursor returned by a previous call to this endpoint.
     * Provide this cursor to retrieve results since the previous sync.
     * If not provided, a cursor is synthesized for the current time, meaning the result set will most
     * likely be empty; however, the cursor in the response can then be used to sync new orders going
     * forward.
     *
     * @maps cursor
     */
    public function setCursor(?string $cursor): void
    {
        $this->cursor = $cursor;
    }

    /**
     * Returns Soft Limit.
     * The requested maximum number of results to be returned in a single page. It is
     * possible to receive fewer results than the specified limit on a given page. It is also possible
     * to get more than this number of results depending on the underlying database retrievals.
     * Default: `500`
     */
    public function getSoftLimit(): ?int
    {
        return $this->softLimit;
    }

    /**
     * Sets Soft Limit.
     * The requested maximum number of results to be returned in a single page. It is
     * possible to receive fewer results than the specified limit on a given page. It is also possible
     * to get more than this number of results depending on the underlying database retrievals.
     * Default: `500`
     *
     * @maps soft_limit
     */
    public function setSoftLimit(?int $softLimit): void
    {
        $this->softLimit = $softLimit;
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
        if (isset($this->softLimit)) {
            $json['soft_limit']   = $this->softLimit;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

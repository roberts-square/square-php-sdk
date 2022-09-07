<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class SyncOrdersDebugOptions implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $collectPerformanceData;

    /**
     * @var bool|null
     */
    private $useMerchantScopedQuery;

    /**
     * @var bool|null
     */
    private $useLocationScopedQuery;

    /**
     * @var bool|null
     */
    private $returnOrderIdsOnly;

    /**
     * @var bool|null
     */
    private $expireCursors;

    /**
     * @var bool|null
     */
    private $startAtBeginningOfTime;

    /**
     * @var int|null
     */
    private $maxResultsPerFetch;

    /**
     * Returns Collect Performance Data.
     */
    public function getCollectPerformanceData(): ?bool
    {
        return $this->collectPerformanceData;
    }

    /**
     * Sets Collect Performance Data.
     *
     * @maps collect_performance_data
     */
    public function setCollectPerformanceData(?bool $collectPerformanceData): void
    {
        $this->collectPerformanceData = $collectPerformanceData;
    }

    /**
     * Returns Use Merchant Scoped Query.
     */
    public function getUseMerchantScopedQuery(): ?bool
    {
        return $this->useMerchantScopedQuery;
    }

    /**
     * Sets Use Merchant Scoped Query.
     *
     * @maps use_merchant_scoped_query
     */
    public function setUseMerchantScopedQuery(?bool $useMerchantScopedQuery): void
    {
        $this->useMerchantScopedQuery = $useMerchantScopedQuery;
    }

    /**
     * Returns Use Location Scoped Query.
     */
    public function getUseLocationScopedQuery(): ?bool
    {
        return $this->useLocationScopedQuery;
    }

    /**
     * Sets Use Location Scoped Query.
     *
     * @maps use_location_scoped_query
     */
    public function setUseLocationScopedQuery(?bool $useLocationScopedQuery): void
    {
        $this->useLocationScopedQuery = $useLocationScopedQuery;
    }

    /**
     * Returns Return Order Ids Only.
     */
    public function getReturnOrderIdsOnly(): ?bool
    {
        return $this->returnOrderIdsOnly;
    }

    /**
     * Sets Return Order Ids Only.
     *
     * @maps return_order_ids_only
     */
    public function setReturnOrderIdsOnly(?bool $returnOrderIdsOnly): void
    {
        $this->returnOrderIdsOnly = $returnOrderIdsOnly;
    }

    /**
     * Returns Expire Cursors.
     */
    public function getExpireCursors(): ?bool
    {
        return $this->expireCursors;
    }

    /**
     * Sets Expire Cursors.
     *
     * @maps expire_cursors
     */
    public function setExpireCursors(?bool $expireCursors): void
    {
        $this->expireCursors = $expireCursors;
    }

    /**
     * Returns Start at Beginning of Time.
     */
    public function getStartAtBeginningOfTime(): ?bool
    {
        return $this->startAtBeginningOfTime;
    }

    /**
     * Sets Start at Beginning of Time.
     *
     * @maps start_at_beginning_of_time
     */
    public function setStartAtBeginningOfTime(?bool $startAtBeginningOfTime): void
    {
        $this->startAtBeginningOfTime = $startAtBeginningOfTime;
    }

    /**
     * Returns Max Results Per Fetch.
     */
    public function getMaxResultsPerFetch(): ?int
    {
        return $this->maxResultsPerFetch;
    }

    /**
     * Sets Max Results Per Fetch.
     *
     * @maps max_results_per_fetch
     */
    public function setMaxResultsPerFetch(?int $maxResultsPerFetch): void
    {
        $this->maxResultsPerFetch = $maxResultsPerFetch;
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
        if (isset($this->collectPerformanceData)) {
            $json['collect_performance_data']   = $this->collectPerformanceData;
        }
        if (isset($this->useMerchantScopedQuery)) {
            $json['use_merchant_scoped_query']  = $this->useMerchantScopedQuery;
        }
        if (isset($this->useLocationScopedQuery)) {
            $json['use_location_scoped_query']  = $this->useLocationScopedQuery;
        }
        if (isset($this->returnOrderIdsOnly)) {
            $json['return_order_ids_only']      = $this->returnOrderIdsOnly;
        }
        if (isset($this->expireCursors)) {
            $json['expire_cursors']             = $this->expireCursors;
        }
        if (isset($this->startAtBeginningOfTime)) {
            $json['start_at_beginning_of_time'] = $this->startAtBeginningOfTime;
        }
        if (isset($this->maxResultsPerFetch)) {
            $json['max_results_per_fetch']      = $this->maxResultsPerFetch;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

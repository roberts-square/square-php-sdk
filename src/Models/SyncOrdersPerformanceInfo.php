<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class SyncOrdersPerformanceInfo implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $fetchesPerformed;

    /**
     * @var int|null
     */
    private $totalFetchTimeMillis;

    /**
     * @var int[]|null
     */
    private $allFetchTimesMillis;

    /**
     * @var string[]|null
     */
    private $executedQueries;

    /**
     * @var int|null
     */
    private $queryResponseRows;

    /**
     * @var int|null
     */
    private $filteredRows;

    /**
     * Returns Fetches Performed.
     */
    public function getFetchesPerformed(): ?int
    {
        return $this->fetchesPerformed;
    }

    /**
     * Sets Fetches Performed.
     *
     * @maps fetches_performed
     */
    public function setFetchesPerformed(?int $fetchesPerformed): void
    {
        $this->fetchesPerformed = $fetchesPerformed;
    }

    /**
     * Returns Total Fetch Time Millis.
     */
    public function getTotalFetchTimeMillis(): ?int
    {
        return $this->totalFetchTimeMillis;
    }

    /**
     * Sets Total Fetch Time Millis.
     *
     * @maps total_fetch_time_millis
     */
    public function setTotalFetchTimeMillis(?int $totalFetchTimeMillis): void
    {
        $this->totalFetchTimeMillis = $totalFetchTimeMillis;
    }

    /**
     * Returns All Fetch Times Millis.
     *
     * @return int[]|null
     */
    public function getAllFetchTimesMillis(): ?array
    {
        return $this->allFetchTimesMillis;
    }

    /**
     * Sets All Fetch Times Millis.
     *
     * @maps all_fetch_times_millis
     *
     * @param int[]|null $allFetchTimesMillis
     */
    public function setAllFetchTimesMillis(?array $allFetchTimesMillis): void
    {
        $this->allFetchTimesMillis = $allFetchTimesMillis;
    }

    /**
     * Returns Executed Queries.
     *
     * @return string[]|null
     */
    public function getExecutedQueries(): ?array
    {
        return $this->executedQueries;
    }

    /**
     * Sets Executed Queries.
     *
     * @maps executed_queries
     *
     * @param string[]|null $executedQueries
     */
    public function setExecutedQueries(?array $executedQueries): void
    {
        $this->executedQueries = $executedQueries;
    }

    /**
     * Returns Query Response Rows.
     */
    public function getQueryResponseRows(): ?int
    {
        return $this->queryResponseRows;
    }

    /**
     * Sets Query Response Rows.
     *
     * @maps query_response_rows
     */
    public function setQueryResponseRows(?int $queryResponseRows): void
    {
        $this->queryResponseRows = $queryResponseRows;
    }

    /**
     * Returns Filtered Rows.
     */
    public function getFilteredRows(): ?int
    {
        return $this->filteredRows;
    }

    /**
     * Sets Filtered Rows.
     *
     * @maps filtered_rows
     */
    public function setFilteredRows(?int $filteredRows): void
    {
        $this->filteredRows = $filteredRows;
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
        if (isset($this->fetchesPerformed)) {
            $json['fetches_performed']       = $this->fetchesPerformed;
        }
        if (isset($this->totalFetchTimeMillis)) {
            $json['total_fetch_time_millis'] = $this->totalFetchTimeMillis;
        }
        if (isset($this->allFetchTimesMillis)) {
            $json['all_fetch_times_millis']  = $this->allFetchTimesMillis;
        }
        if (isset($this->executedQueries)) {
            $json['executed_queries']        = $this->executedQueries;
        }
        if (isset($this->queryResponseRows)) {
            $json['query_response_rows']     = $this->queryResponseRows;
        }
        if (isset($this->filteredRows)) {
            $json['filtered_rows']           = $this->filteredRows;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

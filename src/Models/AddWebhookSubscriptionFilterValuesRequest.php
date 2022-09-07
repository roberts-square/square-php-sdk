<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Adds values to a webhook subscription filter.
 */
class AddWebhookSubscriptionFilterValuesRequest implements \JsonSerializable
{
    /**
     * @var string[]
     */
    private $filterValues;

    /**
     * @param string[] $filterValues
     */
    public function __construct(array $filterValues)
    {
        $this->filterValues = $filterValues;
    }

    /**
     * Returns Filter Values.
     * The list of filter values to be added.
     *
     * @return string[]
     */
    public function getFilterValues(): array
    {
        return $this->filterValues;
    }

    /**
     * Sets Filter Values.
     * The list of filter values to be added.
     *
     * @required
     * @maps filter_values
     *
     * @param string[] $filterValues
     */
    public function setFilterValues(array $filterValues): void
    {
        $this->filterValues = $filterValues;
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
        $json['filter_values'] = $this->filterValues;
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

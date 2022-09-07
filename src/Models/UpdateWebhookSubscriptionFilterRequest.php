<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Updates a webhook subscription filter.
 */
class UpdateWebhookSubscriptionFilterRequest implements \JsonSerializable
{
    /**
     * @var WebhookSubscriptionFilter
     */
    private $filter;

    /**
     * @param WebhookSubscriptionFilter $filter
     */
    public function __construct(WebhookSubscriptionFilter $filter)
    {
        $this->filter = $filter;
    }

    /**
     * Returns Filter.
     * Represents the details of a webhook subscription filter.
     */
    public function getFilter(): WebhookSubscriptionFilter
    {
        return $this->filter;
    }

    /**
     * Sets Filter.
     * Represents the details of a webhook subscription filter.
     *
     * @required
     * @maps filter
     */
    public function setFilter(WebhookSubscriptionFilter $filter): void
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

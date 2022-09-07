<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Defines the fields that are included in the response body of
 * a request to the
 * [RetrieveWebhookSubscriptionFilter]($e/WebhookSubscriptionFilters/RetrieveWebhookSubscriptionFilter)
 * endpoint.
 *
 * Note: if there are errors processing the request, the subscription filter field will not be
 * present.
 */
class RetrieveWebhookSubscriptionFilterResponse implements \JsonSerializable
{
    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * @var WebhookSubscriptionFilter|null
     */
    private $filter;

    /**
     * Returns Errors.
     * Information on errors encountered during the request.
     *
     * @return Error[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     * Information on errors encountered during the request.
     *
     * @maps errors
     *
     * @param Error[]|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * Returns Filter.
     * Represents the details of a webhook subscription filter.
     */
    public function getFilter(): ?WebhookSubscriptionFilter
    {
        return $this->filter;
    }

    /**
     * Sets Filter.
     * Represents the details of a webhook subscription filter.
     *
     * @maps filter
     */
    public function setFilter(?WebhookSubscriptionFilter $filter): void
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
        if (isset($this->errors)) {
            $json['errors'] = $this->errors;
        }
        if (isset($this->filter)) {
            $json['filter'] = $this->filter;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

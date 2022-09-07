<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Creates a webhook subscription filter.
 */
class CreateWebhookSubscriptionFilterRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $idempotencyKey;

    /**
     * @var WebhookSubscriptionFilter
     */
    private $filter;

    /**
     * @param string $idempotencyKey
     * @param WebhookSubscriptionFilter $filter
     */
    public function __construct(string $idempotencyKey, WebhookSubscriptionFilter $filter)
    {
        $this->idempotencyKey = $idempotencyKey;
        $this->filter = $filter;
    }

    /**
     * Returns Idempotency Key.
     * A unique string that identifies the
     * [CreateWebhookSubscriptionFilter]($e/WebhookSubscriptionFilters/CreateWebhookSubscriptionFilter)
     * request.
     */
    public function getIdempotencyKey(): string
    {
        return $this->idempotencyKey;
    }

    /**
     * Sets Idempotency Key.
     * A unique string that identifies the
     * [CreateWebhookSubscriptionFilter]($e/WebhookSubscriptionFilters/CreateWebhookSubscriptionFilter)
     * request.
     *
     * @required
     * @maps idempotency_key
     */
    public function setIdempotencyKey(string $idempotencyKey): void
    {
        $this->idempotencyKey = $idempotencyKey;
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
        $json['idempotency_key'] = $this->idempotencyKey;
        $json['filter']          = $this->filter;
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

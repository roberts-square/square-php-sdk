<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class CreateRedemptionRequest implements \JsonSerializable
{
    /**
     * @var Redemption
     */
    private $redemption;

    /**
     * @var string
     */
    private $idempotencyKey;

    /**
     * @param Redemption $redemption
     * @param string $idempotencyKey
     */
    public function __construct(Redemption $redemption, string $idempotencyKey)
    {
        $this->redemption = $redemption;
        $this->idempotencyKey = $idempotencyKey;
    }

    /**
     * Returns Redemption.
     * Represents the application of a `DiscountCode` to an order.
     */
    public function getRedemption(): Redemption
    {
        return $this->redemption;
    }

    /**
     * Sets Redemption.
     * Represents the application of a `DiscountCode` to an order.
     *
     * @required
     * @maps redemption
     */
    public function setRedemption(Redemption $redemption): void
    {
        $this->redemption = $redemption;
    }

    /**
     * Returns Idempotency Key.
     * A unique string that identifies the `CreateRedemption` request.
     * If you do not provide a unique string (or you provide an empty
     * string as the value), the endpoint treats each request as
     * independent.
     *
     * For more information, see [Idempotency](https://developer.squareup.com/docs/working-with-
     * apis/idempotency).
     */
    public function getIdempotencyKey(): string
    {
        return $this->idempotencyKey;
    }

    /**
     * Sets Idempotency Key.
     * A unique string that identifies the `CreateRedemption` request.
     * If you do not provide a unique string (or you provide an empty
     * string as the value), the endpoint treats each request as
     * independent.
     *
     * For more information, see [Idempotency](https://developer.squareup.com/docs/working-with-
     * apis/idempotency).
     *
     * @required
     * @maps idempotency_key
     */
    public function setIdempotencyKey(string $idempotencyKey): void
    {
        $this->idempotencyKey = $idempotencyKey;
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
        $json['redemption']      = $this->redemption;
        $json['idempotency_key'] = $this->idempotencyKey;
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

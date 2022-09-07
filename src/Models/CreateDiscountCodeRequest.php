<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class CreateDiscountCodeRequest implements \JsonSerializable
{
    /**
     * @var DiscountCode
     */
    private $discountCode;

    /**
     * @var string
     */
    private $idempotencyKey;

    /**
     * @param DiscountCode $discountCode
     * @param string $idempotencyKey
     */
    public function __construct(DiscountCode $discountCode, string $idempotencyKey)
    {
        $this->discountCode = $discountCode;
        $this->idempotencyKey = $idempotencyKey;
    }

    /**
     * Returns Discount Code.
     * Associates a discount to a code issued to customers.
     * The pricing rule referenced by this resource determines how and what is discounted.
     */
    public function getDiscountCode(): DiscountCode
    {
        return $this->discountCode;
    }

    /**
     * Sets Discount Code.
     * Associates a discount to a code issued to customers.
     * The pricing rule referenced by this resource determines how and what is discounted.
     *
     * @required
     * @maps discount_code
     */
    public function setDiscountCode(DiscountCode $discountCode): void
    {
        $this->discountCode = $discountCode;
    }

    /**
     * Returns Idempotency Key.
     * A unique string that identifies the `CreateDiscountCode` request.
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
     * A unique string that identifies the `CreateDiscountCode` request.
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
        $json['discount_code']   = $this->discountCode;
        $json['idempotency_key'] = $this->idempotencyKey;
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

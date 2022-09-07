<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class UpdateDiscountCodeRequest implements \JsonSerializable
{
    /**
     * @var DiscountCode
     */
    private $discountCode;

    /**
     * @param DiscountCode $discountCode
     */
    public function __construct(DiscountCode $discountCode)
    {
        $this->discountCode = $discountCode;
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
        $json['discount_code'] = $this->discountCode;
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

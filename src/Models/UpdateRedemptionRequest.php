<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class UpdateRedemptionRequest implements \JsonSerializable
{
    /**
     * @var Redemption
     */
    private $redemption;

    /**
     * @param Redemption $redemption
     */
    public function __construct(Redemption $redemption)
    {
        $this->redemption = $redemption;
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
        $json['redemption'] = $this->redemption;
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

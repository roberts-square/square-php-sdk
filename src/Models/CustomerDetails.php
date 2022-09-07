<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Details about the customer making the payment.
 */
class CustomerDetails implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $sellerKeyedIn;

    /**
     * Returns Seller Keyed In.
     * Indicates that the seller keyed in payment details on behalf of the customer.
     * This is used to flag a payment as Mail Order / Telephone Order (MOTO).
     */
    public function getSellerKeyedIn(): ?bool
    {
        return $this->sellerKeyedIn;
    }

    /**
     * Sets Seller Keyed In.
     * Indicates that the seller keyed in payment details on behalf of the customer.
     * This is used to flag a payment as Mail Order / Telephone Order (MOTO).
     *
     * @maps seller_keyed_in
     */
    public function setSellerKeyedIn(?bool $sellerKeyedIn): void
    {
        $this->sellerKeyedIn = $sellerKeyedIn;
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
        if (isset($this->sellerKeyedIn)) {
            $json['seller_keyed_in'] = $this->sellerKeyedIn;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

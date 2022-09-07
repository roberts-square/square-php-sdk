<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * A request to create a `LoyaltyOrderAssignment`.
 */
class CreateLoyaltyOrderAssignmentRequest implements \JsonSerializable
{
    /**
     * @var LoyaltyOrderAssignment|null
     */
    private $loyaltyOrderAssignment;

    /**
     * Returns Loyalty Order Assignment.
     * Represents a linkage between a loyalty account and an order.
     */
    public function getLoyaltyOrderAssignment(): ?LoyaltyOrderAssignment
    {
        return $this->loyaltyOrderAssignment;
    }

    /**
     * Sets Loyalty Order Assignment.
     * Represents a linkage between a loyalty account and an order.
     *
     * @maps loyalty_order_assignment
     */
    public function setLoyaltyOrderAssignment(?LoyaltyOrderAssignment $loyaltyOrderAssignment): void
    {
        $this->loyaltyOrderAssignment = $loyaltyOrderAssignment;
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
        if (isset($this->loyaltyOrderAssignment)) {
            $json['loyalty_order_assignment'] = $this->loyaltyOrderAssignment;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * A response to create a `LoyaltyOrderAssignment`.
 */
class CreateLoyaltyOrderAssignmentResponse implements \JsonSerializable
{
    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * @var LoyaltyOrderAssignment|null
     */
    private $loyaltyOrderAssignment;

    /**
     * Returns Errors.
     * Any errors that occurred during the request.
     *
     * @return Error[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     * Any errors that occurred during the request.
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
        if (isset($this->errors)) {
            $json['errors']                   = $this->errors;
        }
        if (isset($this->loyaltyOrderAssignment)) {
            $json['loyalty_order_assignment'] = $this->loyaltyOrderAssignment;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

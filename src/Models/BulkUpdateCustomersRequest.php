<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Defines the body parameters that can be included in requests to the
 * [BulkUpdateCustomers]($e/Customers/BulkUpdateCustomers) endpoint.
 */
class BulkUpdateCustomersRequest implements \JsonSerializable
{
    /**
     * @var array<string,BulkUpdateCustomerData>|null
     */
    private $customers;

    /**
     * Returns Customers.
     * A map of key-value pairs as the [UpdateCustomer](#endpoint-createcustomer) request body.
     * Each key-value pair in the map represents a `{customer_id: UpdateCustomerRequest}` combination.
     *
     * @return array<string,BulkUpdateCustomerData>|null
     */
    public function getCustomers(): ?array
    {
        return $this->customers;
    }

    /**
     * Sets Customers.
     * A map of key-value pairs as the [UpdateCustomer](#endpoint-createcustomer) request body.
     * Each key-value pair in the map represents a `{customer_id: UpdateCustomerRequest}` combination.
     *
     * @maps customers
     *
     * @param array<string,BulkUpdateCustomerData>|null $customers
     */
    public function setCustomers(?array $customers): void
    {
        $this->customers = $customers;
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
        if (isset($this->customers)) {
            $json['customers'] = $this->customers;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

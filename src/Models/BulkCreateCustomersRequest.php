<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Defines the body parameters that can be included in requests to the
 * [BulkCreateCustomers]($e/Customers/BulkCreateCustomers) endpoint.
 */
class BulkCreateCustomersRequest implements \JsonSerializable
{
    /**
     * @var array<string,BulkCreateCustomerData>|null
     */
    private $customers;

    /**
     * Returns Customers.
     * A map of key-value pairs as the [Create Customer](#endpoint-createcustomer) request body.
     *
     * Each key-value pair in the map represents an `{idempotency_key: CreateCustomerRequest}`
     * combination. If the `CreateCustomerRequest` body includes an [idempotency key](https://developer.
     * squareup.com/docs/working-with-apis/idempotency),
     * it must match the value provided as the map entry key.
     *
     * @return array<string,BulkCreateCustomerData>|null
     */
    public function getCustomers(): ?array
    {
        return $this->customers;
    }

    /**
     * Sets Customers.
     * A map of key-value pairs as the [Create Customer](#endpoint-createcustomer) request body.
     *
     * Each key-value pair in the map represents an `{idempotency_key: CreateCustomerRequest}`
     * combination. If the `CreateCustomerRequest` body includes an [idempotency key](https://developer.
     * squareup.com/docs/working-with-apis/idempotency),
     * it must match the value provided as the map entry key.
     *
     * @maps customers
     *
     * @param array<string,BulkCreateCustomerData>|null $customers
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

<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Defines the fields included in the response body from the
 * [BulkUpdateCustomers]($e/Customers/BulkUpdateCustomers) endpoint.
 */
class BulkUpdateCustomersResponse implements \JsonSerializable
{
    /**
     * @var array<string,UpdateCustomerResponse>|null
     */
    private $responses;

    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * Returns Responses.
     * A map of key-value pairs as the [Update Customer](#endpoint-updatecustomer) response body.
     *
     * Each key-value pair in the map represents an `{customer.id: UpdateCustomerResponse}
     * combination. If the UpdateCustomer request succeeds, the entry is a valid customer profile.
     * If the UpdateCustomer request fails, the entry includes error information about the failure.
     *
     * @return array<string,UpdateCustomerResponse>|null
     */
    public function getResponses(): ?array
    {
        return $this->responses;
    }

    /**
     * Sets Responses.
     * A map of key-value pairs as the [Update Customer](#endpoint-updatecustomer) response body.
     *
     * Each key-value pair in the map represents an `{customer.id: UpdateCustomerResponse}
     * combination. If the UpdateCustomer request succeeds, the entry is a valid customer profile.
     * If the UpdateCustomer request fails, the entry includes error information about the failure.
     *
     * @maps responses
     *
     * @param array<string,UpdateCustomerResponse>|null $responses
     */
    public function setResponses(?array $responses): void
    {
        $this->responses = $responses;
    }

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
        if (isset($this->responses)) {
            $json['responses'] = $this->responses;
        }
        if (isset($this->errors)) {
            $json['errors']    = $this->errors;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

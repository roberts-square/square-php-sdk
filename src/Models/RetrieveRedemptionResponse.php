<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class RetrieveRedemptionResponse implements \JsonSerializable
{
    /**
     * @var Redemption|null
     */
    private $redemption;

    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * Returns Redemption.
     * Represents the application of a `DiscountCode` to an order.
     */
    public function getRedemption(): ?Redemption
    {
        return $this->redemption;
    }

    /**
     * Sets Redemption.
     * Represents the application of a `DiscountCode` to an order.
     *
     * @maps redemption
     */
    public function setRedemption(?Redemption $redemption): void
    {
        $this->redemption = $redemption;
    }

    /**
     * Returns Errors.
     * Information about errors encountered during the request.
     *
     * @return Error[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     * Information about errors encountered during the request.
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
        if (isset($this->redemption)) {
            $json['redemption'] = $this->redemption;
        }
        if (isset($this->errors)) {
            $json['errors']     = $this->errors;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class RetrieveDiscountCodeResponse implements \JsonSerializable
{
    /**
     * @var DiscountCode|null
     */
    private $discountCode;

    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * Returns Discount Code.
     * Associates a discount to a code issued to customers.
     * The pricing rule referenced by this resource determines how and what is discounted.
     */
    public function getDiscountCode(): ?DiscountCode
    {
        return $this->discountCode;
    }

    /**
     * Sets Discount Code.
     * Associates a discount to a code issued to customers.
     * The pricing rule referenced by this resource determines how and what is discounted.
     *
     * @maps discount_code
     */
    public function setDiscountCode(?DiscountCode $discountCode): void
    {
        $this->discountCode = $discountCode;
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
        if (isset($this->discountCode)) {
            $json['discount_code'] = $this->discountCode;
        }
        if (isset($this->errors)) {
            $json['errors']        = $this->errors;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

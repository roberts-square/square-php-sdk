<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Additional details about Square Account payments.
 */
class SquareAccountDetails implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $paymentSourceToken;

    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * Returns Payment Source Token.
     * Unique identifier for the payment source used for this payment.
     */
    public function getPaymentSourceToken(): ?string
    {
        return $this->paymentSourceToken;
    }

    /**
     * Sets Payment Source Token.
     * Unique identifier for the payment source used for this payment.
     *
     * @maps payment_source_token
     */
    public function setPaymentSourceToken(?string $paymentSourceToken): void
    {
        $this->paymentSourceToken = $paymentSourceToken;
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
        if (isset($this->paymentSourceToken)) {
            $json['payment_source_token'] = $this->paymentSourceToken;
        }
        if (isset($this->errors)) {
            $json['errors']               = $this->errors;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

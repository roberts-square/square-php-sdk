<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Response object returned by the __UpdateAccount__ endpoint.
 * If the call is successful, the endpoint will return the updated `Account`. If the call is
 * unsuccessful, the endpoint will return error information.
 */
class UpdateAccountResponse implements \JsonSerializable
{
    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * @var Account|null
     */
    private $account;

    /**
     * Returns Errors.
     * Information on errors encountered during the request.
     *
     * @return Error[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     * Information on errors encountered during the request.
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
     * Returns Account.
     * Represents a Square seller account created by the Accounts API.
     */
    public function getAccount(): ?Account
    {
        return $this->account;
    }

    /**
     * Sets Account.
     * Represents a Square seller account created by the Accounts API.
     *
     * @maps account
     */
    public function setAccount(?Account $account): void
    {
        $this->account = $account;
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
            $json['errors']  = $this->errors;
        }
        if (isset($this->account)) {
            $json['account'] = $this->account;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

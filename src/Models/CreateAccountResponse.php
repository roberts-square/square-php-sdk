<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Response object returned by the __CreateAccount__ endpoint
 * after a successful call. If the call was unsuccessful, the endpoint will return an error.
 */
class CreateAccountResponse implements \JsonSerializable
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
     * @var string|null
     */
    private $accessToken;

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
     * Returns Access Token.
     * Access token for this account that can be used to authorize calls to
     * Square endpoints. Present only if the call was successful.
     */
    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    /**
     * Sets Access Token.
     * Access token for this account that can be used to authorize calls to
     * Square endpoints. Present only if the call was successful.
     *
     * @maps access_token
     */
    public function setAccessToken(?string $accessToken): void
    {
        $this->accessToken = $accessToken;
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
            $json['errors']       = $this->errors;
        }
        if (isset($this->account)) {
            $json['account']      = $this->account;
        }
        if (isset($this->accessToken)) {
            $json['access_token'] = $this->accessToken;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

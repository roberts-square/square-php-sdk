<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Request object to be sent to the __CreateAccount__ endpoint.
 */
class CreateAccountRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $idempotencyKey;

    /**
     * @var Account
     */
    private $account;

    /**
     * @param string $idempotencyKey
     * @param Account $account
     */
    public function __construct(string $idempotencyKey, Account $account)
    {
        $this->idempotencyKey = $idempotencyKey;
        $this->account = $account;
    }

    /**
     * Returns Idempotency Key.
     * A value you specify that uniquely identifies this request among all your requests.
     * See [Idempotency](https://developer.squareup.com/docs/basics/api101/idempotency) for more
     * information.
     */
    public function getIdempotencyKey(): string
    {
        return $this->idempotencyKey;
    }

    /**
     * Sets Idempotency Key.
     * A value you specify that uniquely identifies this request among all your requests.
     * See [Idempotency](https://developer.squareup.com/docs/basics/api101/idempotency) for more
     * information.
     *
     * @required
     * @maps idempotency_key
     */
    public function setIdempotencyKey(string $idempotencyKey): void
    {
        $this->idempotencyKey = $idempotencyKey;
    }

    /**
     * Returns Account.
     * Represents a Square seller account created by the Accounts API.
     */
    public function getAccount(): Account
    {
        return $this->account;
    }

    /**
     * Sets Account.
     * Represents a Square seller account created by the Accounts API.
     *
     * @required
     * @maps account
     */
    public function setAccount(Account $account): void
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
        $json['idempotency_key'] = $this->idempotencyKey;
        $json['account']         = $this->account;
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

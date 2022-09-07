<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Request object to be sent to the __UpdateAccount__ endpoint.
 */
class UpdateAccountRequest implements \JsonSerializable
{
    /**
     * @var Account
     */
    private $account;

    /**
     * @param Account $account
     */
    public function __construct(Account $account)
    {
        $this->account = $account;
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
        $json['account'] = $this->account;
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

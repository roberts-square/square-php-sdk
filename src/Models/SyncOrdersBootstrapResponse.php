<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Returns Orders for the SyncOrdersBootstrap request.
 * Upon reaching the terminal condition (bootstrap_complete=true),
 * updates can be streamed via the non-boostrap SyncOrdersRequest
 */
class SyncOrdersBootstrapResponse implements \JsonSerializable
{
    /**
     * @var Order[]|null
     */
    private $orders;

    /**
     * @var string|null
     */
    private $bootstrapCursor;

    /**
     * @var string|null
     */
    private $syncCursor;

    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * @var string|null
     */
    private $syncCursorExpiration;

    /**
     * Returns Orders.
     * A list of
     * [Order]($m/Order) objects that match the request conditions.
     *
     * @return Order[]|null
     */
    public function getOrders(): ?array
    {
        return $this->orders;
    }

    /**
     * Sets Orders.
     * A list of
     * [Order]($m/Order) objects that match the request conditions.
     *
     * @maps orders
     *
     * @param Order[]|null $orders
     */
    public function setOrders(?array $orders): void
    {
        $this->orders = $orders;
    }

    /**
     * Returns Bootstrap Cursor.
     * The pagination cursor to be used in a subsequent request.
     * For more information, see [Pagination](https://developer.squareup.com/docs/basics/api101/pagination).
     */
    public function getBootstrapCursor(): ?string
    {
        return $this->bootstrapCursor;
    }

    /**
     * Sets Bootstrap Cursor.
     * The pagination cursor to be used in a subsequent request.
     * For more information, see [Pagination](https://developer.squareup.com/docs/basics/api101/pagination).
     *
     * @maps bootstrap_cursor
     */
    public function setBootstrapCursor(?string $bootstrapCursor): void
    {
        $this->bootstrapCursor = $bootstrapCursor;
    }

    /**
     * Returns Sync Cursor.
     * The cursor which can be used with the non-bootstrap Sync API.
     */
    public function getSyncCursor(): ?string
    {
        return $this->syncCursor;
    }

    /**
     * Sets Sync Cursor.
     * The cursor which can be used with the non-bootstrap Sync API.
     *
     * @maps sync_cursor
     */
    public function setSyncCursor(?string $syncCursor): void
    {
        $this->syncCursor = $syncCursor;
    }

    /**
     * Returns Errors.
     * [Errors]($m/Error) encountered during the search.
     *
     * @return Error[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     * [Errors]($m/Error) encountered during the search.
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
     * Returns Sync Cursor Expiration.
     * Time after which the the sync cursor will no longer be valid, requiring a new bootstrap.
     */
    public function getSyncCursorExpiration(): ?string
    {
        return $this->syncCursorExpiration;
    }

    /**
     * Sets Sync Cursor Expiration.
     * Time after which the the sync cursor will no longer be valid, requiring a new bootstrap.
     *
     * @maps sync_cursor_expiration
     */
    public function setSyncCursorExpiration(?string $syncCursorExpiration): void
    {
        $this->syncCursorExpiration = $syncCursorExpiration;
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
        if (isset($this->orders)) {
            $json['orders']                 = $this->orders;
        }
        if (isset($this->bootstrapCursor)) {
            $json['bootstrap_cursor']       = $this->bootstrapCursor;
        }
        if (isset($this->syncCursor)) {
            $json['sync_cursor']            = $this->syncCursor;
        }
        if (isset($this->errors)) {
            $json['errors']                 = $this->errors;
        }
        if (isset($this->syncCursorExpiration)) {
            $json['sync_cursor_expiration'] = $this->syncCursorExpiration;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Either the `order_entries` or `orders` field is set, depending on whether
 * `return_entries` is set on the [SyncOrdersRequest]($e/Orders/SearchOrders).
 */
class SyncOrdersResponse implements \JsonSerializable
{
    /**
     * @var Order[]|null
     */
    private $orders;

    /**
     * @var string|null
     */
    private $cursor;

    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * @var bool|null
     */
    private $complete;

    /**
     * @var string|null
     */
    private $cursorExpiration;

    /**
     * Returns Orders.
     * A list of
     * [Order]($m/Order) objects that match the query conditions. The list is populated only if
     * `return_entries` is set to `false` in the request.
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
     * [Order]($m/Order) objects that match the query conditions. The list is populated only if
     * `return_entries` is set to `false` in the request.
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
     * Returns Cursor.
     * The cursor to be used in a subsequent request.
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }

    /**
     * Sets Cursor.
     * The cursor to be used in a subsequent request.
     *
     * @maps cursor
     */
    public function setCursor(?string $cursor): void
    {
        $this->cursor = $cursor;
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
     * Returns Complete.
     * If `true`, there are no known orders newer than those returned in this response.
     */
    public function getComplete(): ?bool
    {
        return $this->complete;
    }

    /**
     * Sets Complete.
     * If `true`, there are no known orders newer than those returned in this response.
     *
     * @maps complete
     */
    public function setComplete(?bool $complete): void
    {
        $this->complete = $complete;
    }

    /**
     * Returns Cursor Expiration.
     * Time after which the the sync cursor will no longer be valid, requiring a new bootstrap.
     */
    public function getCursorExpiration(): ?string
    {
        return $this->cursorExpiration;
    }

    /**
     * Sets Cursor Expiration.
     * Time after which the the sync cursor will no longer be valid, requiring a new bootstrap.
     *
     * @maps cursor_expiration
     */
    public function setCursorExpiration(?string $cursorExpiration): void
    {
        $this->cursorExpiration = $cursorExpiration;
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
            $json['orders']            = $this->orders;
        }
        if (isset($this->cursor)) {
            $json['cursor']            = $this->cursor;
        }
        if (isset($this->errors)) {
            $json['errors']            = $this->errors;
        }
        if (isset($this->complete)) {
            $json['complete']          = $this->complete;
        }
        if (isset($this->cursorExpiration)) {
            $json['cursor_expiration'] = $this->cursorExpiration;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

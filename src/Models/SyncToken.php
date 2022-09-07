<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class SyncToken implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $syncCursor;

    /**
     * @var string|null
     */
    private $requestHash;

    /**
     * @var string|null
     */
    private $expiration;

    /**
     * Returns Sync Cursor.
     */
    public function getSyncCursor(): ?string
    {
        return $this->syncCursor;
    }

    /**
     * Sets Sync Cursor.
     *
     * @maps sync_cursor
     */
    public function setSyncCursor(?string $syncCursor): void
    {
        $this->syncCursor = $syncCursor;
    }

    /**
     * Returns Request Hash.
     */
    public function getRequestHash(): ?string
    {
        return $this->requestHash;
    }

    /**
     * Sets Request Hash.
     *
     * @maps request_hash
     */
    public function setRequestHash(?string $requestHash): void
    {
        $this->requestHash = $requestHash;
    }

    /**
     * Returns Expiration.
     */
    public function getExpiration(): ?string
    {
        return $this->expiration;
    }

    /**
     * Sets Expiration.
     *
     * @maps expiration
     */
    public function setExpiration(?string $expiration): void
    {
        $this->expiration = $expiration;
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
        if (isset($this->syncCursor)) {
            $json['sync_cursor']  = $this->syncCursor;
        }
        if (isset($this->requestHash)) {
            $json['request_hash'] = $this->requestHash;
        }
        if (isset($this->expiration)) {
            $json['expiration']   = $this->expiration;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class AckNextTerminalCheckoutRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $idempotencyKey;

    /**
     * @var string|null
     */
    private $deviceId;

    /**
     * @var string|null
     */
    private $ackReason;

    /**
     * @param string $idempotencyKey
     */
    public function __construct(string $idempotencyKey)
    {
        $this->idempotencyKey = $idempotencyKey;
    }

    /**
     * Returns Idempotency Key.
     * A unique string that identifies this `AckNextTerminalCheckout` request. Keys can be any
     * valid string but must be unique for every `AckNextTerminalCheckout` request.
     *
     * See [Idempotency keys](https://developer.squareup.com/docs/basics/api101/idempotency) for more
     * information.
     */
    public function getIdempotencyKey(): string
    {
        return $this->idempotencyKey;
    }

    /**
     * Sets Idempotency Key.
     * A unique string that identifies this `AckNextTerminalCheckout` request. Keys can be any
     * valid string but must be unique for every `AckNextTerminalCheckout` request.
     *
     * See [Idempotency keys](https://developer.squareup.com/docs/basics/api101/idempotency) for more
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
     * Returns Device Id.
     * The device associated with this `TerminalCheckout`.
     */
    public function getDeviceId(): ?string
    {
        return $this->deviceId;
    }

    /**
     * Sets Device Id.
     * The device associated with this `TerminalCheckout`.
     *
     * @maps device_id
     */
    public function setDeviceId(?string $deviceId): void
    {
        $this->deviceId = $deviceId;
    }

    /**
     * Returns Ack Reason.
     * The reason for the ACK.
     */
    public function getAckReason(): ?string
    {
        return $this->ackReason;
    }

    /**
     * Sets Ack Reason.
     * The reason for the ACK.
     *
     * @maps ack_reason
     */
    public function setAckReason(?string $ackReason): void
    {
        $this->ackReason = $ackReason;
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
        if (isset($this->deviceId)) {
            $json['device_id']   = $this->deviceId;
        }
        if (isset($this->ackReason)) {
            $json['ack_reason']  = $this->ackReason;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

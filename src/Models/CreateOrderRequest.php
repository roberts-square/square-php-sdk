<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class CreateOrderRequest implements \JsonSerializable
{
    /**
     * @var Order|null
     */
    private $order;

    /**
     * @var string|null
     */
    private $idempotencyKey;

    /**
     * @var bool|null
     */
    private $precalculatedOrder;

    /**
     * @var string|null
     */
    private $creationProcessingMode;

    /**
     * Returns Order.
     * Contains all information related to a single order to process with Square,
     * including line items that specify the products to purchase. `Order` objects also
     * include information about any associated tenders, refunds, and returns.
     *
     * All Connect V2 Transactions have all been converted to Orders including all associated
     * itemization data.
     */
    public function getOrder(): ?Order
    {
        return $this->order;
    }

    /**
     * Sets Order.
     * Contains all information related to a single order to process with Square,
     * including line items that specify the products to purchase. `Order` objects also
     * include information about any associated tenders, refunds, and returns.
     *
     * All Connect V2 Transactions have all been converted to Orders including all associated
     * itemization data.
     *
     * @maps order
     */
    public function setOrder(?Order $order): void
    {
        $this->order = $order;
    }

    /**
     * Returns Idempotency Key.
     * A value you specify that uniquely identifies this
     * order among orders you have created.
     *
     * If you are unsure whether a particular order was created successfully,
     * you can try it again with the same idempotency key without
     * worrying about creating duplicate orders.
     *
     * For more information, see [Idempotency](https://developer.squareup.
     * com/docs/basics/api101/idempotency).
     */
    public function getIdempotencyKey(): ?string
    {
        return $this->idempotencyKey;
    }

    /**
     * Sets Idempotency Key.
     * A value you specify that uniquely identifies this
     * order among orders you have created.
     *
     * If you are unsure whether a particular order was created successfully,
     * you can try it again with the same idempotency key without
     * worrying about creating duplicate orders.
     *
     * For more information, see [Idempotency](https://developer.squareup.
     * com/docs/basics/api101/idempotency).
     *
     * @maps idempotency_key
     */
    public function setIdempotencyKey(?string $idempotencyKey): void
    {
        $this->idempotencyKey = $idempotencyKey;
    }

    /**
     * Returns Precalculated Order.
     */
    public function getPrecalculatedOrder(): ?bool
    {
        return $this->precalculatedOrder;
    }

    /**
     * Sets Precalculated Order.
     *
     * @maps precalculated_order
     */
    public function setPrecalculatedOrder(?bool $precalculatedOrder): void
    {
        $this->precalculatedOrder = $precalculatedOrder;
    }

    /**
     * Returns Creation Processing Mode.
     */
    public function getCreationProcessingMode(): ?string
    {
        return $this->creationProcessingMode;
    }

    /**
     * Sets Creation Processing Mode.
     *
     * @maps creation_processing_mode
     */
    public function setCreationProcessingMode(?string $creationProcessingMode): void
    {
        $this->creationProcessingMode = $creationProcessingMode;
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
        if (isset($this->order)) {
            $json['order']                    = $this->order;
        }
        if (isset($this->idempotencyKey)) {
            $json['idempotency_key']          = $this->idempotencyKey;
        }
        if (isset($this->precalculatedOrder)) {
            $json['precalculated_order']      = $this->precalculatedOrder;
        }
        if (isset($this->creationProcessingMode)) {
            $json['creation_processing_mode'] = $this->creationProcessingMode;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

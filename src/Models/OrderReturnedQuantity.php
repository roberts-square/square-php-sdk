<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a return quantity that applies to a line items/custom amount in an order.
 */
class OrderReturnedQuantity implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $uid;

    /**
     * @var string|null
     */
    private $returnOrderId;

    /**
     * @var string|null
     */
    private $returnUid;

    /**
     * @var string|null
     */
    private $returnLineItemUid;

    /**
     * @var string|null
     */
    private $returnedQuantity;

    /**
     * @var Money|null
     */
    private $refundedMoney;

    /**
     * @var string|null
     */
    private $state;

    /**
     * Returns Uid.
     * A unique ID that identifies the return within this order.
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     * A unique ID that identifies the return within this order.
     *
     * @maps uid
     */
    public function setUid(?string $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * Returns Return Order Id.
     * The order that the return happened in
     */
    public function getReturnOrderId(): ?string
    {
        return $this->returnOrderId;
    }

    /**
     * Sets Return Order Id.
     * The order that the return happened in
     *
     * @maps return_order_id
     */
    public function setReturnOrderId(?string $returnOrderId): void
    {
        $this->returnOrderId = $returnOrderId;
    }

    /**
     * Returns Return Uid.
     * The return_uid from the return order
     */
    public function getReturnUid(): ?string
    {
        return $this->returnUid;
    }

    /**
     * Sets Return Uid.
     * The return_uid from the return order
     *
     * @maps return_uid
     */
    public function setReturnUid(?string $returnUid): void
    {
        $this->returnUid = $returnUid;
    }

    /**
     * Returns Return Line Item Uid.
     * The return_line_item uid from the return order
     */
    public function getReturnLineItemUid(): ?string
    {
        return $this->returnLineItemUid;
    }

    /**
     * Sets Return Line Item Uid.
     * The return_line_item uid from the return order
     *
     * @maps return_line_item_uid
     */
    public function setReturnLineItemUid(?string $returnLineItemUid): void
    {
        $this->returnLineItemUid = $returnLineItemUid;
    }

    /**
     * Returns Returned Quantity.
     * The quantity of the unit that were returned, can be fractional
     */
    public function getReturnedQuantity(): ?string
    {
        return $this->returnedQuantity;
    }

    /**
     * Sets Returned Quantity.
     * The quantity of the unit that were returned, can be fractional
     *
     * @maps returned_quantity
     */
    public function setReturnedQuantity(?string $returnedQuantity): void
    {
        $this->returnedQuantity = $returnedQuantity;
    }

    /**
     * Returns Refunded Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     */
    public function getRefundedMoney(): ?Money
    {
        return $this->refundedMoney;
    }

    /**
     * Sets Refunded Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     *
     * @maps refunded_money
     */
    public function setRefundedMoney(?Money $refundedMoney): void
    {
        $this->refundedMoney = $refundedMoney;
    }

    /**
     * Returns State.
     * The current state of this returned quantity.
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * Sets State.
     * The current state of this returned quantity.
     *
     * @maps state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
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
        if (isset($this->uid)) {
            $json['uid']                  = $this->uid;
        }
        if (isset($this->returnOrderId)) {
            $json['return_order_id']      = $this->returnOrderId;
        }
        if (isset($this->returnUid)) {
            $json['return_uid']           = $this->returnUid;
        }
        if (isset($this->returnLineItemUid)) {
            $json['return_line_item_uid'] = $this->returnLineItemUid;
        }
        if (isset($this->returnedQuantity)) {
            $json['returned_quantity']    = $this->returnedQuantity;
        }
        if (isset($this->refundedMoney)) {
            $json['refunded_money']       = $this->refundedMoney;
        }
        if (isset($this->state)) {
            $json['state']                = $this->state;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

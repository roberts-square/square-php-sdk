<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a Discount Code that may be applied to an Order if the necessary
 * criteria are met. Discount Codes are created through the Discount Codes API.
 */
class OrderDiscountCode implements \JsonSerializable
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var int|null
     */
    private $quantity;

    /**
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    /**
     * Returns Id.
     * The identifier of the Discount Code.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The identifier of the Discount Code.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Quantity.
     * The number of instances of the Discount Code. If unset, the quantity defaults to `1`.
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     * The number of instances of the Discount Code. If unset, the quantity defaults to `1`.
     *
     * @maps quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
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
        $json['id']           = $this->id;
        if (isset($this->quantity)) {
            $json['quantity'] = $this->quantity;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

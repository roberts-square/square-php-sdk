<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class TerminalIncludedResources implements \JsonSerializable
{
    /**
     * @var Card[]|null
     */
    private $cards;

    /**
     * @var Customer[]|null
     */
    private $customers;

    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * @var Order[]|null
     */
    private $orders;

    /**
     * @var Payment[]|null
     */
    private $payments;

    /**
     * Returns Cards.
     * Included card resources
     *
     * @return Card[]|null
     */
    public function getCards(): ?array
    {
        return $this->cards;
    }

    /**
     * Sets Cards.
     * Included card resources
     *
     * @maps cards
     *
     * @param Card[]|null $cards
     */
    public function setCards(?array $cards): void
    {
        $this->cards = $cards;
    }

    /**
     * Returns Customers.
     * Included customer resources
     *
     * @return Customer[]|null
     */
    public function getCustomers(): ?array
    {
        return $this->customers;
    }

    /**
     * Sets Customers.
     * Included customer resources
     *
     * @maps customers
     *
     * @param Customer[]|null $customers
     */
    public function setCustomers(?array $customers): void
    {
        $this->customers = $customers;
    }

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
     * Returns Orders.
     * Included order resources for a given order_id, if available.
     *
     * @return Order[]|null
     */
    public function getOrders(): ?array
    {
        return $this->orders;
    }

    /**
     * Sets Orders.
     * Included order resources for a given order_id, if available.
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
     * Returns Payments.
     * Included payments
     *
     * @return Payment[]|null
     */
    public function getPayments(): ?array
    {
        return $this->payments;
    }

    /**
     * Sets Payments.
     * Included payments
     *
     * @maps payments
     *
     * @param Payment[]|null $payments
     */
    public function setPayments(?array $payments): void
    {
        $this->payments = $payments;
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
        if (isset($this->cards)) {
            $json['cards']     = $this->cards;
        }
        if (isset($this->customers)) {
            $json['customers'] = $this->customers;
        }
        if (isset($this->errors)) {
            $json['errors']    = $this->errors;
        }
        if (isset($this->orders)) {
            $json['orders']    = $this->orders;
        }
        if (isset($this->payments)) {
            $json['payments']  = $this->payments;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

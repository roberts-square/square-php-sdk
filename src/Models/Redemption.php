<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents the application of a `DiscountCode` to an order.
 */
class Redemption implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $discountCodeId;

    /**
     * @var string|null
     */
    private $orderId;

    /**
     * @var string|null
     */
    private $state;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $updatedAt;

    /**
     * @var string|null
     */
    private $version;

    /**
     * @var string|null
     */
    private $customerId;

    /**
     * Returns Id.
     * The Square-assigned ID of the `Redemption` resource.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The Square-assigned ID of the `Redemption` resource.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Discount Code Id.
     * The ID of the discount code used.
     */
    public function getDiscountCodeId(): ?string
    {
        return $this->discountCodeId;
    }

    /**
     * Sets Discount Code Id.
     * The ID of the discount code used.
     *
     * @maps discount_code_id
     */
    public function setDiscountCodeId(?string $discountCodeId): void
    {
        $this->discountCodeId = $discountCodeId;
    }

    /**
     * Returns Order Id.
     * The ID of the order to which the discount code is applied.
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * Sets Order Id.
     * The ID of the order to which the discount code is applied.
     *
     * @maps order_id
     */
    public function setOrderId(?string $orderId): void
    {
        $this->orderId = $orderId;
    }

    /**
     * Returns State.
     * The status of the redemption.
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * Sets State.
     * The status of the redemption.
     *
     * @maps state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * Returns Created At.
     * The timestamp when the `Redemption` was created, in RFC 3339 format.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * The timestamp when the `Redemption` was created, in RFC 3339 format.
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     * The timestamp when the `Redemption` was last updated, in RFC 3339 format.
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     * The timestamp when the `Redemption` was last updated, in RFC 3339 format.
     *
     * @maps updated_at
     */
    public function setUpdatedAt(?string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Version.
     * The `Redemption` version number. It increments each time an update is applied.
     * It is used to enforce [Optimistic Concurrency](https://developer.squareup.com/docs/working-with-
     * apis/optimistic-concurrency).
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * Sets Version.
     * The `Redemption` version number. It increments each time an update is applied.
     * It is used to enforce [Optimistic Concurrency](https://developer.squareup.com/docs/working-with-
     * apis/optimistic-concurrency).
     *
     * @maps version
     */
    public function setVersion(?string $version): void
    {
        $this->version = $version;
    }

    /**
     * Returns Customer Id.
     * The ID of the [Customer]($m/Customer) that applied the discount code.
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     * The ID of the [Customer]($m/Customer) that applied the discount code.
     *
     * @maps customer_id
     */
    public function setCustomerId(?string $customerId): void
    {
        $this->customerId = $customerId;
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
        if (isset($this->id)) {
            $json['id']               = $this->id;
        }
        if (isset($this->discountCodeId)) {
            $json['discount_code_id'] = $this->discountCodeId;
        }
        if (isset($this->orderId)) {
            $json['order_id']         = $this->orderId;
        }
        if (isset($this->state)) {
            $json['state']            = $this->state;
        }
        if (isset($this->createdAt)) {
            $json['created_at']       = $this->createdAt;
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']       = $this->updatedAt;
        }
        if (isset($this->version)) {
            $json['version']          = $this->version;
        }
        if (isset($this->customerId)) {
            $json['customer_id']      = $this->customerId;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

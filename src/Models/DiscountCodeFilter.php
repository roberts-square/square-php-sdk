<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Filter parameters used to search for discount codes.
 */
class DiscountCodeFilter implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var bool|null
     */
    private $excludeInvalid;

    /**
     * @var bool|null
     */
    private $excludeFullyRedeemed;

    /**
     * @var string|null
     */
    private $customerId;

    /**
     * Returns Code.
     * The `code` associated with a `DiscountCode` resource.
     * You must provide either this field or the `customer_id` field.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * The `code` associated with a `DiscountCode` resource.
     * You must provide either this field or the `customer_id` field.
     *
     * @maps code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Exclude Invalid.
     * If true, it excludes `DiscountCode` resources with an `expires_at` in the past or a `valid_from`
     * in the future from the results.
     */
    public function getExcludeInvalid(): ?bool
    {
        return $this->excludeInvalid;
    }

    /**
     * Sets Exclude Invalid.
     * If true, it excludes `DiscountCode` resources with an `expires_at` in the past or a `valid_from`
     * in the future from the results.
     *
     * @maps exclude_invalid
     */
    public function setExcludeInvalid(?bool $excludeInvalid): void
    {
        $this->excludeInvalid = $excludeInvalid;
    }

    /**
     * Returns Exclude Fully Redeemed.
     * If true, it excludes `DiscountCode` resources that have been redeemed the maximum number of
     * times (as configured by `max_redemptions`) from the results.
     */
    public function getExcludeFullyRedeemed(): ?bool
    {
        return $this->excludeFullyRedeemed;
    }

    /**
     * Sets Exclude Fully Redeemed.
     * If true, it excludes `DiscountCode` resources that have been redeemed the maximum number of
     * times (as configured by `max_redemptions`) from the results.
     *
     * @maps exclude_fully_redeemed
     */
    public function setExcludeFullyRedeemed(?bool $excludeFullyRedeemed): void
    {
        $this->excludeFullyRedeemed = $excludeFullyRedeemed;
    }

    /**
     * Returns Customer Id.
     * The ID of the customer to whom the `DiscountCode` resources are issued.
     * You must provide either this field or the `code` field.
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     * The ID of the customer to whom the `DiscountCode` resources are issued.
     * You must provide either this field or the `code` field.
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
        if (isset($this->code)) {
            $json['code']                   = $this->code;
        }
        if (isset($this->excludeInvalid)) {
            $json['exclude_invalid']        = $this->excludeInvalid;
        }
        if (isset($this->excludeFullyRedeemed)) {
            $json['exclude_fully_redeemed'] = $this->excludeFullyRedeemed;
        }
        if (isset($this->customerId)) {
            $json['customer_id']            = $this->customerId;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

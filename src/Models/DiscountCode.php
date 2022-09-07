<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Associates a discount to a code issued to customers.
 * The pricing rule referenced by this resource determines how and what is discounted.
 */
class DiscountCode implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $pricingRuleId;

    /**
     * @var int|null
     */
    private $maxRedemptions;

    /**
     * @var string|null
     */
    private $validFrom;

    /**
     * @var string|null
     */
    private $expiresAt;

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
     * The Square-assigned ID of the discount code.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The Square-assigned ID of the discount code.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Code.
     * The alphanumeric code that can be used to look up the discount code. The `code` is unique
     * within the seller account. The code is always represented in uppercase.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * The alphanumeric code that can be used to look up the discount code. The `code` is unique
     * within the seller account. The code is always represented in uppercase.
     *
     * @maps code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Pricing Rule Id.
     * The ID of the [CatalogPricingRule]($m/CatalogPricingRule)
     * that determines how and what is discounted when the
     * `DiscountCode` is applied to an order.
     */
    public function getPricingRuleId(): ?string
    {
        return $this->pricingRuleId;
    }

    /**
     * Sets Pricing Rule Id.
     * The ID of the [CatalogPricingRule]($m/CatalogPricingRule)
     * that determines how and what is discounted when the
     * `DiscountCode` is applied to an order.
     *
     * @maps pricing_rule_id
     */
    public function setPricingRuleId(?string $pricingRuleId): void
    {
        $this->pricingRuleId = $pricingRuleId;
    }

    /**
     * Returns Max Redemptions.
     * The number of orders to which the `DiscountCode` can be applied. The default is 1.
     * The value -1 indicates that the `DiscountCode` can be applied to any number of orders (no usage
     * limit).
     */
    public function getMaxRedemptions(): ?int
    {
        return $this->maxRedemptions;
    }

    /**
     * Sets Max Redemptions.
     * The number of orders to which the `DiscountCode` can be applied. The default is 1.
     * The value -1 indicates that the `DiscountCode` can be applied to any number of orders (no usage
     * limit).
     *
     * @maps max_redemptions
     */
    public function setMaxRedemptions(?int $maxRedemptions): void
    {
        $this->maxRedemptions = $maxRedemptions;
    }

    /**
     * Returns Valid From.
     * The timestamp after which the `DiscountCode` can be redeemed, in RFC 3339 format.
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }

    /**
     * Sets Valid From.
     * The timestamp after which the `DiscountCode` can be redeemed, in RFC 3339 format.
     *
     * @maps valid_from
     */
    public function setValidFrom(?string $validFrom): void
    {
        $this->validFrom = $validFrom;
    }

    /**
     * Returns Expires At.
     * The timestamp before which the `DiscountCode` can be redeemed, in RFC 3339 format.
     * If the discount code has no expiry, this field is null.
     */
    public function getExpiresAt(): ?string
    {
        return $this->expiresAt;
    }

    /**
     * Sets Expires At.
     * The timestamp before which the `DiscountCode` can be redeemed, in RFC 3339 format.
     * If the discount code has no expiry, this field is null.
     *
     * @maps expires_at
     */
    public function setExpiresAt(?string $expiresAt): void
    {
        $this->expiresAt = $expiresAt;
    }

    /**
     * Returns Created At.
     * The timestamp when the `DiscountCode` was created, in RFC 3339 format.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * The timestamp when the `DiscountCode` was created, in RFC 3339 format.
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     * The timestamp when the `DiscountCode` was last updated, in RFC 3339 format.
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     * The timestamp when the `DiscountCode` was last updated, in RFC 3339 format.
     *
     * @maps updated_at
     */
    public function setUpdatedAt(?string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Version.
     * The `DiscountCode` version number. It increments each time an update is applied.
     * It is used to enforce [Optimistic Concurrency](https://developer.squareup.com/docs/working-with-
     * apis/optimistic-concurrency).
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * Sets Version.
     * The `DiscountCode` version number. It increments each time an update is applied.
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
     * The ID of the associated [Customer]($m/Customer).
     * This field can be used in [SearchDiscountCodes]($e/DiscountCodes/SearchDiscountCodes)
     * to retrieve discount codes for a given customer.
     * However, this does not limit the redemption of the discount code to that customer.
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     * The ID of the associated [Customer]($m/Customer).
     * This field can be used in [SearchDiscountCodes]($e/DiscountCodes/SearchDiscountCodes)
     * to retrieve discount codes for a given customer.
     * However, this does not limit the redemption of the discount code to that customer.
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
            $json['id']              = $this->id;
        }
        if (isset($this->code)) {
            $json['code']            = $this->code;
        }
        if (isset($this->pricingRuleId)) {
            $json['pricing_rule_id'] = $this->pricingRuleId;
        }
        if (isset($this->maxRedemptions)) {
            $json['max_redemptions'] = $this->maxRedemptions;
        }
        if (isset($this->validFrom)) {
            $json['valid_from']      = $this->validFrom;
        }
        if (isset($this->expiresAt)) {
            $json['expires_at']      = $this->expiresAt;
        }
        if (isset($this->createdAt)) {
            $json['created_at']      = $this->createdAt;
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']      = $this->updatedAt;
        }
        if (isset($this->version)) {
            $json['version']         = $this->version;
        }
        if (isset($this->customerId)) {
            $json['customer_id']     = $this->customerId;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

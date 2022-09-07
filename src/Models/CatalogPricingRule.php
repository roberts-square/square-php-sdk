<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Defines how discounts are automatically applied to a set of items that match the pricing rule
 * during the active time period.
 */
class CatalogPricingRule implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string[]|null
     */
    private $timePeriodIds;

    /**
     * @var string|null
     */
    private $discountId;

    /**
     * @var string|null
     */
    private $matchProductsId;

    /**
     * @var string|null
     */
    private $applyProductsId;

    /**
     * @var string|null
     */
    private $stackable;

    /**
     * @var string|null
     */
    private $excludeProductsId;

    /**
     * @var string|null
     */
    private $validFromDate;

    /**
     * @var string|null
     */
    private $validFromLocalTime;

    /**
     * @var string|null
     */
    private $validUntilDate;

    /**
     * @var string|null
     */
    private $validUntilLocalTime;

    /**
     * @var string|null
     */
    private $excludeStrategy;

    /**
     * @var string|null
     */
    private $applicationMode;

    /**
     * @var string|null
     */
    private $discountTargetScope;

    /**
     * @var int|null
     */
    private $maxApplicationsPerAttachment;

    /**
     * @var Money|null
     */
    private $minimumOrderSubtotalMoney;

    /**
     * @var string[]|null
     */
    private $customerGroupIdsAny;

    /**
     * @var string|null
     */
    private $serviceChargeTargetScope;

    /**
     * @var string|null
     */
    private $serviceChargeId;

    /**
     * @var string[]|null
     */
    private $enabledPricingSources;

    /**
     * @var string[]|null
     */
    private $disabledPricingSources;

    /**
     * @var string[]|null
     */
    private $paymentTypes;

    /**
     * Returns Name.
     * User-defined name for the pricing rule. For example, "Buy one get one
     * free" or "10% off".
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * User-defined name for the pricing rule. For example, "Buy one get one
     * free" or "10% off".
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Time Period Ids.
     * A list of unique IDs for the catalog time periods when
     * this pricing rule is in effect. If left unset, the pricing rule is always
     * in effect.
     *
     * @return string[]|null
     */
    public function getTimePeriodIds(): ?array
    {
        return $this->timePeriodIds;
    }

    /**
     * Sets Time Period Ids.
     * A list of unique IDs for the catalog time periods when
     * this pricing rule is in effect. If left unset, the pricing rule is always
     * in effect.
     *
     * @maps time_period_ids
     *
     * @param string[]|null $timePeriodIds
     */
    public function setTimePeriodIds(?array $timePeriodIds): void
    {
        $this->timePeriodIds = $timePeriodIds;
    }

    /**
     * Returns Discount Id.
     * Unique ID for the `CatalogDiscount` to take off
     * the price of all matched items.
     */
    public function getDiscountId(): ?string
    {
        return $this->discountId;
    }

    /**
     * Sets Discount Id.
     * Unique ID for the `CatalogDiscount` to take off
     * the price of all matched items.
     *
     * @maps discount_id
     */
    public function setDiscountId(?string $discountId): void
    {
        $this->discountId = $discountId;
    }

    /**
     * Returns Match Products Id.
     * Unique ID for the `CatalogProductSet` that will be matched by this rule. A match rule
     * matches within the entire cart, and can match multiple times. This field will always be set.
     */
    public function getMatchProductsId(): ?string
    {
        return $this->matchProductsId;
    }

    /**
     * Sets Match Products Id.
     * Unique ID for the `CatalogProductSet` that will be matched by this rule. A match rule
     * matches within the entire cart, and can match multiple times. This field will always be set.
     *
     * @maps match_products_id
     */
    public function setMatchProductsId(?string $matchProductsId): void
    {
        $this->matchProductsId = $matchProductsId;
    }

    /**
     * Returns Apply Products Id.
     * __Deprecated__: Please use the `exclude_products_id` field to apply
     * an exclude set instead. Exclude sets allow better control over quantity
     * ranges and offer more flexibility for which matched items receive a discount.
     *
     * `CatalogProductSet` to apply the pricing to.
     * An apply rule matches within the subset of the cart that fits the match rules (the match set).
     * An apply rule can only match once in the match set.
     * If not supplied, the pricing will be applied to all products in the match set.
     * Other products retain their base price, or a price generated by other rules.
     */
    public function getApplyProductsId(): ?string
    {
        return $this->applyProductsId;
    }

    /**
     * Sets Apply Products Id.
     * __Deprecated__: Please use the `exclude_products_id` field to apply
     * an exclude set instead. Exclude sets allow better control over quantity
     * ranges and offer more flexibility for which matched items receive a discount.
     *
     * `CatalogProductSet` to apply the pricing to.
     * An apply rule matches within the subset of the cart that fits the match rules (the match set).
     * An apply rule can only match once in the match set.
     * If not supplied, the pricing will be applied to all products in the match set.
     * Other products retain their base price, or a price generated by other rules.
     *
     * @maps apply_products_id
     */
    public function setApplyProductsId(?string $applyProductsId): void
    {
        $this->applyProductsId = $applyProductsId;
    }

    /**
     * Returns Stackable.
     * Indicates how a CatalogPricingRule can be combined with other pricing rules.
     */
    public function getStackable(): ?string
    {
        return $this->stackable;
    }

    /**
     * Sets Stackable.
     * Indicates how a CatalogPricingRule can be combined with other pricing rules.
     *
     * @maps stackable
     */
    public function setStackable(?string $stackable): void
    {
        $this->stackable = $stackable;
    }

    /**
     * Returns Exclude Products Id.
     * `CatalogProductSet` to exclude from the pricing rule.
     * An exclude rule matches within the subset of the cart that fits the match rules (the match set).
     * An exclude rule can only match once in the match set.
     * If not supplied, the pricing will be applied to all products in the match set.
     * Other products retain their base price, or a price generated by other rules.
     */
    public function getExcludeProductsId(): ?string
    {
        return $this->excludeProductsId;
    }

    /**
     * Sets Exclude Products Id.
     * `CatalogProductSet` to exclude from the pricing rule.
     * An exclude rule matches within the subset of the cart that fits the match rules (the match set).
     * An exclude rule can only match once in the match set.
     * If not supplied, the pricing will be applied to all products in the match set.
     * Other products retain their base price, or a price generated by other rules.
     *
     * @maps exclude_products_id
     */
    public function setExcludeProductsId(?string $excludeProductsId): void
    {
        $this->excludeProductsId = $excludeProductsId;
    }

    /**
     * Returns Valid From Date.
     * Represents the date the Pricing Rule is valid from. Represented in RFC 3339 full-date format (YYYY-
     * MM-DD).
     */
    public function getValidFromDate(): ?string
    {
        return $this->validFromDate;
    }

    /**
     * Sets Valid From Date.
     * Represents the date the Pricing Rule is valid from. Represented in RFC 3339 full-date format (YYYY-
     * MM-DD).
     *
     * @maps valid_from_date
     */
    public function setValidFromDate(?string $validFromDate): void
    {
        $this->validFromDate = $validFromDate;
    }

    /**
     * Returns Valid From Local Time.
     * Represents the local time the pricing rule should be valid from. Represented in RFC 3339 partial-
     * time format
     * (HH:MM:SS). Partial seconds will be truncated.
     */
    public function getValidFromLocalTime(): ?string
    {
        return $this->validFromLocalTime;
    }

    /**
     * Sets Valid From Local Time.
     * Represents the local time the pricing rule should be valid from. Represented in RFC 3339 partial-
     * time format
     * (HH:MM:SS). Partial seconds will be truncated.
     *
     * @maps valid_from_local_time
     */
    public function setValidFromLocalTime(?string $validFromLocalTime): void
    {
        $this->validFromLocalTime = $validFromLocalTime;
    }

    /**
     * Returns Valid Until Date.
     * Represents the date the Pricing Rule is valid until. Represented in RFC 3339 full-date format (YYYY-
     * MM-DD).
     */
    public function getValidUntilDate(): ?string
    {
        return $this->validUntilDate;
    }

    /**
     * Sets Valid Until Date.
     * Represents the date the Pricing Rule is valid until. Represented in RFC 3339 full-date format (YYYY-
     * MM-DD).
     *
     * @maps valid_until_date
     */
    public function setValidUntilDate(?string $validUntilDate): void
    {
        $this->validUntilDate = $validUntilDate;
    }

    /**
     * Returns Valid Until Local Time.
     * Represents the local time the pricing rule should be valid until. Represented in RFC 3339 partial-
     * time format
     * (HH:MM:SS). Partial seconds will be truncated.
     */
    public function getValidUntilLocalTime(): ?string
    {
        return $this->validUntilLocalTime;
    }

    /**
     * Sets Valid Until Local Time.
     * Represents the local time the pricing rule should be valid until. Represented in RFC 3339 partial-
     * time format
     * (HH:MM:SS). Partial seconds will be truncated.
     *
     * @maps valid_until_local_time
     */
    public function setValidUntilLocalTime(?string $validUntilLocalTime): void
    {
        $this->validUntilLocalTime = $validUntilLocalTime;
    }

    /**
     * Returns Exclude Strategy.
     * Indicates which products matched by a CatalogPricingRule
     * will be excluded if the pricing rule uses an exclude set.
     */
    public function getExcludeStrategy(): ?string
    {
        return $this->excludeStrategy;
    }

    /**
     * Sets Exclude Strategy.
     * Indicates which products matched by a CatalogPricingRule
     * will be excluded if the pricing rule uses an exclude set.
     *
     * @maps exclude_strategy
     */
    public function setExcludeStrategy(?string $excludeStrategy): void
    {
        $this->excludeStrategy = $excludeStrategy;
    }

    /**
     * Returns Application Mode.
     * Indicates if a PricingRule may be automatically applied, or if some other conditions must be met
     */
    public function getApplicationMode(): ?string
    {
        return $this->applicationMode;
    }

    /**
     * Sets Application Mode.
     * Indicates if a PricingRule may be automatically applied, or if some other conditions must be met
     *
     * @maps application_mode
     */
    public function setApplicationMode(?string $applicationMode): void
    {
        $this->applicationMode = $applicationMode;
    }

    /**
     * Returns Discount Target Scope.
     * Determines the scope at which the discounts created by the pricing rule
     * should be applied (i.e.- whole purchase or line item)
     */
    public function getDiscountTargetScope(): ?string
    {
        return $this->discountTargetScope;
    }

    /**
     * Sets Discount Target Scope.
     * Determines the scope at which the discounts created by the pricing rule
     * should be applied (i.e.- whole purchase or line item)
     *
     * @maps discount_target_scope
     */
    public function setDiscountTargetScope(?string $discountTargetScope): void
    {
        $this->discountTargetScope = $discountTargetScope;
    }

    /**
     * Returns Max Applications Per Attachment.
     * The maximum number of times a pricing rule may be applied for a
     * given attachment (coupon or loyalty reward)
     *
     * Default value: -1 (meaning no limit)
     */
    public function getMaxApplicationsPerAttachment(): ?int
    {
        return $this->maxApplicationsPerAttachment;
    }

    /**
     * Sets Max Applications Per Attachment.
     * The maximum number of times a pricing rule may be applied for a
     * given attachment (coupon or loyalty reward)
     *
     * Default value: -1 (meaning no limit)
     *
     * @maps max_applications_per_attachment
     */
    public function setMaxApplicationsPerAttachment(?int $maxApplicationsPerAttachment): void
    {
        $this->maxApplicationsPerAttachment = $maxApplicationsPerAttachment;
    }

    /**
     * Returns Minimum Order Subtotal Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     */
    public function getMinimumOrderSubtotalMoney(): ?Money
    {
        return $this->minimumOrderSubtotalMoney;
    }

    /**
     * Sets Minimum Order Subtotal Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     *
     * @maps minimum_order_subtotal_money
     */
    public function setMinimumOrderSubtotalMoney(?Money $minimumOrderSubtotalMoney): void
    {
        $this->minimumOrderSubtotalMoney = $minimumOrderSubtotalMoney;
    }

    /**
     * Returns Customer Group Ids Any.
     * A list of IDs of customer groups, the members of which are eligible for discounts specified in this
     * pricing rule.
     * Notice that a group ID is generated by the Customers API.
     * If this field is not set, the specified discount applies to matched products sold to anyone whether
     * the buyer
     * has a customer profile created or not. If this `customer_group_ids_any` field is set, the specified
     * discount
     * applies only to matched products sold to customers belonging to the specified customer groups.
     *
     * @return string[]|null
     */
    public function getCustomerGroupIdsAny(): ?array
    {
        return $this->customerGroupIdsAny;
    }

    /**
     * Sets Customer Group Ids Any.
     * A list of IDs of customer groups, the members of which are eligible for discounts specified in this
     * pricing rule.
     * Notice that a group ID is generated by the Customers API.
     * If this field is not set, the specified discount applies to matched products sold to anyone whether
     * the buyer
     * has a customer profile created or not. If this `customer_group_ids_any` field is set, the specified
     * discount
     * applies only to matched products sold to customers belonging to the specified customer groups.
     *
     * @maps customer_group_ids_any
     *
     * @param string[]|null $customerGroupIdsAny
     */
    public function setCustomerGroupIdsAny(?array $customerGroupIdsAny): void
    {
        $this->customerGroupIdsAny = $customerGroupIdsAny;
    }

    /**
     * Returns Service Charge Target Scope.
     * Determines the scope at which the service charges created by the pricing rule
     * should be applied (i.e.- whole purchase or line item).
     */
    public function getServiceChargeTargetScope(): ?string
    {
        return $this->serviceChargeTargetScope;
    }

    /**
     * Sets Service Charge Target Scope.
     * Determines the scope at which the service charges created by the pricing rule
     * should be applied (i.e.- whole purchase or line item).
     *
     * @maps service_charge_target_scope
     */
    public function setServiceChargeTargetScope(?string $serviceChargeTargetScope): void
    {
        $this->serviceChargeTargetScope = $serviceChargeTargetScope;
    }

    /**
     * Returns Service Charge Id.
     * Unique ID for the `CatalogServiceCharge` to add on
     * the price of all matched items.
     */
    public function getServiceChargeId(): ?string
    {
        return $this->serviceChargeId;
    }

    /**
     * Sets Service Charge Id.
     * Unique ID for the `CatalogServiceCharge` to add on
     * the price of all matched items.
     *
     * @maps service_charge_id
     */
    public function setServiceChargeId(?string $serviceChargeId): void
    {
        $this->serviceChargeId = $serviceChargeId;
    }

    /**
     * Returns Enabled Pricing Sources.
     * The list of Order sources that a pricing rule is explicitly enabled on.
     * If unset, the pricing rule is implicitly enabled on all sources.
     * See [CatalogPricingSource](#type-catalogpricingsource) for possible values
     *
     * @return string[]|null
     */
    public function getEnabledPricingSources(): ?array
    {
        return $this->enabledPricingSources;
    }

    /**
     * Sets Enabled Pricing Sources.
     * The list of Order sources that a pricing rule is explicitly enabled on.
     * If unset, the pricing rule is implicitly enabled on all sources.
     * See [CatalogPricingSource](#type-catalogpricingsource) for possible values
     *
     * @maps enabled_pricing_sources
     *
     * @param string[]|null $enabledPricingSources
     */
    public function setEnabledPricingSources(?array $enabledPricingSources): void
    {
        $this->enabledPricingSources = $enabledPricingSources;
    }

    /**
     * Returns Disabled Pricing Sources.
     * The list of Order sources that a pricing rule is explicitly disabled on.
     * See [CatalogPricingSource](#type-catalogpricingsource) for possible values
     *
     * @return string[]|null
     */
    public function getDisabledPricingSources(): ?array
    {
        return $this->disabledPricingSources;
    }

    /**
     * Sets Disabled Pricing Sources.
     * The list of Order sources that a pricing rule is explicitly disabled on.
     * See [CatalogPricingSource](#type-catalogpricingsource) for possible values
     *
     * @maps disabled_pricing_sources
     *
     * @param string[]|null $disabledPricingSources
     */
    public function setDisabledPricingSources(?array $disabledPricingSources): void
    {
        $this->disabledPricingSources = $disabledPricingSources;
    }

    /**
     * Returns Payment Types.
     * The list of payment types that a pricing rule should apply to.
     * See [PricingRulePaymentType](#type-pricingrulepaymenttype) for possible values
     *
     * @return string[]|null
     */
    public function getPaymentTypes(): ?array
    {
        return $this->paymentTypes;
    }

    /**
     * Sets Payment Types.
     * The list of payment types that a pricing rule should apply to.
     * See [PricingRulePaymentType](#type-pricingrulepaymenttype) for possible values
     *
     * @maps payment_types
     *
     * @param string[]|null $paymentTypes
     */
    public function setPaymentTypes(?array $paymentTypes): void
    {
        $this->paymentTypes = $paymentTypes;
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
        if (isset($this->name)) {
            $json['name']                            = $this->name;
        }
        if (isset($this->timePeriodIds)) {
            $json['time_period_ids']                 = $this->timePeriodIds;
        }
        if (isset($this->discountId)) {
            $json['discount_id']                     = $this->discountId;
        }
        if (isset($this->matchProductsId)) {
            $json['match_products_id']               = $this->matchProductsId;
        }
        if (isset($this->applyProductsId)) {
            $json['apply_products_id']               = $this->applyProductsId;
        }
        if (isset($this->stackable)) {
            $json['stackable']                       = $this->stackable;
        }
        if (isset($this->excludeProductsId)) {
            $json['exclude_products_id']             = $this->excludeProductsId;
        }
        if (isset($this->validFromDate)) {
            $json['valid_from_date']                 = $this->validFromDate;
        }
        if (isset($this->validFromLocalTime)) {
            $json['valid_from_local_time']           = $this->validFromLocalTime;
        }
        if (isset($this->validUntilDate)) {
            $json['valid_until_date']                = $this->validUntilDate;
        }
        if (isset($this->validUntilLocalTime)) {
            $json['valid_until_local_time']          = $this->validUntilLocalTime;
        }
        if (isset($this->excludeStrategy)) {
            $json['exclude_strategy']                = $this->excludeStrategy;
        }
        if (isset($this->applicationMode)) {
            $json['application_mode']                = $this->applicationMode;
        }
        if (isset($this->discountTargetScope)) {
            $json['discount_target_scope']           = $this->discountTargetScope;
        }
        if (isset($this->maxApplicationsPerAttachment)) {
            $json['max_applications_per_attachment'] = $this->maxApplicationsPerAttachment;
        }
        if (isset($this->minimumOrderSubtotalMoney)) {
            $json['minimum_order_subtotal_money']    = $this->minimumOrderSubtotalMoney;
        }
        if (isset($this->customerGroupIdsAny)) {
            $json['customer_group_ids_any']          = $this->customerGroupIdsAny;
        }
        if (isset($this->serviceChargeTargetScope)) {
            $json['service_charge_target_scope']     = $this->serviceChargeTargetScope;
        }
        if (isset($this->serviceChargeId)) {
            $json['service_charge_id']               = $this->serviceChargeId;
        }
        if (isset($this->enabledPricingSources)) {
            $json['enabled_pricing_sources']         = $this->enabledPricingSources;
        }
        if (isset($this->disabledPricingSources)) {
            $json['disabled_pricing_sources']        = $this->disabledPricingSources;
        }
        if (isset($this->paymentTypes)) {
            $json['payment_types']                   = $this->paymentTypes;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Describes a subscription plan. For more information, see
 * [Set Up and Manage a Subscription Plan](https://developer.squareup.com/docs/subscriptions-api/setup-
 * plan).
 */
class CatalogSubscriptionPlan implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var SubscriptionPhase[]|null
     */
    private $phases;

    /**
     * @var SubscriptionTaxInfo|null
     */
    private $taxInfo;

    /**
     * @var SubscriptionConfiguration|null
     */
    private $configuration;

    /**
     * @var int|null
     */
    private $monthlyBillingAnchorDate;

    /**
     * @var bool|null
     */
    private $canProrate;

    /**
     * @var CatalogObject[]|null
     */
    private $subscriptionPlanVariations;

    /**
     * @var string[]|null
     */
    private $eligibleItemIds;

    /**
     * @var string[]|null
     */
    private $eligibleCategoryIds;

    /**
     * @var bool|null
     */
    private $allItems;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns Name.
     * The name of the plan.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the plan.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Phases.
     * A list of SubscriptionPhase containing the [SubscriptionPhase]($m/SubscriptionPhase) for this plan.
     * This field is required. Not including this field will throw a REQUIRED_FIELD_MISSING error
     *
     * @return SubscriptionPhase[]|null
     */
    public function getPhases(): ?array
    {
        return $this->phases;
    }

    /**
     * Sets Phases.
     * A list of SubscriptionPhase containing the [SubscriptionPhase]($m/SubscriptionPhase) for this plan.
     * This field is required. Not including this field will throw a REQUIRED_FIELD_MISSING error
     *
     * @maps phases
     *
     * @param SubscriptionPhase[]|null $phases
     */
    public function setPhases(?array $phases): void
    {
        $this->phases = $phases;
    }

    /**
     * Returns Tax Info.
     * Describes the information to be used when calculating taxes for subscriptions.
     */
    public function getTaxInfo(): ?SubscriptionTaxInfo
    {
        return $this->taxInfo;
    }

    /**
     * Sets Tax Info.
     * Describes the information to be used when calculating taxes for subscriptions.
     *
     * @maps tax_info
     */
    public function setTaxInfo(?SubscriptionTaxInfo $taxInfo): void
    {
        $this->taxInfo = $taxInfo;
    }

    /**
     * Returns Configuration.
     * Describes the configuration for the subscription.
     */
    public function getConfiguration(): ?SubscriptionConfiguration
    {
        return $this->configuration;
    }

    /**
     * Sets Configuration.
     * Describes the configuration for the subscription.
     *
     * @maps configuration
     */
    public function setConfiguration(?SubscriptionConfiguration $configuration): void
    {
        $this->configuration = $configuration;
    }

    /**
     * Returns Monthly Billing Anchor Date.
     * The day of the month the billing period starts.
     */
    public function getMonthlyBillingAnchorDate(): ?int
    {
        return $this->monthlyBillingAnchorDate;
    }

    /**
     * Sets Monthly Billing Anchor Date.
     * The day of the month the billing period starts.
     *
     * @maps monthly_billing_anchor_date
     */
    public function setMonthlyBillingAnchorDate(?int $monthlyBillingAnchorDate): void
    {
        $this->monthlyBillingAnchorDate = $monthlyBillingAnchorDate;
    }

    /**
     * Returns Can Prorate.
     * Whether bills for this plan can be split for proration.
     */
    public function getCanProrate(): ?bool
    {
        return $this->canProrate;
    }

    /**
     * Sets Can Prorate.
     * Whether bills for this plan can be split for proration.
     *
     * @maps can_prorate
     */
    public function setCanProrate(?bool $canProrate): void
    {
        $this->canProrate = $canProrate;
    }

    /**
     * Returns Subscription Plan Variations.
     * The list of subscription plan variations available for this product
     *
     * @return CatalogObject[]|null
     */
    public function getSubscriptionPlanVariations(): ?array
    {
        return $this->subscriptionPlanVariations;
    }

    /**
     * Sets Subscription Plan Variations.
     * The list of subscription plan variations available for this product
     *
     * @maps subscription_plan_variations
     *
     * @param CatalogObject[]|null $subscriptionPlanVariations
     */
    public function setSubscriptionPlanVariations(?array $subscriptionPlanVariations): void
    {
        $this->subscriptionPlanVariations = $subscriptionPlanVariations;
    }

    /**
     * Returns Eligible Item Ids.
     * The list of IDs of `CatalogItems` that are eligible for subscription by this SubscriptionPlan's
     * variations.
     *
     * @return string[]|null
     */
    public function getEligibleItemIds(): ?array
    {
        return $this->eligibleItemIds;
    }

    /**
     * Sets Eligible Item Ids.
     * The list of IDs of `CatalogItems` that are eligible for subscription by this SubscriptionPlan's
     * variations.
     *
     * @maps eligible_item_ids
     *
     * @param string[]|null $eligibleItemIds
     */
    public function setEligibleItemIds(?array $eligibleItemIds): void
    {
        $this->eligibleItemIds = $eligibleItemIds;
    }

    /**
     * Returns Eligible Category Ids.
     * The list of IDs of `CatalogCategory` that are eligible for subscription by this SubscriptionPlan's
     * variations.
     *
     * @return string[]|null
     */
    public function getEligibleCategoryIds(): ?array
    {
        return $this->eligibleCategoryIds;
    }

    /**
     * Sets Eligible Category Ids.
     * The list of IDs of `CatalogCategory` that are eligible for subscription by this SubscriptionPlan's
     * variations.
     *
     * @maps eligible_category_ids
     *
     * @param string[]|null $eligibleCategoryIds
     */
    public function setEligibleCategoryIds(?array $eligibleCategoryIds): void
    {
        $this->eligibleCategoryIds = $eligibleCategoryIds;
    }

    /**
     * Returns All Items.
     * If true, all items in the merchant's catalog are subscribable by this SubscriptionPlan.
     */
    public function getAllItems(): ?bool
    {
        return $this->allItems;
    }

    /**
     * Sets All Items.
     * If true, all items in the merchant's catalog are subscribable by this SubscriptionPlan.
     *
     * @maps all_items
     */
    public function setAllItems(?bool $allItems): void
    {
        $this->allItems = $allItems;
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
        $json['name']                             = $this->name;
        if (isset($this->phases)) {
            $json['phases']                       = $this->phases;
        }
        if (isset($this->taxInfo)) {
            $json['tax_info']                     = $this->taxInfo;
        }
        if (isset($this->configuration)) {
            $json['configuration']                = $this->configuration;
        }
        if (isset($this->monthlyBillingAnchorDate)) {
            $json['monthly_billing_anchor_date']  = $this->monthlyBillingAnchorDate;
        }
        if (isset($this->canProrate)) {
            $json['can_prorate']                  = $this->canProrate;
        }
        if (isset($this->subscriptionPlanVariations)) {
            $json['subscription_plan_variations'] = $this->subscriptionPlanVariations;
        }
        if (isset($this->eligibleItemIds)) {
            $json['eligible_item_ids']            = $this->eligibleItemIds;
        }
        if (isset($this->eligibleCategoryIds)) {
            $json['eligible_category_ids']        = $this->eligibleCategoryIds;
        }
        if (isset($this->allItems)) {
            $json['all_items']                    = $this->allItems;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

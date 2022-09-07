<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Describes a subscription plan variation. All of the fields were copied from the original
 * Subscription Plan
 */
class CatalogSubscriptionPlanVariation implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var SubscriptionPhase[]
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
     * @var string|null
     */
    private $subscriptionPlanId;

    /**
     * @var int|null
     */
    private $monthlyBillingAnchorDate;

    /**
     * @var bool|null
     */
    private $canProrate;

    /**
     * @param string $name
     * @param SubscriptionPhase[] $phases
     */
    public function __construct(string $name, array $phases)
    {
        $this->name = $name;
        $this->phases = $phases;
    }

    /**
     * Returns Name.
     * The name of the plan variation.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the plan variation.
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
     *
     * @return SubscriptionPhase[]
     */
    public function getPhases(): array
    {
        return $this->phases;
    }

    /**
     * Sets Phases.
     * A list of SubscriptionPhase containing the [SubscriptionPhase]($m/SubscriptionPhase) for this plan.
     *
     * @required
     * @maps phases
     *
     * @param SubscriptionPhase[] $phases
     */
    public function setPhases(array $phases): void
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
     * Returns Subscription Plan Id.
     * The id of the subscription plan, if there is one.
     */
    public function getSubscriptionPlanId(): ?string
    {
        return $this->subscriptionPlanId;
    }

    /**
     * Sets Subscription Plan Id.
     * The id of the subscription plan, if there is one.
     *
     * @maps subscription_plan_id
     */
    public function setSubscriptionPlanId(?string $subscriptionPlanId): void
    {
        $this->subscriptionPlanId = $subscriptionPlanId;
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
        $json['name']                            = $this->name;
        $json['phases']                          = $this->phases;
        if (isset($this->taxInfo)) {
            $json['tax_info']                    = $this->taxInfo;
        }
        if (isset($this->configuration)) {
            $json['configuration']               = $this->configuration;
        }
        if (isset($this->subscriptionPlanId)) {
            $json['subscription_plan_id']        = $this->subscriptionPlanId;
        }
        if (isset($this->monthlyBillingAnchorDate)) {
            $json['monthly_billing_anchor_date'] = $this->monthlyBillingAnchorDate;
        }
        if (isset($this->canProrate)) {
            $json['can_prorate']                 = $this->canProrate;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

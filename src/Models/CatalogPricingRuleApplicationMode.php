<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Indicates if a PricingRule may be automatically applied, or if some other conditions must be met
 */
class CatalogPricingRuleApplicationMode
{
    /**
     * Pricing Rule is to be applied automatically
     */
    public const AUTOMATIC = 'AUTOMATIC';

    /**
     * Pricing Rule may only be applied given an associated Coupon or Loyalty Reward on the Order
     */
    public const ATTACHED = 'ATTACHED';
}

<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Determines the scope at which the service charges created by the pricing rule
 * should be applied (i.e.- whole purchase or line item).
 */
class ServiceChargeTargetScope
{
    /**
     * Service charges applied by this Pricing Rule should be applied to a cart's line items
     */
    public const SURCHARGE_TARGET_SCOPE_LINE_ITEM = 'SURCHARGE_TARGET_SCOPE_LINE_ITEM';

    /**
     * Service charges applied by this Pricing Rule should be applied at the cart level
     */
    public const SURCHARGE_TARGET_SCOPE_WHOLE_PURCHASE = 'SURCHARGE_TARGET_SCOPE_WHOLE_PURCHASE';
}

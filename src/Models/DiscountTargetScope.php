<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Determines the scope at which the discounts created by the pricing rule
 * should be applied (i.e.- whole purchase or line item)
 */
class DiscountTargetScope
{
    /**
     * Discounts applied by this Pricing Rule should be applied to a cart's line items
     */
    public const LINE_ITEM = 'LINE_ITEM';

    /**
     * Discounts applied by this Pricing Rule should be applied at the cart level
     */
    public const WHOLE_PURCHASE = 'WHOLE_PURCHASE';
}

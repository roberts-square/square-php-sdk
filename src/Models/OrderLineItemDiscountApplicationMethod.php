<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Categorizes why a discount was applied to an order or line item.
 */
class OrderLineItemDiscountApplicationMethod
{
    /**
     * Used for reporting only.
     */
    public const UNKNOWN_METHOD = 'UNKNOWN_METHOD';

    /**
     * A standard manually applied discount.
     */
    public const MANUALLY_APPLIED = 'MANUALLY_APPLIED';

    /**
     * A discount that was applied automatically through a pricing rule.
     */
    public const PRICING_RULE = 'PRICING_RULE';

    /**
     * A discount that represents a full comp for a line item or order.
     */
    public const COMP = 'COMP';
}

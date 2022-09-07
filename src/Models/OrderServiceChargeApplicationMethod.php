<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Categorizes why a service charge was applied to an order or line item.
 */
class OrderServiceChargeApplicationMethod
{
    /**
     * Used for reporting only.
     */
    public const UNKNOWN_METHOD = 'UNKNOWN_METHOD';

    /**
     * A manually applied service charge.
     */
    public const MANUALLY_APPLIED = 'MANUALLY_APPLIED';

    /**
     * A service charge that was applied automatically through a pricing rule.
     */
    public const PRICING_RULE = 'PRICING_RULE';
}

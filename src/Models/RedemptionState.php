<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * The status of the redemption.
 */
class RedemptionState
{
    /**
     * Indicates that the order, to which a `DiscountCode` is applied, is
     * currently open.
     */
    public const PENDING = 'PENDING';

    /**
     * Indicates that the order, to which a `DiscountCode` is applied, is
     * finalized.
     */
    public const COMPLETED = 'COMPLETED';

    /**
     * Indicates that the order to which the `DiscountCode` is applied is canceled
     * (by calling [UpdateOrder]($e/Orders/UpdateOrder))
     * or the `DiscountCode` is removed from the order
     * (by calling [UpdateRedemption]($e/DiscountCodes/UpdateRedemption)).
     */
    public const CANCELLED = 'CANCELLED';
}

<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Status of the assignment.
 */
class LoyaltyOrderAssignmentStatus
{
    /**
     * the assignment isn’t created but used as a data object to hold estimated points given an order.
     */
    public const PREVIEW = 'PREVIEW';

    /**
     * the assignment resource that was created and linked to an order.
     */
    public const ASSIGNED = 'ASSIGNED';
}

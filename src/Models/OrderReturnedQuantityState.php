<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * The current state of this returned quantity.
 */
class OrderReturnedQuantityState
{
    /**
     * Indicates that the return has been proposed.
     */
    public const PROPOSED = 'PROPOSED';

    /**
     * Indicates that the return has been completed.
     */
    public const COMPLETED = 'COMPLETED';
}

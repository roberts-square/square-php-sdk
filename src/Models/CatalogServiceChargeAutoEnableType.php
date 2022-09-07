<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Determines service charge type
 */
class CatalogServiceChargeAutoEnableType
{
    /**
     * Automatically applies gratuity when the minimum seat count threshold is met. `minimum_seat_count`
     * must be set when this value is used.
     */
    public const MINIMUM_SEAT_COUNT = 'MINIMUM_SEAT_COUNT';

    /**
     * Always automatically apply gratuity.
     */
    public const ALWAYS = 'ALWAYS';
}

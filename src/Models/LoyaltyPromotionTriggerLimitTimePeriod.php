<?php

declare(strict_types=1);

namespace Square\Models;

class LoyaltyPromotionTriggerLimitTimePeriod
{
    /**
     * The limit applies to the entire time when promotion is active.
     */
    public const ALL_TIME = 'ALL_TIME';

    /**
     * The limit applies to a single day. For example, if number_of_times
     * is configured to be one, a buyer could trigger the promotion at most one
     * time per day.
     */
    public const DAY = 'DAY';
}

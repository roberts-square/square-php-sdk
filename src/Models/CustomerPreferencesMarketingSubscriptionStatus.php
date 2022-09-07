<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Indicates the customer preferences for receiving marketing emails.
 */
class CustomerPreferencesMarketingSubscriptionStatus
{
    /**
     * No preference registered.
     */
    public const UNKNOWN = 'UNKNOWN';

    /**
     * The customer wants to receive marketing emails from a given seller.
     */
    public const OPT_IN = 'OPT_IN';

    /**
     * The customer does not want to receive marketing emails from a given seller.
     */
    public const OPT_OUT = 'OPT_OUT';

    /**
     * The customer does not want to receive marketing emails from any seller.
     */
    public const GLOBAL_OPT_OUT = 'GLOBAL_OPT_OUT';
}

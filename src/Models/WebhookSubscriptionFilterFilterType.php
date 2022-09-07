<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Indicates how a webhook subscription is filtered.
 */
class WebhookSubscriptionFilterFilterType
{
    public const MERCHANT_ID = 'MERCHANT_ID';

    public const CLIENT_ID = 'CLIENT_ID';
}

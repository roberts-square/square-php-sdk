<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Indicates whether the filter will use the joined values as an allow list or disallow list.
 */
class WebhookSubscriptionFilterFilterAction
{
    public const ALLOW = 'ALLOW';

    public const DISALLOW = 'DISALLOW';
}

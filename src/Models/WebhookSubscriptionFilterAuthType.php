<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Indicates how to verify the authorization of a filter.
 */
class WebhookSubscriptionFilterAuthType
{
    public const OAUTH = 'OAUTH';

    public const IMPLICIT = 'IMPLICIT';
}

<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Indicates how a CatalogPricingRule can be combined with other pricing rules.
 */
class AggregationStrategy
{
    /**
     * The pricing rule has an aggregation strategy that cannot be represented with the current
     * version of the API.
     */
    public const UNKNOWN = 'UNKNOWN';

    /**
     * The pricing rule can be combined with any other eligible pricing rules.
     */
    public const STACKABLE = 'STACKABLE';

    /**
     * The pricing rule cannot be combined with other EXCLUSIVE pricing rules.
     */
    public const EXCLUSIVE = 'EXCLUSIVE';
}

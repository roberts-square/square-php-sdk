<?php

declare(strict_types=1);

namespace Square\Models;

class OrderPricingOptionsAutomaticTaxSource
{
    /**
     * Automatically apply taxes from the catalog.
     */
    public const CATALOG = 'CATALOG';

    /**
     * Automatically determine appropriate taxes based on the properties of the Order.
     */
    public const AUTOMATIC_RATES = 'AUTOMATIC_RATES';
}

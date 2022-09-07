<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Determines service charge calculation phase
 */
class CatalogServiceChargeCalculationPhase
{
    /**
     * The service charge is calculated based on the subtotal before taxes.
     */
    public const SURCHARGE_PHASE = 'SURCHARGE_PHASE';

    /**
     * The service charge is calculated based on the total after taxes.
     */
    public const SURCHARGE_TOTAL_PHASE = 'SURCHARGE_TOTAL_PHASE';

    /**
     * The service charge is calculated as a compounding adjustment after any discounts and before any tax
     * considerations.
     */
    public const SURCHARGE_APPORTIONED_PHASE = 'SURCHARGE_APPORTIONED_PHASE';
}

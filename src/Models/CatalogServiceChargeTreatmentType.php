<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Determines service charge treatment type
 */
class CatalogServiceChargeTreatmentType
{
    /**
     * The service charge should be treated as a value-holding line item
     */
    public const SURCHARGE_TREATMENT_LINE_ITEM = 'SURCHARGE_TREATMENT_LINE_ITEM';

    /**
     * The service charge should be apportioned toward a line item
     */
    public const SURCHARGE_TREATMENT_APPORTIONED = 'SURCHARGE_TREATMENT_APPORTIONED';
}

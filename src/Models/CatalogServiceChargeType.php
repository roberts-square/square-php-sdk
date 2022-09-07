<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Determines service charge type
 */
class CatalogServiceChargeType
{
    /**
     * Auto gratuity service charge type
     */
    public const AUTO_GRATUITY = 'AUTO_GRATUITY';

    /**
     * Custom service charge type
     */
    public const CUSTOM = 'CUSTOM';
}

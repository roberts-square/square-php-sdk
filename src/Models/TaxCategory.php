<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Represents the line item tax category.
 */
class TaxCategory
{
    /**
     * Indicates that the line item belongs to general taxable tax category.
     */
    public const GENERAL_TANGIBLE_GOOD = 'GENERAL_TANGIBLE_GOOD';

    /**
     * Indicates that the line item is non-taxable
     */
    public const NON_TAXABLE = 'NON_TAXABLE';

    /**
     * Indicates that the line item belongs to shipping fee tax category.
     */
    public const SHIPPING_FEE = 'SHIPPING_FEE';
}

<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Indicates whether the discount should reduce the price used to calculate tax.
 */
class OrderLineItemDiscountModifyTaxBasis
{
    /**
     * The most common case.
     */
    public const MODIFY_TAX_BASIS = 'MODIFY_TAX_BASIS';

    /**
     * This discount is excluded when calculating the tax basis.
     */
    public const DO_NOT_MODIFY_TAX_BASIS = 'DO_NOT_MODIFY_TAX_BASIS';
}

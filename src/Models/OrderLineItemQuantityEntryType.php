<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * How the quantity was added to the line item.
 */
class OrderLineItemQuantityEntryType
{
    /**
     * Quantity was manually entered by the seller.
     */
    public const MANUALLY_ENTERED = 'MANUALLY_ENTERED';

    /**
     * Quantity was read from a scale connected to the POS.
     */
    public const READ_FROM_SCALE = 'READ_FROM_SCALE';

    /**
     * Quantity was manually entered while a scale connected to the POS.
     */
    public const MANUAL_WITH_CONNECTED_SCALE = 'MANUAL_WITH_CONNECTED_SCALE';

    /**
     * Quantity was read from a tared scale connected to the POS.
     */
    public const READ_FROM_SCALE_TARED = 'READ_FROM_SCALE_TARED';
}

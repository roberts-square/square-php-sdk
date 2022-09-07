<?php

declare(strict_types=1);

namespace Square\Models;

class OrderVoidScope
{
    /**
     * Indicates that this void is at the order level (the whole order is voided).
     */
    public const LINE_ITEM = 'LINE_ITEM';

    /**
     * Indicates that this void is at the line item level (some of the line items
     * in the order are voided).
     */
    public const ORDER = 'ORDER';
}

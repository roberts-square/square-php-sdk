<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Supported stock levels in the item inventory.
 */
class CatalogQueryFilteredItemsStockLevel
{
    /**
     * The item inventory is empty.
     */
    public const OUT = 'OUT';

    /**
     * The item inventory is low.
     */
    public const LOW = 'LOW';
}

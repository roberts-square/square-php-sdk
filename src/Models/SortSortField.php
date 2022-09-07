<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * The field by which to sort the returned results.
 */
class SortSortField
{
    /**
     * The results are primarily by item name and secondarily by ordinal.
     */
    public const ITEM_NAME = 'ITEM_NAME';

    /**
     * The results are sorted by inventory count. Must specify a location_id
     * for the location to sort counts at.
     */
    public const ITEM_VARIATION_INVENTORY_COUNT = 'ITEM_VARIATION_INVENTORY_COUNT';
}

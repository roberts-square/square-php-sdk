<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Defines searchable attributes supported by MultiFieldTextFilter.
 */
class MultiFieldTextFilterSearchField
{
    public const ITEM_NAME = 'ITEM_NAME';

    public const ITEM_DESCRIPTION = 'ITEM_DESCRIPTION';

    public const ITEM_ABBREVIATION = 'ITEM_ABBREVIATION';

    public const ITEM_VARIATION_NAME = 'ITEM_VARIATION_NAME';

    public const ITEM_VARIATION_SKU = 'ITEM_VARIATION_SKU';

    public const ITEM_VARIATION_UPC = 'ITEM_VARIATION_UPC';

    public const ITEM_VARIATION_VENDOR_CODE = 'ITEM_VARIATION_VENDOR_CODE';
}

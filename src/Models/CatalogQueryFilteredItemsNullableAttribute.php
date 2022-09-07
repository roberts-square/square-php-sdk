<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Supported nullable attributes that can be used in a query expression to return
 * items or item variations if values of the specified attribute on the items or item
 * variations match the associated query expression or the specified attribute do not exist
 * on the items or item variations.
 */
class CatalogQueryFilteredItemsNullableAttribute
{
    /**
     * `VENDOR_TOKEN` is the nullable search attribute.
     */
    public const VENDOR_TOKEN = 'VENDOR_TOKEN';
}

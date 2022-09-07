<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Supported types of a custom attribute query expression.
 */
class CatalogQueryFilteredItemsCustomAttributeFilterFilterType
{
    /**
     * Match exactly corresponding custom attribute values against a specified query expression.
     */
    public const EXACT = 'EXACT';

    /**
     * Match the start of corresponding custom attribute values against a specified query expression.
     */
    public const PREFIX = 'PREFIX';

    /**
     * Match the number values  of corresponding custom attribute values to fit into the specified range in
     * a query expression.
     */
    public const RANGE = 'RANGE';
}

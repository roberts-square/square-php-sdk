<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Indicates the type of a category
 */
class CatalogCategoryType
{
    /**
     * Item category
     */
    public const ITEM_CATEGORY = 'ITEM_CATEGORY';

    /**
     * Square Online category
     */
    public const SITE_CATEGORY = 'SITE_CATEGORY';
}

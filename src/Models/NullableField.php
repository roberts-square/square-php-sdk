<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Supported nullable attributes that can be used in a query expression to
 * return items or item variations when a nullable attribute value on the items
 * or item variations matches the associated query expression or when the nullable
 * attribute is not assigned to the items or item variations.
 */
class NullableField
{
    /**
     * `VENDOR_ID` can be null when used as a search attribute to return catalog objects with undefined
     * `VENDOR_ID`.
     */
    public const VENDOR_TOKEN = 'VENDOR_TOKEN';
}

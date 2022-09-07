<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Type of a changed CatalogAttribute.
 */
class CatalogAttributeType
{
    /**
     * Attribute has string value.
     */
    public const STRING = 'STRING';

    /**
     * Attribute has integer value.
     */
    public const INT = 'INT';

    /**
     * Attribute has boolean value.
     */
    public const BOOL = 'BOOL';

    /**
     * Attribute has money value.
     */
    public const MONEY = 'MONEY';

    /**
     * Attribute has nested values. It may be a list or an object.
     */
    public const NESTED = 'NESTED';
}

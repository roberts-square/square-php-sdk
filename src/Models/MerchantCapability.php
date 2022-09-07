<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Enum object containing all of the externally visible capabilities a merchant can be enabled for.
 */
class MerchantCapability
{
    public const UNKNOWN_CAPABILITY = 'UNKNOWN_CAPABILITY';

    public const SELL_CANNABIS = 'SELL_CANNABIS';

    public const POINT_OF_SALE = 'POINT_OF_SALE';

    public const IS_SANDBOX = 'IS_SANDBOX';
}

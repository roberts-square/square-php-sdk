<?php

declare(strict_types=1);

namespace Square\Models;

class OrderReturnLineItemRestockType
{
    public const RESTOCK = 'RESTOCK';

    public const NO_RESTOCK = 'NO_RESTOCK';

    public const CANCELLATION = 'CANCELLATION';
}

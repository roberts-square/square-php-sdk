<?php

declare(strict_types=1);

namespace Square\Models;

class TenderSquareAccountDetailsStatus
{
    /**
     * The square account payment has been authorized but not yet captured.
     */
    public const AUTHORIZED = 'AUTHORIZED';

    /**
     * The square account payment was authorized and subsequently captured (i.e., completed).
     */
    public const CAPTURED = 'CAPTURED';

    /**
     * The square account payment was authorized and subsequently voided (i.e., canceled).
     */
    public const VOIDED = 'VOIDED';

    /**
     * The square account payment failed.
     */
    public const FAILED = 'FAILED';
}

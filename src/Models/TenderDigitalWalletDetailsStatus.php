<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Indicates the digital wallet payment's current status.
 */
class TenderDigitalWalletDetailsStatus
{
    /**
     * The digital wallet payment has been authorized but not yet captured.
     */
    public const AUTHORIZED = 'AUTHORIZED';

    /**
     * The digital wallet payment was authorized and subsequently captured (i.e., completed).
     */
    public const CAPTURED = 'CAPTURED';

    /**
     * The digital wallet payment was authorized and subsequently voided (i.e., canceled).
     */
    public const VOIDED = 'VOIDED';

    /**
     * The digital wallet payment failed.
     */
    public const FAILED = 'FAILED';
}

<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * The reason for the ACK.
 */
class AckReasonsAckReason
{
    public const UNKNOWN = 'UNKNOWN';

    public const PUSH = 'PUSH';

    public const POLL = 'POLL';

    public const INITIAL_POLL = 'INITIAL_POLL';

    public const USER_INITIATED = 'USER_INITIATED';

    public const OTHER = 'OTHER';

    public const PREEMPTIVE = 'PREEMPTIVE';
}

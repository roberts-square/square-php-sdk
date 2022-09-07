<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * The reason the discount was created
 */
class DiscountCodeReason
{
    public const UNKNOWN = 'UNKNOWN';

    /**
     * DiscountCode created by Loyalty
     */
    public const PUNCH_CARD_REWARD = 'PUNCH_CARD_REWARD';

    /**
     * DiscountCode created via Marketing
     */
    public const MARKETING = 'MARKETING';

    /**
     * DiscountCode was created through Conversations/Messenger
     */
    public const FEEDBACK = 'FEEDBACK';

    /**
     * The default, as all calls will be coming through the connect v2 api
     */
    public const CONNECT_V2_API = 'CONNECT_V2_API';
}

<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Describes the type of this unit and indicates which field contains the unit information. This is an
 * ‘open’ enum.
 */
class TerminalActionActionType
{
    /**
     * The action represents an action with checkout options. Details are contained in the
     * checkout_options field.
     */
    public const CHECKOUT = 'CHECKOUT';

    /**
     * The action represents an action with refund options. Details are contained in the
     * refund_options field.
     */
    public const REFUND = 'REFUND';

    /**
     * The action represents a request to display a QR code. Details are contained in the
     * qr_code_options field.
     */
    public const QR_CODE = 'QR_CODE';

    /**
     * The action represents a request to check if the specific device is
     * online or currently active with the merchant in question. Does not require an action options value.
     */
    public const PING = 'PING';

    /**
     * Represents a request to save a card for future card-on-file use.
     */
    public const SAVE_CARD = 'SAVE_CARD';

    /**
     * The action represents a request to capture a buyer's signature. Details are contained
     * in the signature_options object.
     */
    public const SIGNATURE = 'SIGNATURE';

    /**
     * The action represents a request to collect a buyer's confirmation decision to the
     * displayed terms. Details are contained in the confirmation_options object.
     */
    public const CONFIRMATION = 'CONFIRMATION';
}

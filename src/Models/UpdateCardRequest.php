<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Updates attributes of the card, e.g. billing address. Accessible via
 * HTTP requests at PUT https://connect.squareup.com/v2/cards/{card_id}
 */
class UpdateCardRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $idempotencyKey;

    /**
     * @var string|null
     */
    private $verificationToken;

    /**
     * @var Card
     */
    private $card;

    /**
     * @param string $idempotencyKey
     * @param Card $card
     */
    public function __construct(string $idempotencyKey, Card $card)
    {
        $this->idempotencyKey = $idempotencyKey;
        $this->card = $card;
    }

    /**
     * Returns Idempotency Key.
     * A unique string that identifies this UpdateCard request. Keys can be
     * any valid string and must be unique for every request. If you're unsure
     * whether a particular card was updated successfully, you can reattempt it
     * with the same idempotency key without worrying about overwriting the
     * previous update. The latest version of the card will be returned.
     */
    public function getIdempotencyKey(): string
    {
        return $this->idempotencyKey;
    }

    /**
     * Sets Idempotency Key.
     * A unique string that identifies this UpdateCard request. Keys can be
     * any valid string and must be unique for every request. If you're unsure
     * whether a particular card was updated successfully, you can reattempt it
     * with the same idempotency key without worrying about overwriting the
     * previous update. The latest version of the card will be returned.
     *
     * @required
     * @maps idempotency_key
     */
    public function setIdempotencyKey(string $idempotencyKey): void
    {
        $this->idempotencyKey = $idempotencyKey;
    }

    /**
     * Returns Verification Token.
     * An identifying token generated by [Payments.verifyBuyer()](https://developer.squareup.
     * com/reference/sdks/web/payments/objects/Payments#Payments.verifyBuyer).
     * Verification tokens encapsulate customer device information and 3-D Secure
     * challenge results to indicate that Square has verified the buyer identity.
     *
     * See the [SCA Overview](https://developer.squareup.com/docs/sca-overview).
     */
    public function getVerificationToken(): ?string
    {
        return $this->verificationToken;
    }

    /**
     * Sets Verification Token.
     * An identifying token generated by [Payments.verifyBuyer()](https://developer.squareup.
     * com/reference/sdks/web/payments/objects/Payments#Payments.verifyBuyer).
     * Verification tokens encapsulate customer device information and 3-D Secure
     * challenge results to indicate that Square has verified the buyer identity.
     *
     * See the [SCA Overview](https://developer.squareup.com/docs/sca-overview).
     *
     * @maps verification_token
     */
    public function setVerificationToken(?string $verificationToken): void
    {
        $this->verificationToken = $verificationToken;
    }

    /**
     * Returns Card.
     * Represents the payment details of a card to be used for payments. These
     * details are determined by the payment token generated by Web Payments SDK.
     */
    public function getCard(): Card
    {
        return $this->card;
    }

    /**
     * Sets Card.
     * Represents the payment details of a card to be used for payments. These
     * details are determined by the payment token generated by Web Payments SDK.
     *
     * @required
     * @maps card
     */
    public function setCard(Card $card): void
    {
        $this->card = $card;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['idempotency_key']        = $this->idempotencyKey;
        if (isset($this->verificationToken)) {
            $json['verification_token'] = $this->verificationToken;
        }
        $json['card']                   = $this->card;
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

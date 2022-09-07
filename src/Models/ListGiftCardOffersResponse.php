<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * A response containing digital gift card offerings in a given ZIP code.
 */
class ListGiftCardOffersResponse implements \JsonSerializable
{
    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * @var GiftCardOffer[]|null
     */
    private $giftCardOffers;

    /**
     * Returns Errors.
     * Any errors that occurred during the request.
     *
     * @return Error[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     * Any errors that occurred during the request.
     *
     * @maps errors
     *
     * @param Error[]|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * Returns Gift Card Offers.
     * The digital gift card offerings that are present in the ZIP code provided in the request. The
     * maximum number of results is 10. If no sellers with digital gift card offerings are present in the
     * ZIP code provided, this returns an empty list.
     *
     * @return GiftCardOffer[]|null
     */
    public function getGiftCardOffers(): ?array
    {
        return $this->giftCardOffers;
    }

    /**
     * Sets Gift Card Offers.
     * The digital gift card offerings that are present in the ZIP code provided in the request. The
     * maximum number of results is 10. If no sellers with digital gift card offerings are present in the
     * ZIP code provided, this returns an empty list.
     *
     * @maps gift_card_offers
     *
     * @param GiftCardOffer[]|null $giftCardOffers
     */
    public function setGiftCardOffers(?array $giftCardOffers): void
    {
        $this->giftCardOffers = $giftCardOffers;
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
        if (isset($this->errors)) {
            $json['errors']           = $this->errors;
        }
        if (isset($this->giftCardOffers)) {
            $json['gift_card_offers'] = $this->giftCardOffers;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

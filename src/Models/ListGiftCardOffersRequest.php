<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * A request to retrieve digital gift card offers. By ZIP codes for now.
 */
class ListGiftCardOffersRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $zipcode;

    /**
     * @param string $zipcode
     */
    public function __construct(string $zipcode)
    {
        $this->zipcode = $zipcode;
    }

    /**
     * Returns Zipcode.
     * The ZIP code in which to look for sellers offering digital gift cards.
     */
    public function getZipcode(): string
    {
        return $this->zipcode;
    }

    /**
     * Sets Zipcode.
     * The ZIP code in which to look for sellers offering digital gift cards.
     *
     * @required
     * @maps zipcode
     */
    public function setZipcode(string $zipcode): void
    {
        $this->zipcode = $zipcode;
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
        $json['zipcode'] = $this->zipcode;
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

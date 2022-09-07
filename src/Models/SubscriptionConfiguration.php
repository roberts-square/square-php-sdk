<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Describes the configuration for the subscription.
 */
class SubscriptionConfiguration implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $buyerAllowIndefinitePausing;

    /**
     * @var int|null
     */
    private $buyerMaxCyclesToSkip;

    /**
     * Returns Buyer Allow Indefinite Pausing.
     * Configuration for whether or not the buyer is allowed to pause the subscription indefinitely.
     */
    public function getBuyerAllowIndefinitePausing(): ?bool
    {
        return $this->buyerAllowIndefinitePausing;
    }

    /**
     * Sets Buyer Allow Indefinite Pausing.
     * Configuration for whether or not the buyer is allowed to pause the subscription indefinitely.
     *
     * @maps buyer_allow_indefinite_pausing
     */
    public function setBuyerAllowIndefinitePausing(?bool $buyerAllowIndefinitePausing): void
    {
        $this->buyerAllowIndefinitePausing = $buyerAllowIndefinitePausing;
    }

    /**
     * Returns Buyer Max Cycles to Skip.
     * The number of cycles the buyer is allowed to skip.
     */
    public function getBuyerMaxCyclesToSkip(): ?int
    {
        return $this->buyerMaxCyclesToSkip;
    }

    /**
     * Sets Buyer Max Cycles to Skip.
     * The number of cycles the buyer is allowed to skip.
     *
     * @maps buyer_max_cycles_to_skip
     */
    public function setBuyerMaxCyclesToSkip(?int $buyerMaxCyclesToSkip): void
    {
        $this->buyerMaxCyclesToSkip = $buyerMaxCyclesToSkip;
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
        if (isset($this->buyerAllowIndefinitePausing)) {
            $json['buyer_allow_indefinite_pausing'] = $this->buyerAllowIndefinitePausing;
        }
        if (isset($this->buyerMaxCyclesToSkip)) {
            $json['buyer_max_cycles_to_skip']       = $this->buyerMaxCyclesToSkip;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

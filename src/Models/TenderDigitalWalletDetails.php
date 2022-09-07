<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents the details of a tender with `type` `WALLET`.
 */
class TenderDigitalWalletDetails implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $digitalWalletBrand;

    /**
     * @var string|null
     */
    private $buyerFullName;

    /**
     * Returns Status.
     * Indicates the digital wallet payment's current status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Indicates the digital wallet payment's current status.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Digital Wallet Brand.
     */
    public function getDigitalWalletBrand(): ?string
    {
        return $this->digitalWalletBrand;
    }

    /**
     * Sets Digital Wallet Brand.
     *
     * @maps digital_wallet_brand
     */
    public function setDigitalWalletBrand(?string $digitalWalletBrand): void
    {
        $this->digitalWalletBrand = $digitalWalletBrand;
    }

    /**
     * Returns Buyer Full Name.
     * The name of the digital wallet user.
     */
    public function getBuyerFullName(): ?string
    {
        return $this->buyerFullName;
    }

    /**
     * Sets Buyer Full Name.
     * The name of the digital wallet user.
     *
     * @maps buyer_full_name
     */
    public function setBuyerFullName(?string $buyerFullName): void
    {
        $this->buyerFullName = $buyerFullName;
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
        if (isset($this->status)) {
            $json['status']               = $this->status;
        }
        if (isset($this->digitalWalletBrand)) {
            $json['digital_wallet_brand'] = $this->digitalWalletBrand;
        }
        if (isset($this->buyerFullName)) {
            $json['buyer_full_name']      = $this->buyerFullName;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

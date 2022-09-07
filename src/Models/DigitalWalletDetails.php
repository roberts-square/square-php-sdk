<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Additional details about `WALLET` type payments. Contains only non-confidential information.
 */
class DigitalWalletDetails implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $brand;

    /**
     * @var string|null
     */
    private $statementDescription;

    /**
     * @var DeviceDetails|null
     */
    private $deviceDetails;

    /**
     * @var CashAppDetails|null
     */
    private $cashAppDetails;

    /**
     * Returns Status.
     * The status of the `WALLET` payment. The status can be `AUTHORIZED`, `CAPTURED`, `VOIDED`, or
     * `FAILED`.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * The status of the `WALLET` payment. The status can be `AUTHORIZED`, `CAPTURED`, `VOIDED`, or
     * `FAILED`.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Brand.
     * The brand used for the `WALLET` payment. The brand can be `CASH_APP`, `PAYPAY` or `UNKNOWN`.
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * Sets Brand.
     * The brand used for the `WALLET` payment. The brand can be `CASH_APP`, `PAYPAY` or `UNKNOWN`.
     *
     * @maps brand
     */
    public function setBrand(?string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * Returns Statement Description.
     * The statement description sent to the payment networks.
     */
    public function getStatementDescription(): ?string
    {
        return $this->statementDescription;
    }

    /**
     * Sets Statement Description.
     * The statement description sent to the payment networks.
     *
     * @maps statement_description
     */
    public function setStatementDescription(?string $statementDescription): void
    {
        $this->statementDescription = $statementDescription;
    }

    /**
     * Returns Device Details.
     * Details about the device that took the payment.
     */
    public function getDeviceDetails(): ?DeviceDetails
    {
        return $this->deviceDetails;
    }

    /**
     * Sets Device Details.
     * Details about the device that took the payment.
     *
     * @maps device_details
     */
    public function setDeviceDetails(?DeviceDetails $deviceDetails): void
    {
        $this->deviceDetails = $deviceDetails;
    }

    /**
     * Returns Cash App Details.
     * Additional details about `WALLET` type payments with the `brand` of `CASH_APP`.
     */
    public function getCashAppDetails(): ?CashAppDetails
    {
        return $this->cashAppDetails;
    }

    /**
     * Sets Cash App Details.
     * Additional details about `WALLET` type payments with the `brand` of `CASH_APP`.
     *
     * @maps cash_app_details
     */
    public function setCashAppDetails(?CashAppDetails $cashAppDetails): void
    {
        $this->cashAppDetails = $cashAppDetails;
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
            $json['status']                = $this->status;
        }
        if (isset($this->brand)) {
            $json['brand']                 = $this->brand;
        }
        if (isset($this->statementDescription)) {
            $json['statement_description'] = $this->statementDescription;
        }
        if (isset($this->deviceDetails)) {
            $json['device_details']        = $this->deviceDetails;
        }
        if (isset($this->cashAppDetails)) {
            $json['cash_app_details']      = $this->cashAppDetails;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

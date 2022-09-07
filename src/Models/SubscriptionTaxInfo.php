<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Describes the information to be used when calculating taxes for subscriptions.
 */
class SubscriptionTaxInfo implements \JsonSerializable
{
    /**
     * @var string
     */
    private $sellerCode;

    /**
     * @var string
     */
    private $productCode;

    /**
     * @var string
     */
    private $productClass;

    /**
     * @param string $sellerCode
     * @param string $productCode
     * @param string $productClass
     */
    public function __construct(string $sellerCode, string $productCode, string $productClass)
    {
        $this->sellerCode = $sellerCode;
        $this->productCode = $productCode;
        $this->productClass = $productClass;
    }

    /**
     * Returns Seller Code.
     */
    public function getSellerCode(): string
    {
        return $this->sellerCode;
    }

    /**
     * Sets Seller Code.
     *
     * @required
     * @maps seller_code
     */
    public function setSellerCode(string $sellerCode): void
    {
        $this->sellerCode = $sellerCode;
    }

    /**
     * Returns Product Code.
     */
    public function getProductCode(): string
    {
        return $this->productCode;
    }

    /**
     * Sets Product Code.
     *
     * @required
     * @maps product_code
     */
    public function setProductCode(string $productCode): void
    {
        $this->productCode = $productCode;
    }

    /**
     * Returns Product Class.
     */
    public function getProductClass(): string
    {
        return $this->productClass;
    }

    /**
     * Sets Product Class.
     *
     * @required
     * @maps product_class
     */
    public function setProductClass(string $productClass): void
    {
        $this->productClass = $productClass;
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
        $json['seller_code']   = $this->sellerCode;
        $json['product_code']  = $this->productCode;
        $json['product_class'] = $this->productClass;
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

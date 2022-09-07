<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Pricing options for an order. The options affect how the order's price is calculated.
 * They can be used, for example, to apply automatic price adjustments that are based on preconfigured
 * [pricing rules]($m/CatalogPricingRule).
 */
class OrderPricingOptions implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $autoApplyDiscounts;

    /**
     * @var bool|null
     */
    private $autoApplyTaxes;

    /**
     * @var string|null
     */
    private $automaticTaxSource;

    /**
     * @var bool|null
     */
    private $autoApplyServiceCharges;

    /**
     * Returns Auto Apply Discounts.
     * The option to determine whether pricing rule-based
     * discounts are automatically applied to an order.
     */
    public function getAutoApplyDiscounts(): ?bool
    {
        return $this->autoApplyDiscounts;
    }

    /**
     * Sets Auto Apply Discounts.
     * The option to determine whether pricing rule-based
     * discounts are automatically applied to an order.
     *
     * @maps auto_apply_discounts
     */
    public function setAutoApplyDiscounts(?bool $autoApplyDiscounts): void
    {
        $this->autoApplyDiscounts = $autoApplyDiscounts;
    }

    /**
     * Returns Auto Apply Taxes.
     * The option to determine whether rule-based taxes are automatically
     * applied to an order when the criteria of the corresponding rules are met.
     */
    public function getAutoApplyTaxes(): ?bool
    {
        return $this->autoApplyTaxes;
    }

    /**
     * Sets Auto Apply Taxes.
     * The option to determine whether rule-based taxes are automatically
     * applied to an order when the criteria of the corresponding rules are met.
     *
     * @maps auto_apply_taxes
     */
    public function setAutoApplyTaxes(?bool $autoApplyTaxes): void
    {
        $this->autoApplyTaxes = $autoApplyTaxes;
    }

    /**
     * Returns Automatic Tax Source.
     */
    public function getAutomaticTaxSource(): ?string
    {
        return $this->automaticTaxSource;
    }

    /**
     * Sets Automatic Tax Source.
     *
     * @maps automatic_tax_source
     */
    public function setAutomaticTaxSource(?string $automaticTaxSource): void
    {
        $this->automaticTaxSource = $automaticTaxSource;
    }

    /**
     * Returns Auto Apply Service Charges.
     * The option to determine whether pricing rule-based
     * service charges are automatically applied to an order.
     */
    public function getAutoApplyServiceCharges(): ?bool
    {
        return $this->autoApplyServiceCharges;
    }

    /**
     * Sets Auto Apply Service Charges.
     * The option to determine whether pricing rule-based
     * service charges are automatically applied to an order.
     *
     * @maps auto_apply_service_charges
     */
    public function setAutoApplyServiceCharges(?bool $autoApplyServiceCharges): void
    {
        $this->autoApplyServiceCharges = $autoApplyServiceCharges;
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
        if (isset($this->autoApplyDiscounts)) {
            $json['auto_apply_discounts']       = $this->autoApplyDiscounts;
        }
        if (isset($this->autoApplyTaxes)) {
            $json['auto_apply_taxes']           = $this->autoApplyTaxes;
        }
        if (isset($this->automaticTaxSource)) {
            $json['automatic_tax_source']       = $this->automaticTaxSource;
        }
        if (isset($this->autoApplyServiceCharges)) {
            $json['auto_apply_service_charges'] = $this->autoApplyServiceCharges;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

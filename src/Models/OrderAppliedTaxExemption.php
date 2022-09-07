<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a tax exemption that applies to one or more line item in the order.
 */
class OrderAppliedTaxExemption implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $uid;

    /**
     * @var string
     */
    private $taxExemptionUid;

    /**
     * @param string $taxExemptionUid
     */
    public function __construct(string $taxExemptionUid)
    {
        $this->taxExemptionUid = $taxExemptionUid;
    }

    /**
     * Returns Uid.
     * A unique ID that identifies the applied tax exemption only
     * within this order.
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     * A unique ID that identifies the applied tax exemption only
     * within this order.
     *
     * @maps uid
     */
    public function setUid(?string $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * Returns Tax Exemption Uid.
     * The `uid` of the tax exemption for which this applied tax
     * exemption represents.
     * It must reference a tax exemption present in the
     * `order.tax_exemptions` field.
     * This field is immutable. To change which tax exemption apply to a
     * line item, delete and add a new `OrderLineItemAppliedTaxExemption`.
     */
    public function getTaxExemptionUid(): string
    {
        return $this->taxExemptionUid;
    }

    /**
     * Sets Tax Exemption Uid.
     * The `uid` of the tax exemption for which this applied tax
     * exemption represents.
     * It must reference a tax exemption present in the
     * `order.tax_exemptions` field.
     * This field is immutable. To change which tax exemption apply to a
     * line item, delete and add a new `OrderLineItemAppliedTaxExemption`.
     *
     * @required
     * @maps tax_exemption_uid
     */
    public function setTaxExemptionUid(string $taxExemptionUid): void
    {
        $this->taxExemptionUid = $taxExemptionUid;
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
        if (isset($this->uid)) {
            $json['uid']           = $this->uid;
        }
        $json['tax_exemption_uid'] = $this->taxExemptionUid;
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

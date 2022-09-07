<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents an application processing fee.
 */
class AppProcessingFee implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $priceSelector;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var Money|null
     */
    private $amountMoney;

    /**
     * @var string|null
     */
    private $partyAccountId;

    /**
     * @var string|null
     */
    private $effectiveAt;

    /**
     * Returns Price Selector.
     * The price selector ID of the payment fee being applied.
     *
     * @return string[]|null
     */
    public function getPriceSelector(): ?array
    {
        return $this->priceSelector;
    }

    /**
     * Sets Price Selector.
     * The price selector ID of the payment fee being applied.
     *
     * @maps price_selector
     *
     * @param string[]|null $priceSelector
     */
    public function setPriceSelector(?array $priceSelector): void
    {
        $this->priceSelector = $priceSelector;
    }

    /**
     * Returns Type.
     * The type of payment fee being applied (for example, `THIRD_PARTY_PAYMENT_FEE`
     * or `THIRD_PARTY_REFUND_FEE`).
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * The type of payment fee being applied (for example, `THIRD_PARTY_PAYMENT_FEE`
     * or `THIRD_PARTY_REFUND_FEE`).
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Amount Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     */
    public function getAmountMoney(): ?Money
    {
        return $this->amountMoney;
    }

    /**
     * Sets Amount Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     *
     * @maps amount_money
     */
    public function setAmountMoney(?Money $amountMoney): void
    {
        $this->amountMoney = $amountMoney;
    }

    /**
     * Returns Party Account Id.
     * The platform account token for this payment fee.
     * For a capture, this is the recipient of funds. For a refund, this is the source of funds.
     */
    public function getPartyAccountId(): ?string
    {
        return $this->partyAccountId;
    }

    /**
     * Sets Party Account Id.
     * The platform account token for this payment fee.
     * For a capture, this is the recipient of funds. For a refund, this is the source of funds.
     *
     * @maps party_account_id
     */
    public function setPartyAccountId(?string $partyAccountId): void
    {
        $this->partyAccountId = $partyAccountId;
    }

    /**
     * Returns Effective At.
     * The timestamp of when the fee takes effect, in RFC 3339 format.
     */
    public function getEffectiveAt(): ?string
    {
        return $this->effectiveAt;
    }

    /**
     * Sets Effective At.
     * The timestamp of when the fee takes effect, in RFC 3339 format.
     *
     * @maps effective_at
     */
    public function setEffectiveAt(?string $effectiveAt): void
    {
        $this->effectiveAt = $effectiveAt;
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
        if (isset($this->priceSelector)) {
            $json['price_selector']   = $this->priceSelector;
        }
        if (isset($this->type)) {
            $json['type']             = $this->type;
        }
        if (isset($this->amountMoney)) {
            $json['amount_money']     = $this->amountMoney;
        }
        if (isset($this->partyAccountId)) {
            $json['party_account_id'] = $this->partyAccountId;
        }
        if (isset($this->effectiveAt)) {
            $json['effective_at']     = $this->effectiveAt;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

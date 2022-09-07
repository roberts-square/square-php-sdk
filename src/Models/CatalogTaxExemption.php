<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * A conditional tax exemption for non-taxable goods and services. Supported conditions include
 * `dining_option`, `max_total_amount`, `min_item_price` and `max_item_price`.
 * Exactly one condition is allowed for a tax exemption.
 */
class CatalogTaxExemption implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string[]|null
     */
    private $diningOptionIds;

    /**
     * @var Money|null
     */
    private $maxTotalAmountMoney;

    /**
     * @var Money|null
     */
    private $minItemPriceMoney;

    /**
     * @var Money|null
     */
    private $maxItemPriceMoney;

    /**
     * @var string
     */
    private $taxId;

    /**
     * @var string|null
     */
    private $exemptProductSetId;

    /**
     * @var bool|null
     */
    private $appliesToCustomAmounts;

    /**
     * @var bool|null
     */
    private $hasDiningOptionPredicate;

    /**
     * @param string $taxId
     */
    public function __construct(string $taxId)
    {
        $this->taxId = $taxId;
    }

    /**
     * Returns Name.
     * The name of the tax exemption.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the tax exemption.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Dining Option Ids.
     * The ID of a dining option to which the tax exemption is applicable.
     * For example, if the dining option ID is `ToGo`, the tax will not be applied on dining orders of the
     * `ToGo` option.
     *
     * @return string[]|null
     */
    public function getDiningOptionIds(): ?array
    {
        return $this->diningOptionIds;
    }

    /**
     * Sets Dining Option Ids.
     * The ID of a dining option to which the tax exemption is applicable.
     * For example, if the dining option ID is `ToGo`, the tax will not be applied on dining orders of the
     * `ToGo` option.
     *
     * @maps dining_option_ids
     *
     * @param string[]|null $diningOptionIds
     */
    public function setDiningOptionIds(?array $diningOptionIds): void
    {
        $this->diningOptionIds = $diningOptionIds;
    }

    /**
     * Returns Max Total Amount Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     */
    public function getMaxTotalAmountMoney(): ?Money
    {
        return $this->maxTotalAmountMoney;
    }

    /**
     * Sets Max Total Amount Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     *
     * @maps max_total_amount_money
     */
    public function setMaxTotalAmountMoney(?Money $maxTotalAmountMoney): void
    {
        $this->maxTotalAmountMoney = $maxTotalAmountMoney;
    }

    /**
     * Returns Min Item Price Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     */
    public function getMinItemPriceMoney(): ?Money
    {
        return $this->minItemPriceMoney;
    }

    /**
     * Sets Min Item Price Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     *
     * @maps min_item_price_money
     */
    public function setMinItemPriceMoney(?Money $minItemPriceMoney): void
    {
        $this->minItemPriceMoney = $minItemPriceMoney;
    }

    /**
     * Returns Max Item Price Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     */
    public function getMaxItemPriceMoney(): ?Money
    {
        return $this->maxItemPriceMoney;
    }

    /**
     * Sets Max Item Price Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     *
     * @maps max_item_price_money
     */
    public function setMaxItemPriceMoney(?Money $maxItemPriceMoney): void
    {
        $this->maxItemPriceMoney = $maxItemPriceMoney;
    }

    /**
     * Returns Tax Id.
     * The unique ID of the `CatalogTax` to which this tax exemption applies.
     */
    public function getTaxId(): string
    {
        return $this->taxId;
    }

    /**
     * Sets Tax Id.
     * The unique ID of the `CatalogTax` to which this tax exemption applies.
     *
     * @required
     * @maps tax_id
     */
    public function setTaxId(string $taxId): void
    {
        $this->taxId = $taxId;
    }

    /**
     * Returns Exempt Product Set Id.
     * The ID of the product set whose member products are qualified for this tax exemption.
     * When you apply the `max_total_amount` filter, the amount is the total price of only
     * the items qualifying for the exemption.
     *
     * For example, suppose that `exempt_product_set_id` refers to a product set containing a category
     * of "coffee" and an item of "bagel" with a `max_total_amount` of $4.00. If a shopping cart has a $1.
     * 50
     * coffee, a $2.00 bagel, and a $10.00 t-shirt, the coffee and bagel are tax free, because they are
     * qualified
     * items and the total price of the coffee and bagel is $3.50, below the maximum total amount.
     */
    public function getExemptProductSetId(): ?string
    {
        return $this->exemptProductSetId;
    }

    /**
     * Sets Exempt Product Set Id.
     * The ID of the product set whose member products are qualified for this tax exemption.
     * When you apply the `max_total_amount` filter, the amount is the total price of only
     * the items qualifying for the exemption.
     *
     * For example, suppose that `exempt_product_set_id` refers to a product set containing a category
     * of "coffee" and an item of "bagel" with a `max_total_amount` of $4.00. If a shopping cart has a $1.
     * 50
     * coffee, a $2.00 bagel, and a $10.00 t-shirt, the coffee and bagel are tax free, because they are
     * qualified
     * items and the total price of the coffee and bagel is $3.50, below the maximum total amount.
     *
     * @maps exempt_product_set_id
     */
    public function setExemptProductSetId(?string $exemptProductSetId): void
    {
        $this->exemptProductSetId = $exemptProductSetId;
    }

    /**
     * Returns Applies to Custom Amounts.
     * Whether tax exemption applies to custom amount line items
     */
    public function getAppliesToCustomAmounts(): ?bool
    {
        return $this->appliesToCustomAmounts;
    }

    /**
     * Sets Applies to Custom Amounts.
     * Whether tax exemption applies to custom amount line items
     *
     * @maps applies_to_custom_amounts
     */
    public function setAppliesToCustomAmounts(?bool $appliesToCustomAmounts): void
    {
        $this->appliesToCustomAmounts = $appliesToCustomAmounts;
    }

    /**
     * Returns Has Dining Option Predicate.
     * Whether tax exemption has dining option predicate. This field should always be internal only
     */
    public function getHasDiningOptionPredicate(): ?bool
    {
        return $this->hasDiningOptionPredicate;
    }

    /**
     * Sets Has Dining Option Predicate.
     * Whether tax exemption has dining option predicate. This field should always be internal only
     *
     * @maps has_dining_option_predicate
     */
    public function setHasDiningOptionPredicate(?bool $hasDiningOptionPredicate): void
    {
        $this->hasDiningOptionPredicate = $hasDiningOptionPredicate;
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
        if (isset($this->name)) {
            $json['name']                        = $this->name;
        }
        if (isset($this->diningOptionIds)) {
            $json['dining_option_ids']           = $this->diningOptionIds;
        }
        if (isset($this->maxTotalAmountMoney)) {
            $json['max_total_amount_money']      = $this->maxTotalAmountMoney;
        }
        if (isset($this->minItemPriceMoney)) {
            $json['min_item_price_money']        = $this->minItemPriceMoney;
        }
        if (isset($this->maxItemPriceMoney)) {
            $json['max_item_price_money']        = $this->maxItemPriceMoney;
        }
        $json['tax_id']                          = $this->taxId;
        if (isset($this->exemptProductSetId)) {
            $json['exempt_product_set_id']       = $this->exemptProductSetId;
        }
        if (isset($this->appliesToCustomAmounts)) {
            $json['applies_to_custom_amounts']   = $this->appliesToCustomAmounts;
        }
        if (isset($this->hasDiningOptionPredicate)) {
            $json['has_dining_option_predicate'] = $this->hasDiningOptionPredicate;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

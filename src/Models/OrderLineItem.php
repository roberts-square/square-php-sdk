<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a line item in an order. Each line item describes a different
 * product to purchase, with its own quantity and price details.
 */
class OrderLineItem implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $uid;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string
     */
    private $quantity;

    /**
     * @var OrderQuantityUnit|null
     */
    private $quantityUnit;

    /**
     * @var string|null
     */
    private $note;

    /**
     * @var string|null
     */
    private $catalogObjectId;

    /**
     * @var int|null
     */
    private $catalogVersion;

    /**
     * @var string|null
     */
    private $variationName;

    /**
     * @var string|null
     */
    private $itemType;

    /**
     * @var string|null
     */
    private $sku;

    /**
     * @var array<string,string>|null
     */
    private $metadata;

    /**
     * @var OrderLineItemModifier[]|null
     */
    private $modifiers;

    /**
     * @var OrderLineItemAppliedTax[]|null
     */
    private $appliedTaxes;

    /**
     * @var OrderLineItemAppliedDiscount[]|null
     */
    private $appliedDiscounts;

    /**
     * @var OrderLineItemAppliedServiceCharge[]|null
     */
    private $appliedServiceCharges;

    /**
     * @var Money|null
     */
    private $basePriceMoney;

    /**
     * @var Money|null
     */
    private $variationTotalPriceMoney;

    /**
     * @var Money|null
     */
    private $grossSalesMoney;

    /**
     * @var Money|null
     */
    private $totalTaxMoney;

    /**
     * @var Money|null
     */
    private $totalDiscountMoney;

    /**
     * @var Money|null
     */
    private $totalMoney;

    /**
     * @var OrderLineItemPricingBlocklists|null
     */
    private $pricingBlocklists;

    /**
     * @var string|null
     */
    private $quantityEntryType;

    /**
     * @var string|null
     */
    private $taxCategory;

    /**
     * @var OrderReturnedQuantity[]|null
     */
    private $returnedQuantities;

    /**
     * @var OrderDiningOption|null
     */
    private $diningOption;

    /**
     * @var Money|null
     */
    private $totalServiceChargeMoney;

    /**
     * @var OrderAppliedTaxExemption[]|null
     */
    private $appliedTaxExemptions;

    /**
     * @param string $quantity
     */
    public function __construct(string $quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Uid.
     * A unique ID that identifies the line item only within this order.
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     * A unique ID that identifies the line item only within this order.
     *
     * @maps uid
     */
    public function setUid(?string $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * Returns Name.
     * The name of the line item.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the line item.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Quantity.
     * The quantity purchased, formatted as a decimal number.
     * For example, `"3"`.
     *
     * Line items with a quantity of `"0"` are automatically removed
     * when paying for or otherwise completing the order.
     *
     * Line items with a `quantity_unit` can have non-integer quantities.
     * For example, `"1.70000"`.
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     * The quantity purchased, formatted as a decimal number.
     * For example, `"3"`.
     *
     * Line items with a quantity of `"0"` are automatically removed
     * when paying for or otherwise completing the order.
     *
     * Line items with a `quantity_unit` can have non-integer quantities.
     * For example, `"1.70000"`.
     *
     * @required
     * @maps quantity
     */
    public function setQuantity(string $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Quantity Unit.
     * Contains the measurement unit for a quantity and a precision that
     * specifies the number of digits after the decimal point for decimal quantities.
     */
    public function getQuantityUnit(): ?OrderQuantityUnit
    {
        return $this->quantityUnit;
    }

    /**
     * Sets Quantity Unit.
     * Contains the measurement unit for a quantity and a precision that
     * specifies the number of digits after the decimal point for decimal quantities.
     *
     * @maps quantity_unit
     */
    public function setQuantityUnit(?OrderQuantityUnit $quantityUnit): void
    {
        $this->quantityUnit = $quantityUnit;
    }

    /**
     * Returns Note.
     * The note of the line item.
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * Sets Note.
     * The note of the line item.
     *
     * @maps note
     */
    public function setNote(?string $note): void
    {
        $this->note = $note;
    }

    /**
     * Returns Catalog Object Id.
     * The [CatalogItemVariation]($m/CatalogItemVariation) ID applied to this line item.
     */
    public function getCatalogObjectId(): ?string
    {
        return $this->catalogObjectId;
    }

    /**
     * Sets Catalog Object Id.
     * The [CatalogItemVariation]($m/CatalogItemVariation) ID applied to this line item.
     *
     * @maps catalog_object_id
     */
    public function setCatalogObjectId(?string $catalogObjectId): void
    {
        $this->catalogObjectId = $catalogObjectId;
    }

    /**
     * Returns Catalog Version.
     * The version of the catalog object that this line item references.
     */
    public function getCatalogVersion(): ?int
    {
        return $this->catalogVersion;
    }

    /**
     * Sets Catalog Version.
     * The version of the catalog object that this line item references.
     *
     * @maps catalog_version
     */
    public function setCatalogVersion(?int $catalogVersion): void
    {
        $this->catalogVersion = $catalogVersion;
    }

    /**
     * Returns Variation Name.
     * The name of the variation applied to this line item.
     */
    public function getVariationName(): ?string
    {
        return $this->variationName;
    }

    /**
     * Sets Variation Name.
     * The name of the variation applied to this line item.
     *
     * @maps variation_name
     */
    public function setVariationName(?string $variationName): void
    {
        $this->variationName = $variationName;
    }

    /**
     * Returns Item Type.
     * Represents the line item type.
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }

    /**
     * Sets Item Type.
     * Represents the line item type.
     *
     * @maps item_type
     */
    public function setItemType(?string $itemType): void
    {
        $this->itemType = $itemType;
    }

    /**
     * Returns Sku.
     * The SKU of the item variation.
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }

    /**
     * Sets Sku.
     * The SKU of the item variation.
     *
     * @maps sku
     */
    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * Returns Metadata.
     * Application-defined data attached to this line item. Metadata fields are intended
     * to store descriptive references or associations with an entity in another system or store brief
     * information about the object. Square does not process this field; it only stores and returns it
     * in relevant API calls. Do not use metadata to store any sensitive information (such as personally
     * identifiable information or card details).
     *
     * Keys written by applications must be 60 characters or less and must be in the character set
     * `[a-zA-Z0-9_-]`. Entries can also include metadata generated by Square. These keys are prefixed
     * with a namespace, separated from the key with a ':' character.
     *
     * Values have a maximum length of 255 characters.
     *
     * An application can have up to 10 entries per metadata field.
     *
     * Entries written by applications are private and can only be read or modified by the same
     * application.
     *
     * For more information, see [Metadata](https://developer.squareup.com/docs/build-basics/metadata).
     *
     * @return array<string,string>|null
     */
    public function getMetadata(): ?array
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     * Application-defined data attached to this line item. Metadata fields are intended
     * to store descriptive references or associations with an entity in another system or store brief
     * information about the object. Square does not process this field; it only stores and returns it
     * in relevant API calls. Do not use metadata to store any sensitive information (such as personally
     * identifiable information or card details).
     *
     * Keys written by applications must be 60 characters or less and must be in the character set
     * `[a-zA-Z0-9_-]`. Entries can also include metadata generated by Square. These keys are prefixed
     * with a namespace, separated from the key with a ':' character.
     *
     * Values have a maximum length of 255 characters.
     *
     * An application can have up to 10 entries per metadata field.
     *
     * Entries written by applications are private and can only be read or modified by the same
     * application.
     *
     * For more information, see [Metadata](https://developer.squareup.com/docs/build-basics/metadata).
     *
     * @maps metadata
     *
     * @param array<string,string>|null $metadata
     */
    public function setMetadata(?array $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * Returns Modifiers.
     * The [CatalogModifier]($m/CatalogModifier)s applied to this line item.
     *
     * @return OrderLineItemModifier[]|null
     */
    public function getModifiers(): ?array
    {
        return $this->modifiers;
    }

    /**
     * Sets Modifiers.
     * The [CatalogModifier]($m/CatalogModifier)s applied to this line item.
     *
     * @maps modifiers
     *
     * @param OrderLineItemModifier[]|null $modifiers
     */
    public function setModifiers(?array $modifiers): void
    {
        $this->modifiers = $modifiers;
    }

    /**
     * Returns Applied Taxes.
     * The list of references to taxes applied to this line item. Each
     * `OrderLineItemAppliedTax` has a `tax_uid` that references the `uid` of a
     * top-level `OrderLineItemTax` applied to the line item. On reads, the
     * amount applied is populated.
     *
     * An `OrderLineItemAppliedTax` is automatically created on every line
     * item for all `ORDER` scoped taxes added to the order. `OrderLineItemAppliedTax`
     * records for `LINE_ITEM` scoped taxes must be added in requests for the tax
     * to apply to any line items.
     *
     * To change the amount of a tax, modify the referenced top-level tax.
     *
     * @return OrderLineItemAppliedTax[]|null
     */
    public function getAppliedTaxes(): ?array
    {
        return $this->appliedTaxes;
    }

    /**
     * Sets Applied Taxes.
     * The list of references to taxes applied to this line item. Each
     * `OrderLineItemAppliedTax` has a `tax_uid` that references the `uid` of a
     * top-level `OrderLineItemTax` applied to the line item. On reads, the
     * amount applied is populated.
     *
     * An `OrderLineItemAppliedTax` is automatically created on every line
     * item for all `ORDER` scoped taxes added to the order. `OrderLineItemAppliedTax`
     * records for `LINE_ITEM` scoped taxes must be added in requests for the tax
     * to apply to any line items.
     *
     * To change the amount of a tax, modify the referenced top-level tax.
     *
     * @maps applied_taxes
     *
     * @param OrderLineItemAppliedTax[]|null $appliedTaxes
     */
    public function setAppliedTaxes(?array $appliedTaxes): void
    {
        $this->appliedTaxes = $appliedTaxes;
    }

    /**
     * Returns Applied Discounts.
     * The list of references to discounts applied to this line item. Each
     * `OrderLineItemAppliedDiscount` has a `discount_uid` that references the `uid` of a top-level
     * `OrderLineItemDiscounts` applied to the line item. On reads, the amount
     * applied is populated.
     *
     * An `OrderLineItemAppliedDiscount` is automatically created on every line item for all
     * `ORDER` scoped discounts that are added to the order. `OrderLineItemAppliedDiscount` records
     * for `LINE_ITEM` scoped discounts must be added in requests for the discount to apply to any
     * line items.
     *
     * To change the amount of a discount, modify the referenced top-level discount.
     *
     * @return OrderLineItemAppliedDiscount[]|null
     */
    public function getAppliedDiscounts(): ?array
    {
        return $this->appliedDiscounts;
    }

    /**
     * Sets Applied Discounts.
     * The list of references to discounts applied to this line item. Each
     * `OrderLineItemAppliedDiscount` has a `discount_uid` that references the `uid` of a top-level
     * `OrderLineItemDiscounts` applied to the line item. On reads, the amount
     * applied is populated.
     *
     * An `OrderLineItemAppliedDiscount` is automatically created on every line item for all
     * `ORDER` scoped discounts that are added to the order. `OrderLineItemAppliedDiscount` records
     * for `LINE_ITEM` scoped discounts must be added in requests for the discount to apply to any
     * line items.
     *
     * To change the amount of a discount, modify the referenced top-level discount.
     *
     * @maps applied_discounts
     *
     * @param OrderLineItemAppliedDiscount[]|null $appliedDiscounts
     */
    public function setAppliedDiscounts(?array $appliedDiscounts): void
    {
        $this->appliedDiscounts = $appliedDiscounts;
    }

    /**
     * Returns Applied Service Charges.
     * The list of references to service charges applied to this line item. Each
     * `OrderLineItemAppliedServiceCharge` has a `service_charge_id` that references the `uid` of a
     * top-level `OrderServiceCharge` applied to the line item. On reads, the amount applied is
     * populated.
     *
     * To change the amount of a service charge, modify the referenced top-level service charge.
     *
     * @return OrderLineItemAppliedServiceCharge[]|null
     */
    public function getAppliedServiceCharges(): ?array
    {
        return $this->appliedServiceCharges;
    }

    /**
     * Sets Applied Service Charges.
     * The list of references to service charges applied to this line item. Each
     * `OrderLineItemAppliedServiceCharge` has a `service_charge_id` that references the `uid` of a
     * top-level `OrderServiceCharge` applied to the line item. On reads, the amount applied is
     * populated.
     *
     * To change the amount of a service charge, modify the referenced top-level service charge.
     *
     * @maps applied_service_charges
     *
     * @param OrderLineItemAppliedServiceCharge[]|null $appliedServiceCharges
     */
    public function setAppliedServiceCharges(?array $appliedServiceCharges): void
    {
        $this->appliedServiceCharges = $appliedServiceCharges;
    }

    /**
     * Returns Base Price Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     */
    public function getBasePriceMoney(): ?Money
    {
        return $this->basePriceMoney;
    }

    /**
     * Sets Base Price Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     *
     * @maps base_price_money
     */
    public function setBasePriceMoney(?Money $basePriceMoney): void
    {
        $this->basePriceMoney = $basePriceMoney;
    }

    /**
     * Returns Variation Total Price Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     */
    public function getVariationTotalPriceMoney(): ?Money
    {
        return $this->variationTotalPriceMoney;
    }

    /**
     * Sets Variation Total Price Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     *
     * @maps variation_total_price_money
     */
    public function setVariationTotalPriceMoney(?Money $variationTotalPriceMoney): void
    {
        $this->variationTotalPriceMoney = $variationTotalPriceMoney;
    }

    /**
     * Returns Gross Sales Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     */
    public function getGrossSalesMoney(): ?Money
    {
        return $this->grossSalesMoney;
    }

    /**
     * Sets Gross Sales Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     *
     * @maps gross_sales_money
     */
    public function setGrossSalesMoney(?Money $grossSalesMoney): void
    {
        $this->grossSalesMoney = $grossSalesMoney;
    }

    /**
     * Returns Total Tax Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     */
    public function getTotalTaxMoney(): ?Money
    {
        return $this->totalTaxMoney;
    }

    /**
     * Sets Total Tax Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     *
     * @maps total_tax_money
     */
    public function setTotalTaxMoney(?Money $totalTaxMoney): void
    {
        $this->totalTaxMoney = $totalTaxMoney;
    }

    /**
     * Returns Total Discount Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     */
    public function getTotalDiscountMoney(): ?Money
    {
        return $this->totalDiscountMoney;
    }

    /**
     * Sets Total Discount Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     *
     * @maps total_discount_money
     */
    public function setTotalDiscountMoney(?Money $totalDiscountMoney): void
    {
        $this->totalDiscountMoney = $totalDiscountMoney;
    }

    /**
     * Returns Total Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     */
    public function getTotalMoney(): ?Money
    {
        return $this->totalMoney;
    }

    /**
     * Sets Total Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     *
     * @maps total_money
     */
    public function setTotalMoney(?Money $totalMoney): void
    {
        $this->totalMoney = $totalMoney;
    }

    /**
     * Returns Pricing Blocklists.
     * Describes pricing adjustments that are blocked from manual and
     * automatic application to a line item. For more information, see
     * [Apply Taxes and Discounts](https://developer.squareup.com/docs/orders-api/apply-taxes-and-
     * discounts).
     */
    public function getPricingBlocklists(): ?OrderLineItemPricingBlocklists
    {
        return $this->pricingBlocklists;
    }

    /**
     * Sets Pricing Blocklists.
     * Describes pricing adjustments that are blocked from manual and
     * automatic application to a line item. For more information, see
     * [Apply Taxes and Discounts](https://developer.squareup.com/docs/orders-api/apply-taxes-and-
     * discounts).
     *
     * @maps pricing_blocklists
     */
    public function setPricingBlocklists(?OrderLineItemPricingBlocklists $pricingBlocklists): void
    {
        $this->pricingBlocklists = $pricingBlocklists;
    }

    /**
     * Returns Quantity Entry Type.
     * How the quantity was added to the line item.
     */
    public function getQuantityEntryType(): ?string
    {
        return $this->quantityEntryType;
    }

    /**
     * Sets Quantity Entry Type.
     * How the quantity was added to the line item.
     *
     * @maps quantity_entry_type
     */
    public function setQuantityEntryType(?string $quantityEntryType): void
    {
        $this->quantityEntryType = $quantityEntryType;
    }

    /**
     * Returns Tax Category.
     * Represents the line item tax category.
     */
    public function getTaxCategory(): ?string
    {
        return $this->taxCategory;
    }

    /**
     * Sets Tax Category.
     * Represents the line item tax category.
     *
     * @maps tax_category
     */
    public function setTaxCategory(?string $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }

    /**
     * Returns Returned Quantities.
     * List of ReturnedQuantity to indicate what has been returned for itemized returns for
     * this line item
     *
     * @return OrderReturnedQuantity[]|null
     */
    public function getReturnedQuantities(): ?array
    {
        return $this->returnedQuantities;
    }

    /**
     * Sets Returned Quantities.
     * List of ReturnedQuantity to indicate what has been returned for itemized returns for
     * this line item
     *
     * @maps returned_quantities
     *
     * @param OrderReturnedQuantity[]|null $returnedQuantities
     */
    public function setReturnedQuantities(?array $returnedQuantities): void
    {
        $this->returnedQuantities = $returnedQuantities;
    }

    /**
     * Returns Dining Option.
     * Represents a dining option that can be applied either to the order top level or to
     * individual line items. Dining options are created through the Catalog API.
     */
    public function getDiningOption(): ?OrderDiningOption
    {
        return $this->diningOption;
    }

    /**
     * Sets Dining Option.
     * Represents a dining option that can be applied either to the order top level or to
     * individual line items. Dining options are created through the Catalog API.
     *
     * @maps dining_option
     */
    public function setDiningOption(?OrderDiningOption $diningOption): void
    {
        $this->diningOption = $diningOption;
    }

    /**
     * Returns Total Service Charge Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     */
    public function getTotalServiceChargeMoney(): ?Money
    {
        return $this->totalServiceChargeMoney;
    }

    /**
     * Sets Total Service Charge Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     *
     * @maps total_service_charge_money
     */
    public function setTotalServiceChargeMoney(?Money $totalServiceChargeMoney): void
    {
        $this->totalServiceChargeMoney = $totalServiceChargeMoney;
    }

    /**
     * Returns Applied Tax Exemptions.
     * The list of references to tax exemption applied to this line
     * item. Each `OrderLineItemAppliedTaxExemption` has a
     * `tax_exemption_uid` that references the `uid` of a top-level
     * `OrderLineItemTaxExemption` applied to the line item.
     * `OrderLineItemAppliedTaxExemption` records for `LINE_ITEM`
     * scoped tax exemptions must be added in requests for the tax exemption
     * to apply to any line items.
     *
     * @return OrderAppliedTaxExemption[]|null
     */
    public function getAppliedTaxExemptions(): ?array
    {
        return $this->appliedTaxExemptions;
    }

    /**
     * Sets Applied Tax Exemptions.
     * The list of references to tax exemption applied to this line
     * item. Each `OrderLineItemAppliedTaxExemption` has a
     * `tax_exemption_uid` that references the `uid` of a top-level
     * `OrderLineItemTaxExemption` applied to the line item.
     * `OrderLineItemAppliedTaxExemption` records for `LINE_ITEM`
     * scoped tax exemptions must be added in requests for the tax exemption
     * to apply to any line items.
     *
     * @maps applied_tax_exemptions
     *
     * @param OrderAppliedTaxExemption[]|null $appliedTaxExemptions
     */
    public function setAppliedTaxExemptions(?array $appliedTaxExemptions): void
    {
        $this->appliedTaxExemptions = $appliedTaxExemptions;
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
            $json['uid']                         = $this->uid;
        }
        if (isset($this->name)) {
            $json['name']                        = $this->name;
        }
        $json['quantity']                        = $this->quantity;
        if (isset($this->quantityUnit)) {
            $json['quantity_unit']               = $this->quantityUnit;
        }
        if (isset($this->note)) {
            $json['note']                        = $this->note;
        }
        if (isset($this->catalogObjectId)) {
            $json['catalog_object_id']           = $this->catalogObjectId;
        }
        if (isset($this->catalogVersion)) {
            $json['catalog_version']             = $this->catalogVersion;
        }
        if (isset($this->variationName)) {
            $json['variation_name']              = $this->variationName;
        }
        if (isset($this->itemType)) {
            $json['item_type']                   = $this->itemType;
        }
        if (isset($this->sku)) {
            $json['sku']                         = $this->sku;
        }
        if (isset($this->metadata)) {
            $json['metadata']                    = $this->metadata;
        }
        if (isset($this->modifiers)) {
            $json['modifiers']                   = $this->modifiers;
        }
        if (isset($this->appliedTaxes)) {
            $json['applied_taxes']               = $this->appliedTaxes;
        }
        if (isset($this->appliedDiscounts)) {
            $json['applied_discounts']           = $this->appliedDiscounts;
        }
        if (isset($this->appliedServiceCharges)) {
            $json['applied_service_charges']     = $this->appliedServiceCharges;
        }
        if (isset($this->basePriceMoney)) {
            $json['base_price_money']            = $this->basePriceMoney;
        }
        if (isset($this->variationTotalPriceMoney)) {
            $json['variation_total_price_money'] = $this->variationTotalPriceMoney;
        }
        if (isset($this->grossSalesMoney)) {
            $json['gross_sales_money']           = $this->grossSalesMoney;
        }
        if (isset($this->totalTaxMoney)) {
            $json['total_tax_money']             = $this->totalTaxMoney;
        }
        if (isset($this->totalDiscountMoney)) {
            $json['total_discount_money']        = $this->totalDiscountMoney;
        }
        if (isset($this->totalMoney)) {
            $json['total_money']                 = $this->totalMoney;
        }
        if (isset($this->pricingBlocklists)) {
            $json['pricing_blocklists']          = $this->pricingBlocklists;
        }
        if (isset($this->quantityEntryType)) {
            $json['quantity_entry_type']         = $this->quantityEntryType;
        }
        if (isset($this->taxCategory)) {
            $json['tax_category']                = $this->taxCategory;
        }
        if (isset($this->returnedQuantities)) {
            $json['returned_quantities']         = $this->returnedQuantities;
        }
        if (isset($this->diningOption)) {
            $json['dining_option']               = $this->diningOption;
        }
        if (isset($this->totalServiceChargeMoney)) {
            $json['total_service_charge_money']  = $this->totalServiceChargeMoney;
        }
        if (isset($this->appliedTaxExemptions)) {
            $json['applied_tax_exemptions']      = $this->appliedTaxExemptions;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

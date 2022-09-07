<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * A [CatalogObject]($m/CatalogObject) instance of the `ITEM` type, also referred to as an item, in the
 * catalog.
 */
class CatalogItem implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $abbreviation;

    /**
     * @var string|null
     */
    private $labelColor;

    /**
     * @var bool|null
     */
    private $availableOnline;

    /**
     * @var bool|null
     */
    private $availableForPickup;

    /**
     * @var bool|null
     */
    private $availableElectronically;

    /**
     * @var string|null
     */
    private $categoryId;

    /**
     * @var string[]|null
     */
    private $taxIds;

    /**
     * @var CatalogItemModifierListInfo[]|null
     */
    private $modifierListInfo;

    /**
     * @var CatalogObject[]|null
     */
    private $variations;

    /**
     * @var string|null
     */
    private $productType;

    /**
     * @var bool|null
     */
    private $skipModifierScreen;

    /**
     * @var CatalogItemOptionForItem[]|null
     */
    private $itemOptions;

    /**
     * @var string[]|null
     */
    private $imageIds;

    /**
     * @var string[]|null
     */
    private $legacyTaxIds;

    /**
     * @var string|null
     */
    private $sortName;

    /**
     * @var CatalogObjectCategory[]|null
     */
    private $additionalCategories;

    /**
     * @var string|null
     */
    private $descriptionHtml;

    /**
     * @var string|null
     */
    private $descriptionPlaintext;

    /**
     * Returns Name.
     * The item's name. This is a searchable attribute for use in applicable query filters, its value must
     * not be empty, and the length is of Unicode code points.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The item's name. This is a searchable attribute for use in applicable query filters, its value must
     * not be empty, and the length is of Unicode code points.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Description.
     * The item's description. This is a searchable attribute for use in applicable query filters, and its
     * value length is of Unicode code points.
     *
     * Deprecated at 2022-07-20, this field is planned to retire in 6 months. You should migrate to use
     * `description_html` to set the description
     * of the [CatalogItem]($m/CatalogItem) instance.  The `description` and `description_html` field
     * values are kept in sync. If you try to
     * set the both fields, the `description_html` text value overwrites the `description` value. Updates
     * in one field are also reflected in the other,
     * except for when you use an early version before Square API 2022-07-20 and `description_html` is set
     * to blank, setting the `description` value to null
     * does not nullify `description_html`.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * The item's description. This is a searchable attribute for use in applicable query filters, and its
     * value length is of Unicode code points.
     *
     * Deprecated at 2022-07-20, this field is planned to retire in 6 months. You should migrate to use
     * `description_html` to set the description
     * of the [CatalogItem]($m/CatalogItem) instance.  The `description` and `description_html` field
     * values are kept in sync. If you try to
     * set the both fields, the `description_html` text value overwrites the `description` value. Updates
     * in one field are also reflected in the other,
     * except for when you use an early version before Square API 2022-07-20 and `description_html` is set
     * to blank, setting the `description` value to null
     * does not nullify `description_html`.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Abbreviation.
     * The text of the item's display label in the Square Point of Sale app. Only up to the first five
     * characters of the string are used.
     * This attribute is searchable, and its value length is of Unicode code points.
     */
    public function getAbbreviation(): ?string
    {
        return $this->abbreviation;
    }

    /**
     * Sets Abbreviation.
     * The text of the item's display label in the Square Point of Sale app. Only up to the first five
     * characters of the string are used.
     * This attribute is searchable, and its value length is of Unicode code points.
     *
     * @maps abbreviation
     */
    public function setAbbreviation(?string $abbreviation): void
    {
        $this->abbreviation = $abbreviation;
    }

    /**
     * Returns Label Color.
     * The color of the item's display label in the Square Point of Sale app. This must be a valid hex
     * color code.
     */
    public function getLabelColor(): ?string
    {
        return $this->labelColor;
    }

    /**
     * Sets Label Color.
     * The color of the item's display label in the Square Point of Sale app. This must be a valid hex
     * color code.
     *
     * @maps label_color
     */
    public function setLabelColor(?string $labelColor): void
    {
        $this->labelColor = $labelColor;
    }

    /**
     * Returns Available Online.
     * If `true`, the item can be added to shipping orders from the merchant's online store.
     */
    public function getAvailableOnline(): ?bool
    {
        return $this->availableOnline;
    }

    /**
     * Sets Available Online.
     * If `true`, the item can be added to shipping orders from the merchant's online store.
     *
     * @maps available_online
     */
    public function setAvailableOnline(?bool $availableOnline): void
    {
        $this->availableOnline = $availableOnline;
    }

    /**
     * Returns Available for Pickup.
     * If `true`, the item can be added to pickup orders from the merchant's online store.
     */
    public function getAvailableForPickup(): ?bool
    {
        return $this->availableForPickup;
    }

    /**
     * Sets Available for Pickup.
     * If `true`, the item can be added to pickup orders from the merchant's online store.
     *
     * @maps available_for_pickup
     */
    public function setAvailableForPickup(?bool $availableForPickup): void
    {
        $this->availableForPickup = $availableForPickup;
    }

    /**
     * Returns Available Electronically.
     * If `true`, the item can be added to electronically fulfilled orders from the merchant's online store.
     */
    public function getAvailableElectronically(): ?bool
    {
        return $this->availableElectronically;
    }

    /**
     * Sets Available Electronically.
     * If `true`, the item can be added to electronically fulfilled orders from the merchant's online store.
     *
     * @maps available_electronically
     */
    public function setAvailableElectronically(?bool $availableElectronically): void
    {
        $this->availableElectronically = $availableElectronically;
    }

    /**
     * Returns Category Id.
     * The ID of the item's category, if any.
     */
    public function getCategoryId(): ?string
    {
        return $this->categoryId;
    }

    /**
     * Sets Category Id.
     * The ID of the item's category, if any.
     *
     * @maps category_id
     */
    public function setCategoryId(?string $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    /**
     * Returns Tax Ids.
     * A set of IDs indicating the taxes enabled for
     * this item. When updating an item, any taxes listed here will be added to the item.
     * Taxes may also be added to or deleted from an item using `UpdateItemTaxes`.
     *
     * @return string[]|null
     */
    public function getTaxIds(): ?array
    {
        return $this->taxIds;
    }

    /**
     * Sets Tax Ids.
     * A set of IDs indicating the taxes enabled for
     * this item. When updating an item, any taxes listed here will be added to the item.
     * Taxes may also be added to or deleted from an item using `UpdateItemTaxes`.
     *
     * @maps tax_ids
     *
     * @param string[]|null $taxIds
     */
    public function setTaxIds(?array $taxIds): void
    {
        $this->taxIds = $taxIds;
    }

    /**
     * Returns Modifier List Info.
     * A set of `CatalogItemModifierListInfo` objects
     * representing the modifier lists that apply to this item, along with the overrides and min
     * and max limits that are specific to this item. Modifier lists
     * may also be added to or deleted from an item using `UpdateItemModifierLists`.
     *
     * @return CatalogItemModifierListInfo[]|null
     */
    public function getModifierListInfo(): ?array
    {
        return $this->modifierListInfo;
    }

    /**
     * Sets Modifier List Info.
     * A set of `CatalogItemModifierListInfo` objects
     * representing the modifier lists that apply to this item, along with the overrides and min
     * and max limits that are specific to this item. Modifier lists
     * may also be added to or deleted from an item using `UpdateItemModifierLists`.
     *
     * @maps modifier_list_info
     *
     * @param CatalogItemModifierListInfo[]|null $modifierListInfo
     */
    public function setModifierListInfo(?array $modifierListInfo): void
    {
        $this->modifierListInfo = $modifierListInfo;
    }

    /**
     * Returns Variations.
     * A list of [CatalogItemVariation]($m/CatalogItemVariation) objects for this item. An item must have
     * at least one variation.
     *
     * @return CatalogObject[]|null
     */
    public function getVariations(): ?array
    {
        return $this->variations;
    }

    /**
     * Sets Variations.
     * A list of [CatalogItemVariation]($m/CatalogItemVariation) objects for this item. An item must have
     * at least one variation.
     *
     * @maps variations
     *
     * @param CatalogObject[]|null $variations
     */
    public function setVariations(?array $variations): void
    {
        $this->variations = $variations;
    }

    /**
     * Returns Product Type.
     * The type of a CatalogItem. Connect V2 only allows the creation of `REGULAR` or
     * `APPOINTMENTS_SERVICE` items.
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }

    /**
     * Sets Product Type.
     * The type of a CatalogItem. Connect V2 only allows the creation of `REGULAR` or
     * `APPOINTMENTS_SERVICE` items.
     *
     * @maps product_type
     */
    public function setProductType(?string $productType): void
    {
        $this->productType = $productType;
    }

    /**
     * Returns Skip Modifier Screen.
     * If `false`, the Square Point of Sale app will present the `CatalogItem`'s
     * details screen immediately, allowing the merchant to choose `CatalogModifier`s
     * before adding the item to the cart.  This is the default behavior.
     *
     * If `true`, the Square Point of Sale app will immediately add the item to the cart with the pre-
     * selected
     * modifiers, and merchants can edit modifiers by drilling down onto the item's details.
     *
     * Third-party clients are encouraged to implement similar behaviors.
     */
    public function getSkipModifierScreen(): ?bool
    {
        return $this->skipModifierScreen;
    }

    /**
     * Sets Skip Modifier Screen.
     * If `false`, the Square Point of Sale app will present the `CatalogItem`'s
     * details screen immediately, allowing the merchant to choose `CatalogModifier`s
     * before adding the item to the cart.  This is the default behavior.
     *
     * If `true`, the Square Point of Sale app will immediately add the item to the cart with the pre-
     * selected
     * modifiers, and merchants can edit modifiers by drilling down onto the item's details.
     *
     * Third-party clients are encouraged to implement similar behaviors.
     *
     * @maps skip_modifier_screen
     */
    public function setSkipModifierScreen(?bool $skipModifierScreen): void
    {
        $this->skipModifierScreen = $skipModifierScreen;
    }

    /**
     * Returns Item Options.
     * List of item options IDs for this item. Used to manage and group item
     * variations in a specified order.
     *
     * Maximum: 6 item options.
     *
     * @return CatalogItemOptionForItem[]|null
     */
    public function getItemOptions(): ?array
    {
        return $this->itemOptions;
    }

    /**
     * Sets Item Options.
     * List of item options IDs for this item. Used to manage and group item
     * variations in a specified order.
     *
     * Maximum: 6 item options.
     *
     * @maps item_options
     *
     * @param CatalogItemOptionForItem[]|null $itemOptions
     */
    public function setItemOptions(?array $itemOptions): void
    {
        $this->itemOptions = $itemOptions;
    }

    /**
     * Returns Image Ids.
     * The IDs of images associated with this `CatalogItem` instance.
     * These images will be shown to customers in Square Online Store.
     * The first image will show up as the icon for this item in POS.
     *
     * @return string[]|null
     */
    public function getImageIds(): ?array
    {
        return $this->imageIds;
    }

    /**
     * Sets Image Ids.
     * The IDs of images associated with this `CatalogItem` instance.
     * These images will be shown to customers in Square Online Store.
     * The first image will show up as the icon for this item in POS.
     *
     * @maps image_ids
     *
     * @param string[]|null $imageIds
     */
    public function setImageIds(?array $imageIds): void
    {
        $this->imageIds = $imageIds;
    }

    /**
     * Returns Legacy Tax Ids.
     * fee tokens that item applied from legacy `ItemFeeMembership`. For internal and read only
     *
     * @return string[]|null
     */
    public function getLegacyTaxIds(): ?array
    {
        return $this->legacyTaxIds;
    }

    /**
     * Sets Legacy Tax Ids.
     * fee tokens that item applied from legacy `ItemFeeMembership`. For internal and read only
     *
     * @maps legacy_tax_ids
     *
     * @param string[]|null $legacyTaxIds
     */
    public function setLegacyTaxIds(?array $legacyTaxIds): void
    {
        $this->legacyTaxIds = $legacyTaxIds;
    }

    /**
     * Returns Sort Name.
     * A name to sort the item by. If this name is unspecified, namely, the `sort_name` field is absent,
     * the regular `name` field is used for sorting.
     *
     * It is currently supported for sellers of the Japanese locale only.
     */
    public function getSortName(): ?string
    {
        return $this->sortName;
    }

    /**
     * Sets Sort Name.
     * A name to sort the item by. If this name is unspecified, namely, the `sort_name` field is absent,
     * the regular `name` field is used for sorting.
     *
     * It is currently supported for sellers of the Japanese locale only.
     *
     * @maps sort_name
     */
    public function setSortName(?string $sortName): void
    {
        $this->sortName = $sortName;
    }

    /**
     * Returns Additional Categories.
     * The list of additional categories
     *
     * @return CatalogObjectCategory[]|null
     */
    public function getAdditionalCategories(): ?array
    {
        return $this->additionalCategories;
    }

    /**
     * Sets Additional Categories.
     * The list of additional categories
     *
     * @maps additional_categories
     *
     * @param CatalogObjectCategory[]|null $additionalCategories
     */
    public function setAdditionalCategories(?array $additionalCategories): void
    {
        $this->additionalCategories = $additionalCategories;
    }

    /**
     * Returns Description Html.
     * The item's description as expressed in valid HTML elements. The length of this field value,
     * including those of HTML tags,
     * is of Unicode points. With application query filters, the text values of the HTML elements and
     * attributes are searchable. Invalid or
     * unsupported HTML elements or attributes are ignored.
     *
     * Supported HTML elements include:
     * - `a`: Link. Supports linking to website URLs, email address, and telephone numbers.
     * - `b`, `strong`:  Bold text
     * - `br`: Line break
     * - `code`: Computer code
     * - `div`: Section
     * - `h1-h6`: Headings
     * - `i`, `em`: Italics
     * - `li`: List element
     * - `ol`: Numbered list
     * - `p`: Paragraph
     * - `ul`: Bullet list
     * - `u`: Underline
     *
     *
     * Supported HTML attributes include:
     * - `align`: Alignment of the text content
     * - `href`: Link destination
     * - `rel`: Relationship between link's target and source
     * - `target`: Place to open the linked document
     */
    public function getDescriptionHtml(): ?string
    {
        return $this->descriptionHtml;
    }

    /**
     * Sets Description Html.
     * The item's description as expressed in valid HTML elements. The length of this field value,
     * including those of HTML tags,
     * is of Unicode points. With application query filters, the text values of the HTML elements and
     * attributes are searchable. Invalid or
     * unsupported HTML elements or attributes are ignored.
     *
     * Supported HTML elements include:
     * - `a`: Link. Supports linking to website URLs, email address, and telephone numbers.
     * - `b`, `strong`:  Bold text
     * - `br`: Line break
     * - `code`: Computer code
     * - `div`: Section
     * - `h1-h6`: Headings
     * - `i`, `em`: Italics
     * - `li`: List element
     * - `ol`: Numbered list
     * - `p`: Paragraph
     * - `ul`: Bullet list
     * - `u`: Underline
     *
     *
     * Supported HTML attributes include:
     * - `align`: Alignment of the text content
     * - `href`: Link destination
     * - `rel`: Relationship between link's target and source
     * - `target`: Place to open the linked document
     *
     * @maps description_html
     */
    public function setDescriptionHtml(?string $descriptionHtml): void
    {
        $this->descriptionHtml = $descriptionHtml;
    }

    /**
     * Returns Description Plaintext.
     * A server-generated plaintext version of the `description_html` field, without formatting tags.
     */
    public function getDescriptionPlaintext(): ?string
    {
        return $this->descriptionPlaintext;
    }

    /**
     * Sets Description Plaintext.
     * A server-generated plaintext version of the `description_html` field, without formatting tags.
     *
     * @maps description_plaintext
     */
    public function setDescriptionPlaintext(?string $descriptionPlaintext): void
    {
        $this->descriptionPlaintext = $descriptionPlaintext;
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
            $json['name']                     = $this->name;
        }
        if (isset($this->description)) {
            $json['description']              = $this->description;
        }
        if (isset($this->abbreviation)) {
            $json['abbreviation']             = $this->abbreviation;
        }
        if (isset($this->labelColor)) {
            $json['label_color']              = $this->labelColor;
        }
        if (isset($this->availableOnline)) {
            $json['available_online']         = $this->availableOnline;
        }
        if (isset($this->availableForPickup)) {
            $json['available_for_pickup']     = $this->availableForPickup;
        }
        if (isset($this->availableElectronically)) {
            $json['available_electronically'] = $this->availableElectronically;
        }
        if (isset($this->categoryId)) {
            $json['category_id']              = $this->categoryId;
        }
        if (isset($this->taxIds)) {
            $json['tax_ids']                  = $this->taxIds;
        }
        if (isset($this->modifierListInfo)) {
            $json['modifier_list_info']       = $this->modifierListInfo;
        }
        if (isset($this->variations)) {
            $json['variations']               = $this->variations;
        }
        if (isset($this->productType)) {
            $json['product_type']             = $this->productType;
        }
        if (isset($this->skipModifierScreen)) {
            $json['skip_modifier_screen']     = $this->skipModifierScreen;
        }
        if (isset($this->itemOptions)) {
            $json['item_options']             = $this->itemOptions;
        }
        if (isset($this->imageIds)) {
            $json['image_ids']                = $this->imageIds;
        }
        if (isset($this->legacyTaxIds)) {
            $json['legacy_tax_ids']           = $this->legacyTaxIds;
        }
        if (isset($this->sortName)) {
            $json['sort_name']                = $this->sortName;
        }
        if (isset($this->additionalCategories)) {
            $json['additional_categories']    = $this->additionalCategories;
        }
        if (isset($this->descriptionHtml)) {
            $json['description_html']         = $this->descriptionHtml;
        }
        if (isset($this->descriptionPlaintext)) {
            $json['description_plaintext']    = $this->descriptionPlaintext;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

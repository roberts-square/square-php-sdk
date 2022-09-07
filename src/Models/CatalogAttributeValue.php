<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * An object defining the attribute value affected by a `CatalogUpdate` event.
 */
class CatalogAttributeValue implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $stringValue;

    /**
     * @var int|null
     */
    private $intValue;

    /**
     * @var bool|null
     */
    private $boolValue;

    /**
     * @var Money|null
     */
    private $moneyValue;

    /**
     * Returns String Value.
     * Populated if the type of the `CatalogAttribute` type is `STRING`.
     */
    public function getStringValue(): ?string
    {
        return $this->stringValue;
    }

    /**
     * Sets String Value.
     * Populated if the type of the `CatalogAttribute` type is `STRING`.
     *
     * @maps string_value
     */
    public function setStringValue(?string $stringValue): void
    {
        $this->stringValue = $stringValue;
    }

    /**
     * Returns Int Value.
     * Populated if the type of the `CatalogAttribute` type is `INT`.
     */
    public function getIntValue(): ?int
    {
        return $this->intValue;
    }

    /**
     * Sets Int Value.
     * Populated if the type of the `CatalogAttribute` type is `INT`.
     *
     * @maps int_value
     */
    public function setIntValue(?int $intValue): void
    {
        $this->intValue = $intValue;
    }

    /**
     * Returns Bool Value.
     * Populated if the type of the `CatalogAttribute` type is `BOOL`.
     */
    public function getBoolValue(): ?bool
    {
        return $this->boolValue;
    }

    /**
     * Sets Bool Value.
     * Populated if the type of the `CatalogAttribute` type is `BOOL`.
     *
     * @maps bool_value
     */
    public function setBoolValue(?bool $boolValue): void
    {
        $this->boolValue = $boolValue;
    }

    /**
     * Returns Money Value.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     */
    public function getMoneyValue(): ?Money
    {
        return $this->moneyValue;
    }

    /**
     * Sets Money Value.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     *
     * @maps money_value
     */
    public function setMoneyValue(?Money $moneyValue): void
    {
        $this->moneyValue = $moneyValue;
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
        if (isset($this->stringValue)) {
            $json['string_value'] = $this->stringValue;
        }
        if (isset($this->intValue)) {
            $json['int_value']    = $this->intValue;
        }
        if (isset($this->boolValue)) {
            $json['bool_value']   = $this->boolValue;
        }
        if (isset($this->moneyValue)) {
            $json['money_value']  = $this->moneyValue;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

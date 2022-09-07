<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * A service charge in the Catalog object model. Note that `AUTO_GRATUITY` service charge can be
 * applied only in one location.
 */
class CatalogServiceCharge implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $percentage;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var bool|null
     */
    private $taxable;

    /**
     * @var string|null
     */
    private $calculationPhase;

    /**
     * @var int|null
     */
    private $minimumSeatCount;

    /**
     * @var string|null
     */
    private $autoEnableType;

    /**
     * @var Money|null
     */
    private $amountMoney;

    /**
     * @var string|null
     */
    private $labelColor;

    /**
     * @var string|null
     */
    private $treatmentType;

    /**
     * Returns Name.
     * The name of the service charge.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the service charge.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Percentage.
     * The percentage of the service charge in decimal form without the `"%"` sign, using a `'.'`
     * as the decimal separator. For example, a value of `7.5` corresponds to 7.5%.
     */
    public function getPercentage(): ?string
    {
        return $this->percentage;
    }

    /**
     * Sets Percentage.
     * The percentage of the service charge in decimal form without the `"%"` sign, using a `'.'`
     * as the decimal separator. For example, a value of `7.5` corresponds to 7.5%.
     *
     * @maps percentage
     */
    public function setPercentage(?string $percentage): void
    {
        $this->percentage = $percentage;
    }

    /**
     * Returns Type.
     * Determines service charge type
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Determines service charge type
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Taxable.
     * Whether the service charge is taxable.
     */
    public function getTaxable(): ?bool
    {
        return $this->taxable;
    }

    /**
     * Sets Taxable.
     * Whether the service charge is taxable.
     *
     * @maps taxable
     */
    public function setTaxable(?bool $taxable): void
    {
        $this->taxable = $taxable;
    }

    /**
     * Returns Calculation Phase.
     * Determines service charge calculation phase
     */
    public function getCalculationPhase(): ?string
    {
        return $this->calculationPhase;
    }

    /**
     * Sets Calculation Phase.
     * Determines service charge calculation phase
     *
     * @maps calculation_phase
     */
    public function setCalculationPhase(?string $calculationPhase): void
    {
        $this->calculationPhase = $calculationPhase;
    }

    /**
     * Returns Minimum Seat Count.
     * The minimum seat count for automatic application.
     * Surcharges can be manually applied regardless of seat count.
     */
    public function getMinimumSeatCount(): ?int
    {
        return $this->minimumSeatCount;
    }

    /**
     * Sets Minimum Seat Count.
     * The minimum seat count for automatic application.
     * Surcharges can be manually applied regardless of seat count.
     *
     * @maps minimum_seat_count
     */
    public function setMinimumSeatCount(?int $minimumSeatCount): void
    {
        $this->minimumSeatCount = $minimumSeatCount;
    }

    /**
     * Returns Auto Enable Type.
     * Determines service charge type
     */
    public function getAutoEnableType(): ?string
    {
        return $this->autoEnableType;
    }

    /**
     * Sets Auto Enable Type.
     * Determines service charge type
     *
     * @maps auto_enable_type
     */
    public function setAutoEnableType(?string $autoEnableType): void
    {
        $this->autoEnableType = $autoEnableType;
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
     * Returns Label Color.
     * The color of the discount display label in the Square Point of Sale app. This must be a valid hex
     * color code.
     */
    public function getLabelColor(): ?string
    {
        return $this->labelColor;
    }

    /**
     * Sets Label Color.
     * The color of the discount display label in the Square Point of Sale app. This must be a valid hex
     * color code.
     *
     * @maps label_color
     */
    public function setLabelColor(?string $labelColor): void
    {
        $this->labelColor = $labelColor;
    }

    /**
     * Returns Treatment Type.
     * Determines service charge treatment type
     */
    public function getTreatmentType(): ?string
    {
        return $this->treatmentType;
    }

    /**
     * Sets Treatment Type.
     * Determines service charge treatment type
     *
     * @maps treatment_type
     */
    public function setTreatmentType(?string $treatmentType): void
    {
        $this->treatmentType = $treatmentType;
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
            $json['name']               = $this->name;
        }
        if (isset($this->percentage)) {
            $json['percentage']         = $this->percentage;
        }
        if (isset($this->type)) {
            $json['type']               = $this->type;
        }
        if (isset($this->taxable)) {
            $json['taxable']            = $this->taxable;
        }
        if (isset($this->calculationPhase)) {
            $json['calculation_phase']  = $this->calculationPhase;
        }
        if (isset($this->minimumSeatCount)) {
            $json['minimum_seat_count'] = $this->minimumSeatCount;
        }
        if (isset($this->autoEnableType)) {
            $json['auto_enable_type']   = $this->autoEnableType;
        }
        if (isset($this->amountMoney)) {
            $json['amount_money']       = $this->amountMoney;
        }
        if (isset($this->labelColor)) {
            $json['label_color']        = $this->labelColor;
        }
        if (isset($this->treatmentType)) {
            $json['treatment_type']     = $this->treatmentType;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a promotion for a [loyalty program]($m/LoyaltyProgram). Loyalty promotions enable buyers
 * to earn extra points on top of those earned from the base program.
 *
 * A loyalty program can have a maximum of 10 loyalty promotions with an `ACTIVE` or `SCHEDULED` status.
 */
class LoyaltyPromotion implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var LoyaltyPromotionIncentive
     */
    private $incentive;

    /**
     * @var LoyaltyPromotionAvailableTimeData
     */
    private $availableTime;

    /**
     * @var LoyaltyPromotionTriggerLimit|null
     */
    private $triggerLimit;

    /**
     * @var Money|null
     */
    private $minimumAmountSpentMoney;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $canceledAt;

    /**
     * @var string|null
     */
    private $updatedAt;

    /**
     * @var string|null
     */
    private $loyaltyProgramId;

    /**
     * @var Money|null
     */
    private $minimumSpendAmountMoney;

    /**
     * @param string $name
     * @param LoyaltyPromotionIncentive $incentive
     * @param LoyaltyPromotionAvailableTimeData $availableTime
     */
    public function __construct(
        string $name,
        LoyaltyPromotionIncentive $incentive,
        LoyaltyPromotionAvailableTimeData $availableTime
    ) {
        $this->name = $name;
        $this->incentive = $incentive;
        $this->availableTime = $availableTime;
    }

    /**
     * Returns Id.
     * The Square-assigned ID of the promotion.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The Square-assigned ID of the promotion.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Name.
     * The name of the promotion.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the promotion.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Incentive.
     * Represents how points for a [loyalty promotion]($m/LoyaltyPromotion) are calculated,
     * either by multiplying the points earned from the base program or by adding a specified number
     * of points to the points earned from the base program.
     */
    public function getIncentive(): LoyaltyPromotionIncentive
    {
        return $this->incentive;
    }

    /**
     * Sets Incentive.
     * Represents how points for a [loyalty promotion]($m/LoyaltyPromotion) are calculated,
     * either by multiplying the points earned from the base program or by adding a specified number
     * of points to the points earned from the base program.
     *
     * @required
     * @maps incentive
     */
    public function setIncentive(LoyaltyPromotionIncentive $incentive): void
    {
        $this->incentive = $incentive;
    }

    /**
     * Returns Available Time.
     * Represents scheduling information that determines when purchases can qualify to earn points
     * from a [loyalty promotion]($m/LoyaltyPromotion).
     */
    public function getAvailableTime(): LoyaltyPromotionAvailableTimeData
    {
        return $this->availableTime;
    }

    /**
     * Sets Available Time.
     * Represents scheduling information that determines when purchases can qualify to earn points
     * from a [loyalty promotion]($m/LoyaltyPromotion).
     *
     * @required
     * @maps available_time
     */
    public function setAvailableTime(LoyaltyPromotionAvailableTimeData $availableTime): void
    {
        $this->availableTime = $availableTime;
    }

    /**
     * Returns Trigger Limit.
     * Represents the number of times a buyer can earn points during a [loyalty
     * promotion]($m/LoyaltyPromotion).
     * If this field is not set, buyers can trigger the promotion an unlimited number of times to earn
     * points during
     * the time that the promotion is available.
     *
     * A purchase that is disqualified from earning points because of this limit might qualify for another
     * active promotion.
     */
    public function getTriggerLimit(): ?LoyaltyPromotionTriggerLimit
    {
        return $this->triggerLimit;
    }

    /**
     * Sets Trigger Limit.
     * Represents the number of times a buyer can earn points during a [loyalty
     * promotion]($m/LoyaltyPromotion).
     * If this field is not set, buyers can trigger the promotion an unlimited number of times to earn
     * points during
     * the time that the promotion is available.
     *
     * A purchase that is disqualified from earning points because of this limit might qualify for another
     * active promotion.
     *
     * @maps trigger_limit
     */
    public function setTriggerLimit(?LoyaltyPromotionTriggerLimit $triggerLimit): void
    {
        $this->triggerLimit = $triggerLimit;
    }

    /**
     * Returns Minimum Amount Spent Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     */
    public function getMinimumAmountSpentMoney(): ?Money
    {
        return $this->minimumAmountSpentMoney;
    }

    /**
     * Sets Minimum Amount Spent Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     *
     * @maps minimum_amount_spent_money
     */
    public function setMinimumAmountSpentMoney(?Money $minimumAmountSpentMoney): void
    {
        $this->minimumAmountSpentMoney = $minimumAmountSpentMoney;
    }

    /**
     * Returns Status.
     * Indicates the status of a [loyalty promotion]($m/LoyaltyPromotion).
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Indicates the status of a [loyalty promotion]($m/LoyaltyPromotion).
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Created At.
     * The timestamp of when the promotion was created, in RFC 3339 format.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * The timestamp of when the promotion was created, in RFC 3339 format.
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Canceled At.
     * The timestamp of when the promotion was canceled, in RFC 3339 format.
     */
    public function getCanceledAt(): ?string
    {
        return $this->canceledAt;
    }

    /**
     * Sets Canceled At.
     * The timestamp of when the promotion was canceled, in RFC 3339 format.
     *
     * @maps canceled_at
     */
    public function setCanceledAt(?string $canceledAt): void
    {
        $this->canceledAt = $canceledAt;
    }

    /**
     * Returns Updated At.
     * The timestamp when the promotion was last updated, in RFC 3339 format.
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     * The timestamp when the promotion was last updated, in RFC 3339 format.
     *
     * @maps updated_at
     */
    public function setUpdatedAt(?string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Loyalty Program Id.
     * The ID of the [loyalty program]($m/LoyaltyProgram) associated with the promotion.
     */
    public function getLoyaltyProgramId(): ?string
    {
        return $this->loyaltyProgramId;
    }

    /**
     * Sets Loyalty Program Id.
     * The ID of the [loyalty program]($m/LoyaltyProgram) associated with the promotion.
     *
     * @maps loyalty_program_id
     */
    public function setLoyaltyProgramId(?string $loyaltyProgramId): void
    {
        $this->loyaltyProgramId = $loyaltyProgramId;
    }

    /**
     * Returns Minimum Spend Amount Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     */
    public function getMinimumSpendAmountMoney(): ?Money
    {
        return $this->minimumSpendAmountMoney;
    }

    /**
     * Sets Minimum Spend Amount Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     *
     * @maps minimum_spend_amount_money
     */
    public function setMinimumSpendAmountMoney(?Money $minimumSpendAmountMoney): void
    {
        $this->minimumSpendAmountMoney = $minimumSpendAmountMoney;
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
        if (isset($this->id)) {
            $json['id']                         = $this->id;
        }
        $json['name']                           = $this->name;
        $json['incentive']                      = $this->incentive;
        $json['available_time']                 = $this->availableTime;
        if (isset($this->triggerLimit)) {
            $json['trigger_limit']              = $this->triggerLimit;
        }
        if (isset($this->minimumAmountSpentMoney)) {
            $json['minimum_amount_spent_money'] = $this->minimumAmountSpentMoney;
        }
        if (isset($this->status)) {
            $json['status']                     = $this->status;
        }
        if (isset($this->createdAt)) {
            $json['created_at']                 = $this->createdAt;
        }
        if (isset($this->canceledAt)) {
            $json['canceled_at']                = $this->canceledAt;
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']                 = $this->updatedAt;
        }
        if (isset($this->loyaltyProgramId)) {
            $json['loyalty_program_id']         = $this->loyaltyProgramId;
        }
        if (isset($this->minimumSpendAmountMoney)) {
            $json['minimum_spend_amount_money'] = $this->minimumSpendAmountMoney;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

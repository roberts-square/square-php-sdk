<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a linkage between a loyalty account and an order.
 */
class LoyaltyOrderAssignment implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $loyaltyAccountId;

    /**
     * @var string|null
     */
    private $programId;

    /**
     * @var int|null
     */
    private $points;

    /**
     * @var string|null
     */
    private $orderId;

    /**
     * @var string[]|null
     */
    private $rewardIds;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * Returns Id.
     * Assignment's unique ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Assignment's unique ID.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Status.
     * Status of the assignment.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Status of the assignment.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Loyalty Account Id.
     * Unique identifier of the account that's associated with the assignment.
     */
    public function getLoyaltyAccountId(): ?string
    {
        return $this->loyaltyAccountId;
    }

    /**
     * Sets Loyalty Account Id.
     * Unique identifier of the account that's associated with the assignment.
     *
     * @maps loyalty_account_id
     */
    public function setLoyaltyAccountId(?string $loyaltyAccountId): void
    {
        $this->loyaltyAccountId = $loyaltyAccountId;
    }

    /**
     * Returns Program Id.
     * Unique identifier of the program.
     */
    public function getProgramId(): ?string
    {
        return $this->programId;
    }

    /**
     * Sets Program Id.
     * Unique identifier of the program.
     *
     * @maps program_id
     */
    public function setProgramId(?string $programId): void
    {
        $this->programId = $programId;
    }

    /**
     * Returns Points.
     * Number of points that will be accumulated for this order.
     */
    public function getPoints(): ?int
    {
        return $this->points;
    }

    /**
     * Sets Points.
     * Number of points that will be accumulated for this order.
     *
     * @maps points
     */
    public function setPoints(?int $points): void
    {
        $this->points = $points;
    }

    /**
     * Returns Order Id.
     * Unique identifier of the reward this assignment links to.
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * Sets Order Id.
     * Unique identifier of the reward this assignment links to.
     *
     * @maps order_id
     */
    public function setOrderId(?string $orderId): void
    {
        $this->orderId = $orderId;
    }

    /**
     * Returns Reward Ids.
     * Rewards that are applied to the order in the sale and should be redeemed.
     *
     * @return string[]|null
     */
    public function getRewardIds(): ?array
    {
        return $this->rewardIds;
    }

    /**
     * Sets Reward Ids.
     * Rewards that are applied to the order in the sale and should be redeemed.
     *
     * @maps reward_ids
     *
     * @param string[]|null $rewardIds
     */
    public function setRewardIds(?array $rewardIds): void
    {
        $this->rewardIds = $rewardIds;
    }

    /**
     * Returns Created At.
     * Server time (RFC 3339) first created at.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * Server time (RFC 3339) first created at.
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
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
            $json['id']                 = $this->id;
        }
        if (isset($this->status)) {
            $json['status']             = $this->status;
        }
        if (isset($this->loyaltyAccountId)) {
            $json['loyalty_account_id'] = $this->loyaltyAccountId;
        }
        if (isset($this->programId)) {
            $json['program_id']         = $this->programId;
        }
        if (isset($this->points)) {
            $json['points']             = $this->points;
        }
        if (isset($this->orderId)) {
            $json['order_id']           = $this->orderId;
        }
        if (isset($this->rewardIds)) {
            $json['reward_ids']         = $this->rewardIds;
        }
        if (isset($this->createdAt)) {
            $json['created_at']         = $this->createdAt;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

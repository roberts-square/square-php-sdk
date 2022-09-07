<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a comp on an order.
 */
class OrderComp implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $uid;

    /**
     * @var string|null
     */
    private $discountUid;

    /**
     * @var OrderCompCompReason|null
     */
    private $reason;

    /**
     * @var string|null
     */
    private $employeeId;

    /**
     * @var string|null
     */
    private $deviceCredentialId;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * Returns Uid.
     * A unique ID of the `Comp` within the order or line item.
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     * A unique ID of the `Comp` within the order or line item.
     *
     * @maps uid
     */
    public function setUid(?string $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * Returns Discount Uid.
     * The `uid` of the 100% discount associated with this comp operation. If this uid is a member
     * a line item's applied_discounts then this comp applies to the line item.
     */
    public function getDiscountUid(): ?string
    {
        return $this->discountUid;
    }

    /**
     * Sets Discount Uid.
     * The `uid` of the 100% discount associated with this comp operation. If this uid is a member
     * a line item's applied_discounts then this comp applies to the line item.
     *
     * @maps discount_uid
     */
    public function setDiscountUid(?string $discountUid): void
    {
        $this->discountUid = $discountUid;
    }

    /**
     * Returns Reason.
     */
    public function getReason(): ?OrderCompCompReason
    {
        return $this->reason;
    }

    /**
     * Sets Reason.
     *
     * @maps reason
     */
    public function setReason(?OrderCompCompReason $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * Returns Employee Id.
     * The ID identifying the employee who executed this comp operation.
     */
    public function getEmployeeId(): ?string
    {
        return $this->employeeId;
    }

    /**
     * Sets Employee Id.
     * The ID identifying the employee who executed this comp operation.
     *
     * @maps employee_id
     */
    public function setEmployeeId(?string $employeeId): void
    {
        $this->employeeId = $employeeId;
    }

    /**
     * Returns Device Credential Id.
     * The ID identifying the device through which this comp operation was performed.
     */
    public function getDeviceCredentialId(): ?string
    {
        return $this->deviceCredentialId;
    }

    /**
     * Sets Device Credential Id.
     * The ID identifying the device through which this comp operation was performed.
     *
     * @maps device_credential_id
     */
    public function setDeviceCredentialId(?string $deviceCredentialId): void
    {
        $this->deviceCredentialId = $deviceCredentialId;
    }

    /**
     * Returns Created At.
     * The timestamp for when the comp operation was executed.
     * The timestamp must be in RFC 3339 format (for example, "2016-09-04T23:59:33.123Z").
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * The timestamp for when the comp operation was executed.
     * The timestamp must be in RFC 3339 format (for example, "2016-09-04T23:59:33.123Z").
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
        if (isset($this->uid)) {
            $json['uid']                  = $this->uid;
        }
        if (isset($this->discountUid)) {
            $json['discount_uid']         = $this->discountUid;
        }
        if (isset($this->reason)) {
            $json['reason']               = $this->reason;
        }
        if (isset($this->employeeId)) {
            $json['employee_id']          = $this->employeeId;
        }
        if (isset($this->deviceCredentialId)) {
            $json['device_credential_id'] = $this->deviceCredentialId;
        }
        if (isset($this->createdAt)) {
            $json['created_at']           = $this->createdAt;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

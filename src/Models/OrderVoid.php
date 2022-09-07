<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a void on an order.
 */
class OrderVoid implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $uid;

    /**
     * @var string|null
     */
    private $scope;

    /**
     * @var OrderVoidVoidReason|null
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
     * @var OrderVoidItems[]|null
     */
    private $items;

    /**
     * Returns Uid.
     * A unique ID of the void within the order or line item.
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     * A unique ID of the void within the order or line item.
     *
     * @maps uid
     */
    public function setUid(?string $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * Returns Scope.
     */
    public function getScope(): ?string
    {
        return $this->scope;
    }

    /**
     * Sets Scope.
     *
     * @maps scope
     */
    public function setScope(?string $scope): void
    {
        $this->scope = $scope;
    }

    /**
     * Returns Reason.
     */
    public function getReason(): ?OrderVoidVoidReason
    {
        return $this->reason;
    }

    /**
     * Sets Reason.
     *
     * @maps reason
     */
    public function setReason(?OrderVoidVoidReason $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * Returns Employee Id.
     * The ID identifying the employee who executed this void operation.
     */
    public function getEmployeeId(): ?string
    {
        return $this->employeeId;
    }

    /**
     * Sets Employee Id.
     * The ID identifying the employee who executed this void operation.
     *
     * @maps employee_id
     */
    public function setEmployeeId(?string $employeeId): void
    {
        $this->employeeId = $employeeId;
    }

    /**
     * Returns Device Credential Id.
     * The ID identifying the device through which this void operation was performed.
     */
    public function getDeviceCredentialId(): ?string
    {
        return $this->deviceCredentialId;
    }

    /**
     * Sets Device Credential Id.
     * The ID identifying the device through which this void operation was performed.
     *
     * @maps device_credential_id
     */
    public function setDeviceCredentialId(?string $deviceCredentialId): void
    {
        $this->deviceCredentialId = $deviceCredentialId;
    }

    /**
     * Returns Created At.
     * The timestamp for when the void operation was executed.
     * The timestamp must be in RFC 3339 format (for example, "2016-09-04T23:59:33.123Z").
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * The timestamp for when the void operation was executed.
     * The timestamp must be in RFC 3339 format (for example, "2016-09-04T23:59:33.123Z").
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Items.
     * When the void scope is LINE ITEM, this is used to specify the particular line items
     * that should be voided and in what quantity.
     *
     * @return OrderVoidItems[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * Sets Items.
     * When the void scope is LINE ITEM, this is used to specify the particular line items
     * that should be voided and in what quantity.
     *
     * @maps items
     *
     * @param OrderVoidItems[]|null $items
     */
    public function setItems(?array $items): void
    {
        $this->items = $items;
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
        if (isset($this->scope)) {
            $json['scope']                = $this->scope;
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
        if (isset($this->items)) {
            $json['items']                = $this->items;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

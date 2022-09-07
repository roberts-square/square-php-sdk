<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a phase, which can override subscription phases as defined by plan_id
 */
class Phase implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $uid;

    /**
     * @var int|null
     */
    private $ordinal;

    /**
     * @var string|null
     */
    private $orderTemplateId;

    /**
     * @var string|null
     */
    private $planPhaseUid;

    /**
     * Returns Uid.
     * id of subscription phase stored in catalog
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     * id of subscription phase stored in catalog
     *
     * @maps uid
     */
    public function setUid(?string $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * Returns Ordinal.
     * index of phase in total subscription plan
     */
    public function getOrdinal(): ?int
    {
        return $this->ordinal;
    }

    /**
     * Sets Ordinal.
     * index of phase in total subscription plan
     *
     * @maps ordinal
     */
    public function setOrdinal(?int $ordinal): void
    {
        $this->ordinal = $ordinal;
    }

    /**
     * Returns Order Template Id.
     * id of order to be used in billing
     */
    public function getOrderTemplateId(): ?string
    {
        return $this->orderTemplateId;
    }

    /**
     * Sets Order Template Id.
     * id of order to be used in billing
     *
     * @maps order_template_id
     */
    public function setOrderTemplateId(?string $orderTemplateId): void
    {
        $this->orderTemplateId = $orderTemplateId;
    }

    /**
     * Returns Plan Phase Uid.
     * the uid from the catalog subscription plan phase
     */
    public function getPlanPhaseUid(): ?string
    {
        return $this->planPhaseUid;
    }

    /**
     * Sets Plan Phase Uid.
     * the uid from the catalog subscription plan phase
     *
     * @maps plan_phase_uid
     */
    public function setPlanPhaseUid(?string $planPhaseUid): void
    {
        $this->planPhaseUid = $planPhaseUid;
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
            $json['uid']               = $this->uid;
        }
        if (isset($this->ordinal)) {
            $json['ordinal']           = $this->ordinal;
        }
        if (isset($this->orderTemplateId)) {
            $json['order_template_id'] = $this->orderTemplateId;
        }
        if (isset($this->planPhaseUid)) {
            $json['plan_phase_uid']    = $this->planPhaseUid;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

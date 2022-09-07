<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a delete request for `CustomAttribute`.
 */
class DeleteCaPlayResourceCustomAttributeApiRequest implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $hardDelete;

    /**
     * Returns Hard Delete.
     * If set to `true`, the object will be deleted without possibility of recovery.
     */
    public function getHardDelete(): ?bool
    {
        return $this->hardDelete;
    }

    /**
     * Sets Hard Delete.
     * If set to `true`, the object will be deleted without possibility of recovery.
     *
     * @maps hard_delete
     */
    public function setHardDelete(?bool $hardDelete): void
    {
        $this->hardDelete = $hardDelete;
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
        if (isset($this->hardDelete)) {
            $json['hard_delete'] = $this->hardDelete;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

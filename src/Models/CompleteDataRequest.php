<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class CompleteDataRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $dataType;

    /**
     * Returns Data Type.
     */
    public function getDataType(): ?string
    {
        return $this->dataType;
    }

    /**
     * Sets Data Type.
     *
     * @maps data_type
     */
    public function setDataType(?string $dataType): void
    {
        $this->dataType = $dataType;
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
        if (isset($this->dataType)) {
            $json['data_type'] = $this->dataType;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

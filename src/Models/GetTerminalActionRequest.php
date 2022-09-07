<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class GetTerminalActionRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $mInclude;

    /**
     * Returns M Include.
     * Related paths to include in the response as an optimization represented as a
     * comma-separated list.
     */
    public function getMInclude(): ?string
    {
        return $this->mInclude;
    }

    /**
     * Sets M Include.
     * Related paths to include in the response as an optimization represented as a
     * comma-separated list.
     *
     * @maps include
     */
    public function setMInclude(?string $mInclude): void
    {
        $this->mInclude = $mInclude;
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
        if (isset($this->mInclude)) {
            $json['include'] = $this->mInclude;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

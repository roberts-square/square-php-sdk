<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class CompleteTerminalActionRequest implements \JsonSerializable
{
    /**
     * @var CompleteDataRequest|null
     */
    private $completeDataRequest;

    /**
     * Returns Complete Data Request.
     */
    public function getCompleteDataRequest(): ?CompleteDataRequest
    {
        return $this->completeDataRequest;
    }

    /**
     * Sets Complete Data Request.
     *
     * @maps complete_data_request
     */
    public function setCompleteDataRequest(?CompleteDataRequest $completeDataRequest): void
    {
        $this->completeDataRequest = $completeDataRequest;
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
        if (isset($this->completeDataRequest)) {
            $json['complete_data_request'] = $this->completeDataRequest;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

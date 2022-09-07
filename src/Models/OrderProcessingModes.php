<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * The processing modes for order creation and completion.
 */
class OrderProcessingModes implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $creationProcessingMode;

    /**
     * @var string|null
     */
    private $completionProcessingMode;

    /**
     * Returns Creation Processing Mode.
     */
    public function getCreationProcessingMode(): ?string
    {
        return $this->creationProcessingMode;
    }

    /**
     * Sets Creation Processing Mode.
     *
     * @maps creation_processing_mode
     */
    public function setCreationProcessingMode(?string $creationProcessingMode): void
    {
        $this->creationProcessingMode = $creationProcessingMode;
    }

    /**
     * Returns Completion Processing Mode.
     */
    public function getCompletionProcessingMode(): ?string
    {
        return $this->completionProcessingMode;
    }

    /**
     * Sets Completion Processing Mode.
     *
     * @maps completion_processing_mode
     */
    public function setCompletionProcessingMode(?string $completionProcessingMode): void
    {
        $this->completionProcessingMode = $completionProcessingMode;
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
        if (isset($this->creationProcessingMode)) {
            $json['creation_processing_mode']   = $this->creationProcessingMode;
        }
        if (isset($this->completionProcessingMode)) {
            $json['completion_processing_mode'] = $this->completionProcessingMode;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

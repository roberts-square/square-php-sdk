<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Request object for the UpdateQuestion endpoint.
 */
class UpdateQuestionRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $response;

    /**
     * Returns Response.
     * A response to the question in the relevant format:
     * Responses to text prompts are provided as free form text. Responses to
     * multiple-choice questions are provided as a single option key
     * (single-selection) or comma-separated list of option keys (multi-selection).
     */
    public function getResponse(): ?string
    {
        return $this->response;
    }

    /**
     * Sets Response.
     * A response to the question in the relevant format:
     * Responses to text prompts are provided as free form text. Responses to
     * multiple-choice questions are provided as a single option key
     * (single-selection) or comma-separated list of option keys (multi-selection).
     *
     * @maps response
     */
    public function setResponse(?string $response): void
    {
        $this->response = $response;
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
        if (isset($this->response)) {
            $json['response'] = $this->response;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

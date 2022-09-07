<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Request object for the GetVerificationQuestions endpoint.
 */
class GetVerificationQuestionsRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $locale;

    /**
     * Returns Locale.
     * Indicates the desired language for the question prompt (based on
     * region).
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * Sets Locale.
     * Indicates the desired language for the question prompt (based on
     * region).
     *
     * @maps locale
     */
    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
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
        if (isset($this->locale)) {
            $json['locale'] = $this->locale;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

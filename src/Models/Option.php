<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class Option implements \JsonSerializable
{
    /**
     * @var string
     */
    private $optionKey;

    /**
     * @var string
     */
    private $optionName;

    /**
     * @param string $optionKey
     * @param string $optionName
     */
    public function __construct(string $optionKey, string $optionName)
    {
        $this->optionKey = $optionKey;
        $this->optionName = $optionName;
    }

    /**
     * Returns Option Key.
     * A string that uniquely identifies the option within the set of
     * available options for a given question.
     */
    public function getOptionKey(): string
    {
        return $this->optionKey;
    }

    /**
     * Sets Option Key.
     * A string that uniquely identifies the option within the set of
     * available options for a given question.
     *
     * @required
     * @maps option_key
     */
    public function setOptionKey(string $optionKey): void
    {
        $this->optionKey = $optionKey;
    }

    /**
     * Returns Option Name.
     * Human-readable text that explains the intended meaning of the option.
     */
    public function getOptionName(): string
    {
        return $this->optionName;
    }

    /**
     * Sets Option Name.
     * Human-readable text that explains the intended meaning of the option.
     *
     * @required
     * @maps option_name
     */
    public function setOptionName(string $optionName): void
    {
        $this->optionName = $optionName;
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
        $json['option_key']  = $this->optionKey;
        $json['option_name'] = $this->optionName;
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

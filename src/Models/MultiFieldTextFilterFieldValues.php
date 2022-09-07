<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Specifies how each attribute should be considered when filtering.
 */
class MultiFieldTextFilterFieldValues implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $any;

    /**
     * @var string[]|null
     */
    private $all;

    /**
     * @var string[]|null
     */
    private $none;

    /**
     * Returns Any.
     * Search text must appear in any of these attributes.
     * See [SearchField](#type-searchfield) for possible values
     *
     * @return string[]|null
     */
    public function getAny(): ?array
    {
        return $this->any;
    }

    /**
     * Sets Any.
     * Search text must appear in any of these attributes.
     * See [SearchField](#type-searchfield) for possible values
     *
     * @maps any
     *
     * @param string[]|null $any
     */
    public function setAny(?array $any): void
    {
        $this->any = $any;
    }

    /**
     * Returns All.
     * Search text must appear in all of these attributes.
     * See [SearchField](#type-searchfield) for possible values
     *
     * @return string[]|null
     */
    public function getAll(): ?array
    {
        return $this->all;
    }

    /**
     * Sets All.
     * Search text must appear in all of these attributes.
     * See [SearchField](#type-searchfield) for possible values
     *
     * @maps all
     *
     * @param string[]|null $all
     */
    public function setAll(?array $all): void
    {
        $this->all = $all;
    }

    /**
     * Returns None.
     * Search text must appear in none of these attributes.
     * See [SearchField](#type-searchfield) for possible values
     *
     * @return string[]|null
     */
    public function getNone(): ?array
    {
        return $this->none;
    }

    /**
     * Sets None.
     * Search text must appear in none of these attributes.
     * See [SearchField](#type-searchfield) for possible values
     *
     * @maps none
     *
     * @param string[]|null $none
     */
    public function setNone(?array $none): void
    {
        $this->none = $none;
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
        if (isset($this->any)) {
            $json['any']  = $this->any;
        }
        if (isset($this->all)) {
            $json['all']  = $this->all;
        }
        if (isset($this->none)) {
            $json['none'] = $this->none;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

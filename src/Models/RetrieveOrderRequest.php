<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class RetrieveOrderRequest implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $resolveReturns;

    /**
     * Returns Resolve Returns.
     * Whether to make pending returns look like they happened surfacing from reservations
     */
    public function getResolveReturns(): ?bool
    {
        return $this->resolveReturns;
    }

    /**
     * Sets Resolve Returns.
     * Whether to make pending returns look like they happened surfacing from reservations
     *
     * @maps resolve_returns
     */
    public function setResolveReturns(?bool $resolveReturns): void
    {
        $this->resolveReturns = $resolveReturns;
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
        if (isset($this->resolveReturns)) {
            $json['resolve_returns'] = $this->resolveReturns;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

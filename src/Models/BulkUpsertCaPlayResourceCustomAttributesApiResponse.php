<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a response from a bulk upsert request containing the upsert responses.
 */
class BulkUpsertCaPlayResourceCustomAttributesApiResponse implements \JsonSerializable
{
    /**
     * @var array<string,CustomAttribute>
     */
    private $values;

    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * @param array<string,CustomAttribute> $values
     */
    public function __construct(array $values)
    {
        $this->values = $values;
    }

    /**
     * Returns Values.
     * The responses for the `CustomAttribute` delete requests.
     * The keys correspond to the keys used in the request.
     *
     * @return array<string,CustomAttribute>
     */
    public function getValues(): array
    {
        return $this->values;
    }

    /**
     * Sets Values.
     * The responses for the `CustomAttribute` delete requests.
     * The keys correspond to the keys used in the request.
     *
     * @required
     * @maps values
     *
     * @param array<string,CustomAttribute> $values
     */
    public function setValues(array $values): void
    {
        $this->values = $values;
    }

    /**
     * Returns Errors.
     * The errors that occurred during the request.
     *
     * @return Error[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     * The errors that occurred during the request.
     *
     * @maps errors
     *
     * @param Error[]|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
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
        $json['values']     = $this->values;
        if (isset($this->errors)) {
            $json['errors'] = $this->errors;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

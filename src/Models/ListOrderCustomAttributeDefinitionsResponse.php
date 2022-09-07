<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a response from a list request containing a list of `CustomAttributeDefinition` objects.
 */
class ListOrderCustomAttributeDefinitionsResponse implements \JsonSerializable
{
    /**
     * @var CustomAttributeDefinition[]
     */
    private $customAttributeDefinitions;

    /**
     * @var string|null
     */
    private $cursor;

    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * @param CustomAttributeDefinition[] $customAttributeDefinitions
     */
    public function __construct(array $customAttributeDefinitions)
    {
        $this->customAttributeDefinitions = $customAttributeDefinitions;
    }

    /**
     * Returns Custom Attribute Definitions.
     * The list of `CustomAttributeDefinition` objects.
     *
     * @return CustomAttributeDefinition[]
     */
    public function getCustomAttributeDefinitions(): array
    {
        return $this->customAttributeDefinitions;
    }

    /**
     * Sets Custom Attribute Definitions.
     * The list of `CustomAttributeDefinition` objects.
     *
     * @required
     * @maps custom_attribute_definitions
     *
     * @param CustomAttributeDefinition[] $customAttributeDefinitions
     */
    public function setCustomAttributeDefinitions(array $customAttributeDefinitions): void
    {
        $this->customAttributeDefinitions = $customAttributeDefinitions;
    }

    /**
     * Returns Cursor.
     * A pagination cursor to retrieve the next set of results for the
     * original query. A cursor is only present if the request succeeded and additional results
     * are available.
     * For more information, see [Pagination](https://developer.squareup.com/docs/working-with-
     * apis/pagination).
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }

    /**
     * Sets Cursor.
     * A pagination cursor to retrieve the next set of results for the
     * original query. A cursor is only present if the request succeeded and additional results
     * are available.
     * For more information, see [Pagination](https://developer.squareup.com/docs/working-with-
     * apis/pagination).
     *
     * @maps cursor
     */
    public function setCursor(?string $cursor): void
    {
        $this->cursor = $cursor;
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
        $json['custom_attribute_definitions'] = $this->customAttributeDefinitions;
        if (isset($this->cursor)) {
            $json['cursor']                   = $this->cursor;
        }
        if (isset($this->errors)) {
            $json['errors']                   = $this->errors;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

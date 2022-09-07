<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class SearchDiscountCodesResponse implements \JsonSerializable
{
    /**
     * @var DiscountCode[]|null
     */
    private $discountCodes;

    /**
     * @var string|null
     */
    private $cursor;

    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * Returns Discount Codes.
     * The `DiscountCode` returned.
     *
     * @return DiscountCode[]|null
     */
    public function getDiscountCodes(): ?array
    {
        return $this->discountCodes;
    }

    /**
     * Sets Discount Codes.
     * The `DiscountCode` returned.
     *
     * @maps discount_codes
     *
     * @param DiscountCode[]|null $discountCodes
     */
    public function setDiscountCodes(?array $discountCodes): void
    {
        $this->discountCodes = $discountCodes;
    }

    /**
     * Returns Cursor.
     * When a response is truncated, it includes a cursor that you can use in a
     * subsequent request to fetch the next set of events. If it is empty, this is
     * the final response.
     *
     * For more information, see [Pagination](https://developer.squareup.com/docs/working-with-
     * apis/pagination).
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }

    /**
     * Sets Cursor.
     * When a response is truncated, it includes a cursor that you can use in a
     * subsequent request to fetch the next set of events. If it is empty, this is
     * the final response.
     *
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
     * Any errors that occurred during the request.
     *
     * @return Error[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     * Any errors that occurred during the request.
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
        if (isset($this->discountCodes)) {
            $json['discount_codes'] = $this->discountCodes;
        }
        if (isset($this->cursor)) {
            $json['cursor']         = $this->cursor;
        }
        if (isset($this->errors)) {
            $json['errors']         = $this->errors;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

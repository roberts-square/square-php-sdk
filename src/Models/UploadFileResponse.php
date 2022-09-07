<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Response object for requests to the UploadFile endpoint.
 */
class UploadFileResponse implements \JsonSerializable
{
    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * @var FileUpload|null
     */
    private $fileUpload;

    /**
     * Returns Errors.
     * Information on errors encountered during the request. Only set if the
     * call fails.
     *
     * @return Error[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     * Information on errors encountered during the request. Only set if the
     * call fails.
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
     * Returns File Upload.
     * Represents a file uploaded as part of a response to a verification question.
     */
    public function getFileUpload(): ?FileUpload
    {
        return $this->fileUpload;
    }

    /**
     * Sets File Upload.
     * Represents a file uploaded as part of a response to a verification question.
     *
     * @maps file_upload
     */
    public function setFileUpload(?FileUpload $fileUpload): void
    {
        $this->fileUpload = $fileUpload;
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
        if (isset($this->errors)) {
            $json['errors']      = $this->errors;
        }
        if (isset($this->fileUpload)) {
            $json['file_upload'] = $this->fileUpload;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

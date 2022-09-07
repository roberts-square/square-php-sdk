<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a file uploaded as part of a response to a verification question.
 */
class FileUpload implements \JsonSerializable
{
    /**
     * @var string
     */
    private $fileName;

    /**
     * @var string
     */
    private $fileId;

    /**
     * @param string $fileName
     * @param string $fileId
     */
    public function __construct(string $fileName, string $fileId)
    {
        $this->fileName = $fileName;
        $this->fileId = $fileId;
    }

    /**
     * Returns File Name.
     * Name of the file.
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * Sets File Name.
     * Name of the file.
     *
     * @required
     * @maps file_name
     */
    public function setFileName(string $fileName): void
    {
        $this->fileName = $fileName;
    }

    /**
     * Returns File Id.
     * Unique identifier for this `FileUpload`.
     */
    public function getFileId(): string
    {
        return $this->fileId;
    }

    /**
     * Sets File Id.
     * Unique identifier for this `FileUpload`.
     *
     * @required
     * @maps file_id
     */
    public function setFileId(string $fileId): void
    {
        $this->fileId = $fileId;
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
        $json['file_name'] = $this->fileName;
        $json['file_id']   = $this->fileId;
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

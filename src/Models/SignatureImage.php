<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class SignatureImage implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $imageType;

    /**
     * @var string|null
     */
    private $data;

    /**
     * Returns Id.
     * An identifier for the signature image.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * An identifier for the signature image.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Image Type.
     * The mime/type of the image data.
     * Use `image/png;base64` for png.
     * Use `image/svg+xml` for SVG.
     */
    public function getImageType(): ?string
    {
        return $this->imageType;
    }

    /**
     * Sets Image Type.
     * The mime/type of the image data.
     * Use `image/png;base64` for png.
     * Use `image/svg+xml` for SVG.
     *
     * @maps image_type
     */
    public function setImageType(?string $imageType): void
    {
        $this->imageType = $imageType;
    }

    /**
     * Returns Data.
     * The text representation of the image_type format. If the image type is base64,
     * this field contains the base64 representation of the image. If the image format is already text,
     * then this field contains the raw content.
     */
    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * Sets Data.
     * The text representation of the image_type format. If the image type is base64,
     * this field contains the base64 representation of the image. If the image format is already text,
     * then this field contains the raw content.
     *
     * @maps data
     */
    public function setData(?string $data): void
    {
        $this->data = $data;
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
        if (isset($this->id)) {
            $json['id']         = $this->id;
        }
        if (isset($this->imageType)) {
            $json['image_type'] = $this->imageType;
        }
        if (isset($this->data)) {
            $json['data']       = $this->data;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

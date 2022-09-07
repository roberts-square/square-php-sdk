<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class OrderVoidVoidReason implements \JsonSerializable
{
    /**
     * @var string
     */
    private $catalogObjectId;

    /**
     * @var int|null
     */
    private $catalogVersion;

    /**
     * @var string
     */
    private $reasonDetail;

    /**
     * @param string $catalogObjectId
     * @param string $reasonDetail
     */
    public function __construct(string $catalogObjectId, string $reasonDetail)
    {
        $this->catalogObjectId = $catalogObjectId;
        $this->reasonDetail = $reasonDetail;
    }

    /**
     * Returns Catalog Object Id.
     * The ID for the void reason's catalog record.
     */
    public function getCatalogObjectId(): string
    {
        return $this->catalogObjectId;
    }

    /**
     * Sets Catalog Object Id.
     * The ID for the void reason's catalog record.
     *
     * @required
     * @maps catalog_object_id
     */
    public function setCatalogObjectId(string $catalogObjectId): void
    {
        $this->catalogObjectId = $catalogObjectId;
    }

    /**
     * Returns Catalog Version.
     * The version of the catalog object that this void reason references.
     */
    public function getCatalogVersion(): ?int
    {
        return $this->catalogVersion;
    }

    /**
     * Sets Catalog Version.
     * The version of the catalog object that this void reason references.
     *
     * @maps catalog_version
     */
    public function setCatalogVersion(?int $catalogVersion): void
    {
        $this->catalogVersion = $catalogVersion;
    }

    /**
     * Returns Reason Detail.
     * The human-readable text indicating the reason why this void operation was performed.
     */
    public function getReasonDetail(): string
    {
        return $this->reasonDetail;
    }

    /**
     * Sets Reason Detail.
     * The human-readable text indicating the reason why this void operation was performed.
     *
     * @required
     * @maps reason_detail
     */
    public function setReasonDetail(string $reasonDetail): void
    {
        $this->reasonDetail = $reasonDetail;
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
        $json['catalog_object_id']   = $this->catalogObjectId;
        if (isset($this->catalogVersion)) {
            $json['catalog_version'] = $this->catalogVersion;
        }
        $json['reason_detail']       = $this->reasonDetail;
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

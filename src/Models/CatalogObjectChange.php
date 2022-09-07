<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class CatalogObjectChange implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $objectId;

    /**
     * @var string|null
     */
    private $latestName;

    /**
     * @var string|null
     */
    private $objectType;

    /**
     * @var string|null
     */
    private $parentId;

    /**
     * @var string|null
     */
    private $parentLatestName;

    /**
     * @var bool|null
     */
    private $createdByUpdate;

    /**
     * @var bool|null
     */
    private $deletedByUpdate;

    /**
     * @var CatalogAttributeChange[]|null
     */
    private $attributeChanges;

    /**
     * Returns Object Id.
     * The object ID of any type of CatalogObjects for
     * which history should be retrieved.
     */
    public function getObjectId(): ?string
    {
        return $this->objectId;
    }

    /**
     * Sets Object Id.
     * The object ID of any type of CatalogObjects for
     * which history should be retrieved.
     *
     * @maps object_id
     */
    public function setObjectId(?string $objectId): void
    {
        $this->objectId = $objectId;
    }

    /**
     * Returns Latest Name.
     * Current name of the object in the merchant's catalog (not necessarily the name at the time of the
     * change).
     * If the object is deleted, this is the name of the object at time of deletion.
     */
    public function getLatestName(): ?string
    {
        return $this->latestName;
    }

    /**
     * Sets Latest Name.
     * Current name of the object in the merchant's catalog (not necessarily the name at the time of the
     * change).
     * If the object is deleted, this is the name of the object at time of deletion.
     *
     * @maps latest_name
     */
    public function setLatestName(?string $latestName): void
    {
        $this->latestName = $latestName;
    }

    /**
     * Returns Object Type.
     * Possible types of CatalogObjects returned from the catalog, each
     * containing type-specific properties in the `*_data` field corresponding to the specfied object type.
     */
    public function getObjectType(): ?string
    {
        return $this->objectType;
    }

    /**
     * Sets Object Type.
     * Possible types of CatalogObjects returned from the catalog, each
     * containing type-specific properties in the `*_data` field corresponding to the specfied object type.
     *
     * @maps object_type
     */
    public function setObjectType(?string $objectType): void
    {
        $this->objectType = $objectType;
    }

    /**
     * Returns Parent Id.
     * The object ID of the parent CatalogObject of the affected object. For CatalogItemVariations,
     * this is the ID of the CatalogItem. For CatalogModifiers, this is the ID of the CatalogModifierList.
     */
    public function getParentId(): ?string
    {
        return $this->parentId;
    }

    /**
     * Sets Parent Id.
     * The object ID of the parent CatalogObject of the affected object. For CatalogItemVariations,
     * this is the ID of the CatalogItem. For CatalogModifiers, this is the ID of the CatalogModifierList.
     *
     * @maps parent_id
     */
    public function setParentId(?string $parentId): void
    {
        $this->parentId = $parentId;
    }

    /**
     * Returns Parent Latest Name.
     * The latest name of the parent of the affected object. or CatalogItemVariations, this is the name of
     * the CatalogItem.
     * For CatalogModifiers, this is the ID of the CatalogModifierList.
     */
    public function getParentLatestName(): ?string
    {
        return $this->parentLatestName;
    }

    /**
     * Sets Parent Latest Name.
     * The latest name of the parent of the affected object. or CatalogItemVariations, this is the name of
     * the CatalogItem.
     * For CatalogModifiers, this is the ID of the CatalogModifierList.
     *
     * @maps parent_latest_name
     */
    public function setParentLatestName(?string $parentLatestName): void
    {
        $this->parentLatestName = $parentLatestName;
    }

    /**
     * Returns Created by Update.
     * Boolean describing whether or not the object was created by this update.
     */
    public function getCreatedByUpdate(): ?bool
    {
        return $this->createdByUpdate;
    }

    /**
     * Sets Created by Update.
     * Boolean describing whether or not the object was created by this update.
     *
     * @maps created_by_update
     */
    public function setCreatedByUpdate(?bool $createdByUpdate): void
    {
        $this->createdByUpdate = $createdByUpdate;
    }

    /**
     * Returns Deleted by Update.
     * Boolean describing whether or not the object was deleted by this update.
     */
    public function getDeletedByUpdate(): ?bool
    {
        return $this->deletedByUpdate;
    }

    /**
     * Sets Deleted by Update.
     * Boolean describing whether or not the object was deleted by this update.
     *
     * @maps deleted_by_update
     */
    public function setDeletedByUpdate(?bool $deletedByUpdate): void
    {
        $this->deletedByUpdate = $deletedByUpdate;
    }

    /**
     * Returns Attribute Changes.
     * The set of [CatalogAttributeChange]($m/CatalogAttributeChange)s included in this Catalog Object
     * Change.
     *
     * @return CatalogAttributeChange[]|null
     */
    public function getAttributeChanges(): ?array
    {
        return $this->attributeChanges;
    }

    /**
     * Sets Attribute Changes.
     * The set of [CatalogAttributeChange]($m/CatalogAttributeChange)s included in this Catalog Object
     * Change.
     *
     * @maps attribute_changes
     *
     * @param CatalogAttributeChange[]|null $attributeChanges
     */
    public function setAttributeChanges(?array $attributeChanges): void
    {
        $this->attributeChanges = $attributeChanges;
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
        if (isset($this->objectId)) {
            $json['object_id']          = $this->objectId;
        }
        if (isset($this->latestName)) {
            $json['latest_name']        = $this->latestName;
        }
        if (isset($this->objectType)) {
            $json['object_type']        = $this->objectType;
        }
        if (isset($this->parentId)) {
            $json['parent_id']          = $this->parentId;
        }
        if (isset($this->parentLatestName)) {
            $json['parent_latest_name'] = $this->parentLatestName;
        }
        if (isset($this->createdByUpdate)) {
            $json['created_by_update']  = $this->createdByUpdate;
        }
        if (isset($this->deletedByUpdate)) {
            $json['deleted_by_update']  = $this->deletedByUpdate;
        }
        if (isset($this->attributeChanges)) {
            $json['attribute_changes']  = $this->attributeChanges;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

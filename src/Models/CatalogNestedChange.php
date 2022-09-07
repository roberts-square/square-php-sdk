<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Details of a change to a nested field of a CatalogObject.
 */
class CatalogNestedChange implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

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
     * @var string|null
     */
    private $latestName;

    /**
     * Returns Id.
     * The unique identifier for an entry in the list of CatalogNestedChanges.
     * It can be either `location_id`, `tax_id`, `modifier_id` or `modifier_list_id`.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The unique identifier for an entry in the list of CatalogNestedChanges.
     * It can be either `location_id`, `tax_id`, `modifier_id` or `modifier_list_id`.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Created by Update.
     * Boolean describing whether or not the nested object was created by this update.
     */
    public function getCreatedByUpdate(): ?bool
    {
        return $this->createdByUpdate;
    }

    /**
     * Sets Created by Update.
     * Boolean describing whether or not the nested object was created by this update.
     *
     * @maps created_by_update
     */
    public function setCreatedByUpdate(?bool $createdByUpdate): void
    {
        $this->createdByUpdate = $createdByUpdate;
    }

    /**
     * Returns Deleted by Update.
     * Boolean describing whether or not the nested object was deleted by this update.
     */
    public function getDeletedByUpdate(): ?bool
    {
        return $this->deletedByUpdate;
    }

    /**
     * Sets Deleted by Update.
     * Boolean describing whether or not the nested object was deleted by this update.
     *
     * @maps deleted_by_update
     */
    public function setDeletedByUpdate(?bool $deletedByUpdate): void
    {
        $this->deletedByUpdate = $deletedByUpdate;
    }

    /**
     * Returns Attribute Changes.
     * The set of [CatalogAttributeChange]($m/CatalogAttributeChange)s included in the nested object.
     *
     * @return CatalogAttributeChange[]|null
     */
    public function getAttributeChanges(): ?array
    {
        return $this->attributeChanges;
    }

    /**
     * Sets Attribute Changes.
     * The set of [CatalogAttributeChange]($m/CatalogAttributeChange)s included in the nested object.
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
     * Returns Latest Name.
     * Current name of the CatalogObject that is related to the nested change.
     * If the object is deleted, this is the name at the time of deletion.
     * For example, if this nested change is a tax ID on an item, the name is the latest name of the tax.
     */
    public function getLatestName(): ?string
    {
        return $this->latestName;
    }

    /**
     * Sets Latest Name.
     * Current name of the CatalogObject that is related to the nested change.
     * If the object is deleted, this is the name at the time of deletion.
     * For example, if this nested change is a tax ID on an item, the name is the latest name of the tax.
     *
     * @maps latest_name
     */
    public function setLatestName(?string $latestName): void
    {
        $this->latestName = $latestName;
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
            $json['id']                = $this->id;
        }
        if (isset($this->createdByUpdate)) {
            $json['created_by_update'] = $this->createdByUpdate;
        }
        if (isset($this->deletedByUpdate)) {
            $json['deleted_by_update'] = $this->deletedByUpdate;
        }
        if (isset($this->attributeChanges)) {
            $json['attribute_changes'] = $this->attributeChanges;
        }
        if (isset($this->latestName)) {
            $json['latest_name']       = $this->latestName;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

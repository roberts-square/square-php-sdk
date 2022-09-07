<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * The `GiftCardOffer` resource that is an abstraction of the seller offering digital gift cards.
 */
class GiftCardOffer implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $image;

    /**
     * @var string|null
     */
    private $url;

    /**
     * Returns Id.
     * The unique ID for the offer.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The unique ID for the offer.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Name.
     * The name of the offer.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the offer.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Image.
     * The image URL for the digital gift card.
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * Sets Image.
     * The image URL for the digital gift card.
     *
     * @maps image
     */
    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    /**
     * Returns Url.
     * The URL of the gift card order page. The URL returned is different for each application.
     * It is appended with additional data to identify which third-party developer application
     * led a user here.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     * The URL of the gift card order page. The URL returned is different for each application.
     * It is appended with additional data to identify which third-party developer application
     * led a user here.
     *
     * @maps url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
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
            $json['id']    = $this->id;
        }
        if (isset($this->name)) {
            $json['name']  = $this->name;
        }
        if (isset($this->image)) {
            $json['image'] = $this->image;
        }
        if (isset($this->url)) {
            $json['url']   = $this->url;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Request object to the [SetupMerchant]($e/Merchants/SetupMerchant) endpoint.
 */
class SetupMerchantRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $firstName;

    /**
     * @var string|null
     */
    private $lastName;

    /**
     * @var string|null
     */
    private $businessName;

    /**
     * @var string|null
     */
    private $country;

    /**
     * @var string|null
     */
    private $timezone;

    /**
     * @var string|null
     */
    private $languageCode;

    /**
     * @var string[]|null
     */
    private $oauthScope;

    /**
     * Returns Email.
     * The email address of the business owner.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Sets Email.
     * The email address of the business owner.
     *
     * @maps email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * Returns First Name.
     * The first name of the business owner.
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Sets First Name.
     * The first name of the business owner.
     *
     * @maps first_name
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns Last Name.
     * The last name of the business owner.
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Sets Last Name.
     * The last name of the business owner.
     *
     * @maps last_name
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns Business Name.
     * The name of the business.
     */
    public function getBusinessName(): ?string
    {
        return $this->businessName;
    }

    /**
     * Sets Business Name.
     * The name of the business.
     *
     * @maps business_name
     */
    public function setBusinessName(?string $businessName): void
    {
        $this->businessName = $businessName;
    }

    /**
     * Returns Country.
     * Indicates the country associated with another entity, such as a business.
     * Values are in [ISO 3166-1-alpha-2 format](http://www.iso.org/iso/home/standards/country_codes.htm).
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     * Indicates the country associated with another entity, such as a business.
     * Values are in [ISO 3166-1-alpha-2 format](http://www.iso.org/iso/home/standards/country_codes.htm).
     *
     * @maps country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * Returns Timezone.
     * The timezone for the business, in IANA format.
     */
    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    /**
     * Sets Timezone.
     * The timezone for the business, in IANA format.
     *
     * @maps timezone
     */
    public function setTimezone(?string $timezone): void
    {
        $this->timezone = $timezone;
    }

    /**
     * Returns Language Code.
     * The language associated with the merchant account in BCP 47 format.
     */
    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    /**
     * Sets Language Code.
     * The language associated with the merchant account in BCP 47 format.
     *
     * @maps language_code
     */
    public function setLanguageCode(?string $languageCode): void
    {
        $this->languageCode = $languageCode;
    }

    /**
     * Returns Oauth Scope.
     * The list of permissions to grant in the new OAuth session in the response.
     *
     * @return string[]|null
     */
    public function getOauthScope(): ?array
    {
        return $this->oauthScope;
    }

    /**
     * Sets Oauth Scope.
     * The list of permissions to grant in the new OAuth session in the response.
     *
     * @maps oauth_scope
     *
     * @param string[]|null $oauthScope
     */
    public function setOauthScope(?array $oauthScope): void
    {
        $this->oauthScope = $oauthScope;
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
        if (isset($this->email)) {
            $json['email']         = $this->email;
        }
        if (isset($this->firstName)) {
            $json['first_name']    = $this->firstName;
        }
        if (isset($this->lastName)) {
            $json['last_name']     = $this->lastName;
        }
        if (isset($this->businessName)) {
            $json['business_name'] = $this->businessName;
        }
        if (isset($this->country)) {
            $json['country']       = $this->country;
        }
        if (isset($this->timezone)) {
            $json['timezone']      = $this->timezone;
        }
        if (isset($this->languageCode)) {
            $json['language_code'] = $this->languageCode;
        }
        if (isset($this->oauthScope)) {
            $json['oauth_scope']   = $this->oauthScope;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

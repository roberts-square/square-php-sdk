<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Response object returned by the [SetupMerchant]($e/Merchants/SetupMerchant) endpoint.
 */
class SetupMerchantResponse implements \JsonSerializable
{
    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * @var Merchant|null
     */
    private $merchant;

    /**
     * @var Location|null
     */
    private $location;

    /**
     * @var Employee|null
     */
    private $employee;

    /**
     * @var string|null
     */
    private $accessToken;

    /**
     * @var string|null
     */
    private $refreshToken;

    /**
     * @var string|null
     */
    private $accessTokenExpiresAt;

    /**
     * @var bool|null
     */
    private $existingMerchant;

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
     * Returns Merchant.
     * Represents a business that sells with Square.
     */
    public function getMerchant(): ?Merchant
    {
        return $this->merchant;
    }

    /**
     * Sets Merchant.
     * Represents a business that sells with Square.
     *
     * @maps merchant
     */
    public function setMerchant(?Merchant $merchant): void
    {
        $this->merchant = $merchant;
    }

    /**
     * Returns Location.
     * Represents one of a business' [locations](https://developer.squareup.com/docs/locations-api).
     */
    public function getLocation(): ?Location
    {
        return $this->location;
    }

    /**
     * Sets Location.
     * Represents one of a business' [locations](https://developer.squareup.com/docs/locations-api).
     *
     * @maps location
     */
    public function setLocation(?Location $location): void
    {
        $this->location = $location;
    }

    /**
     * Returns Employee.
     * An employee object that is used by the external API.
     */
    public function getEmployee(): ?Employee
    {
        return $this->employee;
    }

    /**
     * Sets Employee.
     * An employee object that is used by the external API.
     *
     * @maps employee
     */
    public function setEmployee(?Employee $employee): void
    {
        $this->employee = $employee;
    }

    /**
     * Returns Access Token.
     * Your application's access token. You provide this token in a header with every request to Connect
     * API endpoints.
     * See [Request and response headers](https://docs.connect.squareup.
     * com/api/connect/v2/#requestandresponseheaders)
     * for the format of this header.
     */
    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    /**
     * Sets Access Token.
     * Your application's access token. You provide this token in a header with every request to Connect
     * API endpoints.
     * See [Request and response headers](https://docs.connect.squareup.
     * com/api/connect/v2/#requestandresponseheaders)
     * for the format of this header.
     *
     * @maps access_token
     */
    public function setAccessToken(?string $accessToken): void
    {
        $this->accessToken = $accessToken;
    }

    /**
     * Returns Refresh Token.
     * Your application's refresh token. You use this credential to generate new access tokens once the
     * initial one expires.
     */
    public function getRefreshToken(): ?string
    {
        return $this->refreshToken;
    }

    /**
     * Sets Refresh Token.
     * Your application's refresh token. You use this credential to generate new access tokens once the
     * initial one expires.
     *
     * @maps refresh_token
     */
    public function setRefreshToken(?string $refreshToken): void
    {
        $this->refreshToken = $refreshToken;
    }

    /**
     * Returns Access Token Expires At.
     * The date when access_token expires, in [ISO 8601](http://www.iso.org/iso/home/standards/iso8601.htm)
     * format.
     */
    public function getAccessTokenExpiresAt(): ?string
    {
        return $this->accessTokenExpiresAt;
    }

    /**
     * Sets Access Token Expires At.
     * The date when access_token expires, in [ISO 8601](http://www.iso.org/iso/home/standards/iso8601.htm)
     * format.
     *
     * @maps access_token_expires_at
     */
    public function setAccessTokenExpiresAt(?string $accessTokenExpiresAt): void
    {
        $this->accessTokenExpiresAt = $accessTokenExpiresAt;
    }

    /**
     * Returns Existing Merchant.
     * After creating a merchant, if you send a request with the same
     * first name, last name, and email, the response sets this flag to true and
     * returns the previously created `Merchant`, `Location`, and `Employee` in the response.
     */
    public function getExistingMerchant(): ?bool
    {
        return $this->existingMerchant;
    }

    /**
     * Sets Existing Merchant.
     * After creating a merchant, if you send a request with the same
     * first name, last name, and email, the response sets this flag to true and
     * returns the previously created `Merchant`, `Location`, and `Employee` in the response.
     *
     * @maps existing_merchant
     */
    public function setExistingMerchant(?bool $existingMerchant): void
    {
        $this->existingMerchant = $existingMerchant;
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
            $json['errors']                  = $this->errors;
        }
        if (isset($this->merchant)) {
            $json['merchant']                = $this->merchant;
        }
        if (isset($this->location)) {
            $json['location']                = $this->location;
        }
        if (isset($this->employee)) {
            $json['employee']                = $this->employee;
        }
        if (isset($this->accessToken)) {
            $json['access_token']            = $this->accessToken;
        }
        if (isset($this->refreshToken)) {
            $json['refresh_token']           = $this->refreshToken;
        }
        if (isset($this->accessTokenExpiresAt)) {
            $json['access_token_expires_at'] = $this->accessTokenExpiresAt;
        }
        if (isset($this->existingMerchant)) {
            $json['existing_merchant']       = $this->existingMerchant;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

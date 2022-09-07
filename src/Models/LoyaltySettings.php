<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

class LoyaltySettings implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $showLoyaltyScreen;

    /**
     * @var bool|null
     */
    private $showNonQualifyingLoyaltyScreen;

    /**
     * @var string|null
     */
    private $loyaltyScreenMaxDisplayDuration;

    /**
     * @var bool|null
     */
    private $showCardLinkedRewardRedemptionScreen;

    /**
     * Returns Show Loyalty Screen.
     * Override device settings for display of the loyalty screen.
     * Defaults to false.
     */
    public function getShowLoyaltyScreen(): ?bool
    {
        return $this->showLoyaltyScreen;
    }

    /**
     * Sets Show Loyalty Screen.
     * Override device settings for display of the loyalty screen.
     * Defaults to false.
     *
     * @maps show_loyalty_screen
     */
    public function setShowLoyaltyScreen(?bool $showLoyaltyScreen): void
    {
        $this->showLoyaltyScreen = $showLoyaltyScreen;
    }

    /**
     * Returns Show Non Qualifying Loyalty Screen.
     * Override device settings for display of the non-qualifying loyalty screen.
     * Defaults to false.
     */
    public function getShowNonQualifyingLoyaltyScreen(): ?bool
    {
        return $this->showNonQualifyingLoyaltyScreen;
    }

    /**
     * Sets Show Non Qualifying Loyalty Screen.
     * Override device settings for display of the non-qualifying loyalty screen.
     * Defaults to false.
     *
     * @maps show_non_qualifying_loyalty_screen
     */
    public function setShowNonQualifyingLoyaltyScreen(?bool $showNonQualifyingLoyaltyScreen): void
    {
        $this->showNonQualifyingLoyaltyScreen = $showNonQualifyingLoyaltyScreen;
    }

    /**
     * Returns Loyalty Screen Max Display Duration.
     * The timeout after which the loyalty screen should exit due to inactivity, expressed as
     * an RFC 3339 duration.
     * Default: 60 seconds from the beginning of the display of the loyalty screen.
     * Maximum: 90 seconds.
     */
    public function getLoyaltyScreenMaxDisplayDuration(): ?string
    {
        return $this->loyaltyScreenMaxDisplayDuration;
    }

    /**
     * Sets Loyalty Screen Max Display Duration.
     * The timeout after which the loyalty screen should exit due to inactivity, expressed as
     * an RFC 3339 duration.
     * Default: 60 seconds from the beginning of the display of the loyalty screen.
     * Maximum: 90 seconds.
     *
     * @maps loyalty_screen_max_display_duration
     */
    public function setLoyaltyScreenMaxDisplayDuration(?string $loyaltyScreenMaxDisplayDuration): void
    {
        $this->loyaltyScreenMaxDisplayDuration = $loyaltyScreenMaxDisplayDuration;
    }

    /**
     * Returns Show Card Linked Reward Redemption Screen.
     * Override device settings for display of card linked reward redemption screen.
     * Defaults to false.
     */
    public function getShowCardLinkedRewardRedemptionScreen(): ?bool
    {
        return $this->showCardLinkedRewardRedemptionScreen;
    }

    /**
     * Sets Show Card Linked Reward Redemption Screen.
     * Override device settings for display of card linked reward redemption screen.
     * Defaults to false.
     *
     * @maps show_card_linked_reward_redemption_screen
     */
    public function setShowCardLinkedRewardRedemptionScreen(?bool $showCardLinkedRewardRedemptionScreen): void
    {
        $this->showCardLinkedRewardRedemptionScreen = $showCardLinkedRewardRedemptionScreen;
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
        if (isset($this->showLoyaltyScreen)) {
            $json['show_loyalty_screen']                       = $this->showLoyaltyScreen;
        }
        if (isset($this->showNonQualifyingLoyaltyScreen)) {
            $json['show_non_qualifying_loyalty_screen']        = $this->showNonQualifyingLoyaltyScreen;
        }
        if (isset($this->loyaltyScreenMaxDisplayDuration)) {
            $json['loyalty_screen_max_display_duration']       = $this->loyaltyScreenMaxDisplayDuration;
        }
        if (isset($this->showCardLinkedRewardRedemptionScreen)) {
            $json['show_card_linked_reward_redemption_screen'] = $this->showCardLinkedRewardRedemptionScreen;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

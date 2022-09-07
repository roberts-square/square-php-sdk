<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a tender (i.e., a method of payment) used in a Square transaction.
 */
class Tender implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $locationId;

    /**
     * @var string|null
     */
    private $transactionId;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $note;

    /**
     * @var Money|null
     */
    private $amountMoney;

    /**
     * @var Money|null
     */
    private $tipMoney;

    /**
     * @var Money|null
     */
    private $processingFeeMoney;

    /**
     * @var string|null
     */
    private $customerId;

    /**
     * @var string
     */
    private $type;

    /**
     * @var TenderCardDetails|null
     */
    private $cardDetails;

    /**
     * @var TenderCashDetails|null
     */
    private $cashDetails;

    /**
     * @var TenderBankAccountDetails|null
     */
    private $bankAccountDetails;

    /**
     * @var TenderDigitalWalletDetails|null
     */
    private $walletDetails;

    /**
     * @var TenderBuyNowPayLaterDetails|null
     */
    private $buyNowPayLaterDetails;

    /**
     * @var TenderSquareAccountDetails|null
     */
    private $squareAccountDetails;

    /**
     * @var AdditionalRecipient[]|null
     */
    private $additionalRecipients;

    /**
     * @var TenderPaymentSource|null
     */
    private $source;

    /**
     * @var string|null
     */
    private $paymentId;

    /**
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * Returns Id.
     * The tender's unique ID. It is the associated payment ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The tender's unique ID. It is the associated payment ID.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Location Id.
     * The ID of the transaction's associated location.
     */
    public function getLocationId(): ?string
    {
        return $this->locationId;
    }

    /**
     * Sets Location Id.
     * The ID of the transaction's associated location.
     *
     * @maps location_id
     */
    public function setLocationId(?string $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * Returns Transaction Id.
     * The ID of the tender's associated transaction.
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    /**
     * Sets Transaction Id.
     * The ID of the tender's associated transaction.
     *
     * @maps transaction_id
     */
    public function setTransactionId(?string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * Returns Created At.
     * The timestamp for when the tender was created, in RFC 3339 format.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * The timestamp for when the tender was created, in RFC 3339 format.
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Note.
     * An optional note associated with the tender at the time of payment.
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * Sets Note.
     * An optional note associated with the tender at the time of payment.
     *
     * @maps note
     */
    public function setNote(?string $note): void
    {
        $this->note = $note;
    }

    /**
     * Returns Amount Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     */
    public function getAmountMoney(): ?Money
    {
        return $this->amountMoney;
    }

    /**
     * Sets Amount Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     *
     * @maps amount_money
     */
    public function setAmountMoney(?Money $amountMoney): void
    {
        $this->amountMoney = $amountMoney;
    }

    /**
     * Returns Tip Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     */
    public function getTipMoney(): ?Money
    {
        return $this->tipMoney;
    }

    /**
     * Sets Tip Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     *
     * @maps tip_money
     */
    public function setTipMoney(?Money $tipMoney): void
    {
        $this->tipMoney = $tipMoney;
    }

    /**
     * Returns Processing Fee Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     */
    public function getProcessingFeeMoney(): ?Money
    {
        return $this->processingFeeMoney;
    }

    /**
     * Sets Processing Fee Money.
     * Represents an amount of money. `Money` fields can be signed or unsigned.
     * Fields that do not explicitly define whether they are signed or unsigned are
     * considered unsigned and can only hold positive amounts. For signed fields, the
     * sign of the value indicates the purpose of the money transfer. See
     * [Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-
     * monetary-amounts)
     * for more information.
     *
     * @maps processing_fee_money
     */
    public function setProcessingFeeMoney(?Money $processingFeeMoney): void
    {
        $this->processingFeeMoney = $processingFeeMoney;
    }

    /**
     * Returns Customer Id.
     * If the tender is associated with a customer or represents a customer's card on file,
     * this is the ID of the associated customer.
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     * If the tender is associated with a customer or represents a customer's card on file,
     * this is the ID of the associated customer.
     *
     * @maps customer_id
     */
    public function setCustomerId(?string $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns Type.
     * Indicates a tender's type.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Indicates a tender's type.
     *
     * @required
     * @maps type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Card Details.
     * Represents additional details of a tender with `type` `CARD` or `SQUARE_GIFT_CARD`
     */
    public function getCardDetails(): ?TenderCardDetails
    {
        return $this->cardDetails;
    }

    /**
     * Sets Card Details.
     * Represents additional details of a tender with `type` `CARD` or `SQUARE_GIFT_CARD`
     *
     * @maps card_details
     */
    public function setCardDetails(?TenderCardDetails $cardDetails): void
    {
        $this->cardDetails = $cardDetails;
    }

    /**
     * Returns Cash Details.
     * Represents the details of a tender with `type` `CASH`.
     */
    public function getCashDetails(): ?TenderCashDetails
    {
        return $this->cashDetails;
    }

    /**
     * Sets Cash Details.
     * Represents the details of a tender with `type` `CASH`.
     *
     * @maps cash_details
     */
    public function setCashDetails(?TenderCashDetails $cashDetails): void
    {
        $this->cashDetails = $cashDetails;
    }

    /**
     * Returns Bank Account Details.
     * Represents the details of a tender with `type` `BANK_ACCOUNT`.
     *
     * See [BankAccountPaymentDetails]($m/BankAccountPaymentDetails)
     * for more exposed details of a bank account payment.
     */
    public function getBankAccountDetails(): ?TenderBankAccountDetails
    {
        return $this->bankAccountDetails;
    }

    /**
     * Sets Bank Account Details.
     * Represents the details of a tender with `type` `BANK_ACCOUNT`.
     *
     * See [BankAccountPaymentDetails]($m/BankAccountPaymentDetails)
     * for more exposed details of a bank account payment.
     *
     * @maps bank_account_details
     */
    public function setBankAccountDetails(?TenderBankAccountDetails $bankAccountDetails): void
    {
        $this->bankAccountDetails = $bankAccountDetails;
    }

    /**
     * Returns Wallet Details.
     * Represents the details of a tender with `type` `WALLET`.
     */
    public function getWalletDetails(): ?TenderDigitalWalletDetails
    {
        return $this->walletDetails;
    }

    /**
     * Sets Wallet Details.
     * Represents the details of a tender with `type` `WALLET`.
     *
     * @maps wallet_details
     */
    public function setWalletDetails(?TenderDigitalWalletDetails $walletDetails): void
    {
        $this->walletDetails = $walletDetails;
    }

    /**
     * Returns Buy Now Pay Later Details.
     * Represents the details of a tender with `type` `BUY_NOW_PAY_LATER`.
     */
    public function getBuyNowPayLaterDetails(): ?TenderBuyNowPayLaterDetails
    {
        return $this->buyNowPayLaterDetails;
    }

    /**
     * Sets Buy Now Pay Later Details.
     * Represents the details of a tender with `type` `BUY_NOW_PAY_LATER`.
     *
     * @maps buy_now_pay_later_details
     */
    public function setBuyNowPayLaterDetails(?TenderBuyNowPayLaterDetails $buyNowPayLaterDetails): void
    {
        $this->buyNowPayLaterDetails = $buyNowPayLaterDetails;
    }

    /**
     * Returns Square Account Details.
     * Represents the details of a tender with `type` `SQUARE_ACCOUNT`.
     */
    public function getSquareAccountDetails(): ?TenderSquareAccountDetails
    {
        return $this->squareAccountDetails;
    }

    /**
     * Sets Square Account Details.
     * Represents the details of a tender with `type` `SQUARE_ACCOUNT`.
     *
     * @maps square_account_details
     */
    public function setSquareAccountDetails(?TenderSquareAccountDetails $squareAccountDetails): void
    {
        $this->squareAccountDetails = $squareAccountDetails;
    }

    /**
     * Returns Additional Recipients.
     * Additional recipients (other than the merchant) receiving a portion of this tender.
     * For example, fees assessed on the purchase by a third party integration.
     *
     * @return AdditionalRecipient[]|null
     */
    public function getAdditionalRecipients(): ?array
    {
        return $this->additionalRecipients;
    }

    /**
     * Sets Additional Recipients.
     * Additional recipients (other than the merchant) receiving a portion of this tender.
     * For example, fees assessed on the purchase by a third party integration.
     *
     * @maps additional_recipients
     *
     * @param AdditionalRecipient[]|null $additionalRecipients
     */
    public function setAdditionalRecipients(?array $additionalRecipients): void
    {
        $this->additionalRecipients = $additionalRecipients;
    }

    /**
     * Returns Source.
     * Stores additional information on what 3rd party app recorded the Tender.
     */
    public function getSource(): ?TenderPaymentSource
    {
        return $this->source;
    }

    /**
     * Sets Source.
     * Stores additional information on what 3rd party app recorded the Tender.
     *
     * @maps source
     */
    public function setSource(?TenderPaymentSource $source): void
    {
        $this->source = $source;
    }

    /**
     * Returns Payment Id.
     * The ID of the [Payment]($m/Payment) that corresponds to this tender.
     * This value is only present for payments created with the v2 Payments API.
     */
    public function getPaymentId(): ?string
    {
        return $this->paymentId;
    }

    /**
     * Sets Payment Id.
     * The ID of the [Payment]($m/Payment) that corresponds to this tender.
     * This value is only present for payments created with the v2 Payments API.
     *
     * @maps payment_id
     */
    public function setPaymentId(?string $paymentId): void
    {
        $this->paymentId = $paymentId;
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
            $json['id']                        = $this->id;
        }
        if (isset($this->locationId)) {
            $json['location_id']               = $this->locationId;
        }
        if (isset($this->transactionId)) {
            $json['transaction_id']            = $this->transactionId;
        }
        if (isset($this->createdAt)) {
            $json['created_at']                = $this->createdAt;
        }
        if (isset($this->note)) {
            $json['note']                      = $this->note;
        }
        if (isset($this->amountMoney)) {
            $json['amount_money']              = $this->amountMoney;
        }
        if (isset($this->tipMoney)) {
            $json['tip_money']                 = $this->tipMoney;
        }
        if (isset($this->processingFeeMoney)) {
            $json['processing_fee_money']      = $this->processingFeeMoney;
        }
        if (isset($this->customerId)) {
            $json['customer_id']               = $this->customerId;
        }
        $json['type']                          = $this->type;
        if (isset($this->cardDetails)) {
            $json['card_details']              = $this->cardDetails;
        }
        if (isset($this->cashDetails)) {
            $json['cash_details']              = $this->cashDetails;
        }
        if (isset($this->bankAccountDetails)) {
            $json['bank_account_details']      = $this->bankAccountDetails;
        }
        if (isset($this->walletDetails)) {
            $json['wallet_details']            = $this->walletDetails;
        }
        if (isset($this->buyNowPayLaterDetails)) {
            $json['buy_now_pay_later_details'] = $this->buyNowPayLaterDetails;
        }
        if (isset($this->squareAccountDetails)) {
            $json['square_account_details']    = $this->squareAccountDetails;
        }
        if (isset($this->additionalRecipients)) {
            $json['additional_recipients']     = $this->additionalRecipients;
        }
        if (isset($this->source)) {
            $json['source']                    = $this->source;
        }
        if (isset($this->paymentId)) {
            $json['payment_id']                = $this->paymentId;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

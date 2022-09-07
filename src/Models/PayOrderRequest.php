<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Defines the fields that are included in requests to the
 * [PayOrder]($e/Orders/PayOrder) endpoint.
 */
class PayOrderRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $idempotencyKey;

    /**
     * @var int|null
     */
    private $orderVersion;

    /**
     * @var string[]|null
     */
    private $paymentIds;

    /**
     * @var PayOrderRequestDelayCompletion|null
     */
    private $delayCompletion;

    /**
     * @var string|null
     */
    private $completionProcessingMode;

    /**
     * @var string|null
     */
    private $paymentType;

    /**
     * @param string $idempotencyKey
     */
    public function __construct(string $idempotencyKey)
    {
        $this->idempotencyKey = $idempotencyKey;
    }

    /**
     * Returns Idempotency Key.
     * A value you specify that uniquely identifies this request among requests you have sent. If
     * you are unsure whether a particular payment request was completed successfully, you can reattempt
     * it with the same idempotency key without worrying about duplicate payments.
     *
     * For more information, see [Idempotency](https://developer.squareup.com/docs/working-with-
     * apis/idempotency).
     */
    public function getIdempotencyKey(): string
    {
        return $this->idempotencyKey;
    }

    /**
     * Sets Idempotency Key.
     * A value you specify that uniquely identifies this request among requests you have sent. If
     * you are unsure whether a particular payment request was completed successfully, you can reattempt
     * it with the same idempotency key without worrying about duplicate payments.
     *
     * For more information, see [Idempotency](https://developer.squareup.com/docs/working-with-
     * apis/idempotency).
     *
     * @required
     * @maps idempotency_key
     */
    public function setIdempotencyKey(string $idempotencyKey): void
    {
        $this->idempotencyKey = $idempotencyKey;
    }

    /**
     * Returns Order Version.
     * The version of the order being paid. If not supplied, the latest version will be paid.
     */
    public function getOrderVersion(): ?int
    {
        return $this->orderVersion;
    }

    /**
     * Sets Order Version.
     * The version of the order being paid. If not supplied, the latest version will be paid.
     *
     * @maps order_version
     */
    public function setOrderVersion(?int $orderVersion): void
    {
        $this->orderVersion = $orderVersion;
    }

    /**
     * Returns Payment Ids.
     * The IDs of the [payments]($m/Payment) to collect.
     * The payment total must match the order total.
     *
     * @return string[]|null
     */
    public function getPaymentIds(): ?array
    {
        return $this->paymentIds;
    }

    /**
     * Sets Payment Ids.
     * The IDs of the [payments]($m/Payment) to collect.
     * The payment total must match the order total.
     *
     * @maps payment_ids
     *
     * @param string[]|null $paymentIds
     */
    public function setPaymentIds(?array $paymentIds): void
    {
        $this->paymentIds = $paymentIds;
    }

    /**
     * Returns Delay Completion.
     * The delay completion details including the reason (e.g. PAPER_TIP) and the payment IDs
     * to delay completion for. The same reason is used for all payments, but not all payments in the
     * payment group have to use delayed completion. For example, a split tender checkout where one
     * payment type cannot use delayed completion (e.g. ACH).
     */
    public function getDelayCompletion(): ?PayOrderRequestDelayCompletion
    {
        return $this->delayCompletion;
    }

    /**
     * Sets Delay Completion.
     * The delay completion details including the reason (e.g. PAPER_TIP) and the payment IDs
     * to delay completion for. The same reason is used for all payments, but not all payments in the
     * payment group have to use delayed completion. For example, a split tender checkout where one
     * payment type cannot use delayed completion (e.g. ACH).
     *
     * @maps delay_completion
     */
    public function setDelayCompletion(?PayOrderRequestDelayCompletion $delayCompletion): void
    {
        $this->delayCompletion = $delayCompletion;
    }

    /**
     * Returns Completion Processing Mode.
     */
    public function getCompletionProcessingMode(): ?string
    {
        return $this->completionProcessingMode;
    }

    /**
     * Sets Completion Processing Mode.
     *
     * @maps completion_processing_mode
     */
    public function setCompletionProcessingMode(?string $completionProcessingMode): void
    {
        $this->completionProcessingMode = $completionProcessingMode;
    }

    /**
     * Returns Payment Type.
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    /**
     * Sets Payment Type.
     *
     * @maps payment_type
     */
    public function setPaymentType(?string $paymentType): void
    {
        $this->paymentType = $paymentType;
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
        $json['idempotency_key']                = $this->idempotencyKey;
        if (isset($this->orderVersion)) {
            $json['order_version']              = $this->orderVersion;
        }
        if (isset($this->paymentIds)) {
            $json['payment_ids']                = $this->paymentIds;
        }
        if (isset($this->delayCompletion)) {
            $json['delay_completion']           = $this->delayCompletion;
        }
        if (isset($this->completionProcessingMode)) {
            $json['completion_processing_mode'] = $this->completionProcessingMode;
        }
        if (isset($this->paymentType)) {
            $json['payment_type']               = $this->paymentType;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

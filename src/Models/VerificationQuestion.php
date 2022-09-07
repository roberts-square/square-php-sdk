<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a request for information required to reactivate a frozen or
 * deactivated seller account.
 */
class VerificationQuestion implements \JsonSerializable
{
    /**
     * @var string
     */
    private $questionKey;

    /**
     * @var string
     */
    private $questionPrompt;

    /**
     * @var string
     */
    private $questionId;

    /**
     * @var string
     */
    private $questionType;

    /**
     * @var Option[]|null
     */
    private $options;

    /**
     * @var string|null
     */
    private $response;

    /**
     * @var FileUpload[]|null
     */
    private $fileUploads;

    /**
     * @var bool|null
     */
    private $isRequired;

    /**
     * @var string|null
     */
    private $paymentToken;

    /**
     * @var bool|null
     */
    private $isRejected;

    /**
     * @param string $questionKey
     * @param string $questionPrompt
     * @param string $questionId
     * @param string $questionType
     */
    public function __construct(string $questionKey, string $questionPrompt, string $questionId, string $questionType)
    {
        $this->questionKey = $questionKey;
        $this->questionPrompt = $questionPrompt;
        $this->questionId = $questionId;
        $this->questionType = $questionType;
    }

    /**
     * Returns Question Key.
     * Unique, Square-generated ID for this question.
     */
    public function getQuestionKey(): string
    {
        return $this->questionKey;
    }

    /**
     * Sets Question Key.
     * Unique, Square-generated ID for this question.
     *
     * @required
     * @maps question_key
     */
    public function setQuestionKey(string $questionKey): void
    {
        $this->questionKey = $questionKey;
    }

    /**
     * Returns Question Prompt.
     * The question text. Square has question texts for each locale.
     */
    public function getQuestionPrompt(): string
    {
        return $this->questionPrompt;
    }

    /**
     * Sets Question Prompt.
     * The question text. Square has question texts for each locale.
     *
     * @required
     * @maps question_prompt
     */
    public function setQuestionPrompt(string $questionPrompt): void
    {
        $this->questionPrompt = $questionPrompt;
    }

    /**
     * Returns Question Id.
     * Unique Square-generated ID for an instance of this question asked to
     * a particular seller. This value is required for submitting responses.
     */
    public function getQuestionId(): string
    {
        return $this->questionId;
    }

    /**
     * Sets Question Id.
     * Unique Square-generated ID for an instance of this question asked to
     * a particular seller. This value is required for submitting responses.
     *
     * @required
     * @maps question_id
     */
    public function setQuestionId(string $questionId): void
    {
        $this->questionId = $questionId;
    }

    /**
     * Returns Question Type.
     * Indicates the format of a verification question.
     */
    public function getQuestionType(): string
    {
        return $this->questionType;
    }

    /**
     * Sets Question Type.
     * Indicates the format of a verification question.
     *
     * @required
     * @maps question_type
     */
    public function setQuestionType(string $questionType): void
    {
        $this->questionType = $questionType;
    }

    /**
     * Returns Options.
     * List of available options for multiple-choice question. Only populated
     * for `SELECT` and `MULTI_ANSWER_SELECT` questions.
     *
     * @return Option[]|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }

    /**
     * Sets Options.
     * List of available options for multiple-choice question. Only populated
     * for `SELECT` and `MULTI_ANSWER_SELECT` questions.
     *
     * @maps options
     *
     * @param Option[]|null $options
     */
    public function setOptions(?array $options): void
    {
        $this->options = $options;
    }

    /**
     * Returns Response.
     * A response to the question in the relevant format:
     * Responses to text prompts are provided as free form text. Responses to
     * multiple-choice questions are provided as a single option key
     * (single-selection) or comma-separated list of option keys (multi-selection).
     */
    public function getResponse(): ?string
    {
        return $this->response;
    }

    /**
     * Sets Response.
     * A response to the question in the relevant format:
     * Responses to text prompts are provided as free form text. Responses to
     * multiple-choice questions are provided as a single option key
     * (single-selection) or comma-separated list of option keys (multi-selection).
     *
     * @maps response
     */
    public function setResponse(?string $response): void
    {
        $this->response = $response;
    }

    /**
     * Returns File Uploads.
     * A list of `FileUpload` objects that should be uploaded. Only
     * populated for `FILE` questions.
     *
     * @return FileUpload[]|null
     */
    public function getFileUploads(): ?array
    {
        return $this->fileUploads;
    }

    /**
     * Sets File Uploads.
     * A list of `FileUpload` objects that should be uploaded. Only
     * populated for `FILE` questions.
     *
     * @maps file_uploads
     *
     * @param FileUpload[]|null $fileUploads
     */
    public function setFileUploads(?array $fileUploads): void
    {
        $this->fileUploads = $fileUploads;
    }

    /**
     * Returns Is Required.
     * Indicates whether a verification response is required in order to move
     * the frozen account forward to agent review.
     */
    public function getIsRequired(): ?bool
    {
        return $this->isRequired;
    }

    /**
     * Sets Is Required.
     * Indicates whether a verification response is required in order to move
     * the frozen account forward to agent review.
     *
     * @maps is_required
     */
    public function setIsRequired(?bool $isRequired): void
    {
        $this->isRequired = $isRequired;
    }

    /**
     * Returns Payment Token.
     * The payment object ID (`payment_id`) of the payment associated with
     * this question. Present only for questions that refer to a specific payment.
     */
    public function getPaymentToken(): ?string
    {
        return $this->paymentToken;
    }

    /**
     * Sets Payment Token.
     * The payment object ID (`payment_id`) of the payment associated with
     * this question. Present only for questions that refer to a specific payment.
     *
     * @maps payment_token
     */
    public function setPaymentToken(?string $paymentToken): void
    {
        $this->paymentToken = $paymentToken;
    }

    /**
     * Returns Is Rejected.
     * Indicates whether a Square agent has flagged this as invalid or
     * incomplete. Default: `false`.
     */
    public function getIsRejected(): ?bool
    {
        return $this->isRejected;
    }

    /**
     * Sets Is Rejected.
     * Indicates whether a Square agent has flagged this as invalid or
     * incomplete. Default: `false`.
     *
     * @maps is_rejected
     */
    public function setIsRejected(?bool $isRejected): void
    {
        $this->isRejected = $isRejected;
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
        $json['question_key']      = $this->questionKey;
        $json['question_prompt']   = $this->questionPrompt;
        $json['question_id']       = $this->questionId;
        $json['question_type']     = $this->questionType;
        if (isset($this->options)) {
            $json['options']       = $this->options;
        }
        if (isset($this->response)) {
            $json['response']      = $this->response;
        }
        if (isset($this->fileUploads)) {
            $json['file_uploads']  = $this->fileUploads;
        }
        if (isset($this->isRequired)) {
            $json['is_required']   = $this->isRequired;
        }
        if (isset($this->paymentToken)) {
            $json['payment_token'] = $this->paymentToken;
        }
        if (isset($this->isRejected)) {
            $json['is_rejected']   = $this->isRejected;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

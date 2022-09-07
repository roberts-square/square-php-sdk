<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Response object for requests to the GetVerificationQuestions endpoint.
 */
class GetVerificationQuestionsResponse implements \JsonSerializable
{
    /**
     * @var string
     */
    private $dueDate;

    /**
     * @var VerificationQuestion[]
     */
    private $verificationQuestions;

    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * @param string $dueDate
     * @param VerificationQuestion[] $verificationQuestions
     */
    public function __construct(string $dueDate, array $verificationQuestions)
    {
        $this->dueDate = $dueDate;
        $this->verificationQuestions = $verificationQuestions;
    }

    /**
     * Returns Due Date.
     * A timestamp, in RFC 3339 format, by which the provided questions must be
     * answered.
     */
    public function getDueDate(): string
    {
        return $this->dueDate;
    }

    /**
     * Sets Due Date.
     * A timestamp, in RFC 3339 format, by which the provided questions must be
     * answered.
     *
     * @required
     * @maps due_date
     */
    public function setDueDate(string $dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    /**
     * Returns Verification Questions.
     * The list of verification questions associated with the seller account.
     *
     * @return VerificationQuestion[]
     */
    public function getVerificationQuestions(): array
    {
        return $this->verificationQuestions;
    }

    /**
     * Sets Verification Questions.
     * The list of verification questions associated with the seller account.
     *
     * @required
     * @maps verification_questions
     *
     * @param VerificationQuestion[] $verificationQuestions
     */
    public function setVerificationQuestions(array $verificationQuestions): void
    {
        $this->verificationQuestions = $verificationQuestions;
    }

    /**
     * Returns Errors.
     * Information on errors encountered during the request. Only set if the
     * call fails.
     *
     * @return Error[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     * Information on errors encountered during the request. Only set if the
     * call fails.
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
        $json['due_date']               = $this->dueDate;
        $json['verification_questions'] = $this->verificationQuestions;
        if (isset($this->errors)) {
            $json['errors']             = $this->errors;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}

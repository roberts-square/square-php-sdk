<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Indicates the format of a verification question.
 */
class QuestionType
{
    /**
     * A simple text prompt.
     */
    public const TEXT = 'TEXT';

    /**
     * A prompt for a file upload.
     */
    public const FILE = 'FILE';

    /**
     * A multiple-choice question in which only one prompt may be selected.
     */
    public const SINGLE_ANSWER_SELECT = 'SINGLE_ANSWER_SELECT';

    /**
     * A multiple-choice question in which more than one prompt may be selected.
     */
    public const MULTI_ANSWER_SELECT = 'MULTI_ANSWER_SELECT';
}

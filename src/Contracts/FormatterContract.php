<?php

namespace CrCms\Request\Logger\Contracts;

interface FormatterContract
{
    /**
     * messageFormat.
     *
     * @return string
     */
    public function message(): string;

    /**
     * context.
     *
     * @return array
     */
    public function context(): array;
}

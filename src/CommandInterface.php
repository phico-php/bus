<?php

namespace Phico\Bus;

interface CommandInterface
{
    /**
     * Returns the unique command id
     * @return string
     */
    public function id(): string;
}

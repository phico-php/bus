<?php

namespace Phico\Bus;

interface Command
{
    /**
     * Returns the unique command id
     * @return string
     */
    public function id(): string;
}

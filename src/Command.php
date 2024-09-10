<?php

namespace Phico\Bus;

abstract class Command
{
    /**
     * Returns the unique command id
     * @return string
     */
    public function id(): string
    {
        return $this->id;
    }
}

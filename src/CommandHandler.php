<?php

declare(strict_types=1);

namespace Phico\Bus;


abstract class CommandHandler
{
    /**
     * Handles the Command
     * @param Command $obj
     * @return void
     */
    public function handle(Command $obj): void
    {
        throw new \BadMethodCallException('Please implement the handle() method in ' . get_class($this));
    }
}


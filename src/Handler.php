<?php

namespace Phico\Bus;


abstract class Handler
{
    /**
     * Handles the Command
     * @param Command $cmd
     * @return void
     */
    public function handle(Command $cmd): void
    {
        throw new \BadMethodCallException('Please implement the handle() method in ' . get_class($this));
    }
}

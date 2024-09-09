<?php

namespace Phico\Bus;

interface HandlerInterface
{
    /**
     * Handles the Command
     * @param Command $cmd
     * @return void
     */
    public function handle(Command $cmd): void;
}

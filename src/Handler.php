<?php

namespace Phico\Bus;

interface Handler
{
    /**
     * Handles the Command
     * @param Command $cmd
     * @return void
     */
    public function handle(Command $cmd): void;
}

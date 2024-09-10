<?php

namespace Phico\Bus;

class Bus
{
    /**
     * Pass the Command to the Handler
     * @param Command $cmd
     * @return void
     */
    public function handle(Command $cmd): void
    {
        $this->handler($cmd)->handle($cmd);
    }
    /**
     * Returns the Handler instance
     * @return Handler
     */
    protected function handler(Command $cmd): Handler
    {
        return container()->get($this->inflect($cmd));
    }
    /**
     * Returns the class name of the Handler for the Command
     *
     * @param Command $command
     * @return string
     */
    protected function inflect(Command $cmd): string
    {
        return str_replace("Command", "Handler", get_class($cmd));
    }
}

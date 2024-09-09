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
    private function handler(Command $cmd): Handler
    {
        return container()->get($this->inflect($class));
    }
    /**
     * Returns the class name of the Handler for the Command
     *
     * @param Command $command
     * @return string
     */
    private function inflect(Command $cmd): string
    {
        return str_replace("Command", "Handler", get_class($cmd));
    }
}

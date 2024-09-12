<?php

declare(strict_types=1);

namespace Phico\Bus;


class CommandBus
{
    /**
     * Pass the Command to the Handler
     * @param Command $obj
     * @return void
     */
    public function handle(Command $obj): void
    {
        $this->handler($obj)->handle($obj);
    }
    /**
     * Returns the Handler instance
     * @param Command $obj
     * @return CommandHandler
     */
    protected function handler(Command $obj): CommandHandler
    {
        return container()->get($this->inflect($obj));
    }
    /**
     * Returns the class name of the Handler for the Command
     * @param Command $obj
     * @return string
     */
    protected function inflect(Command $obj): string
    {
        return str_replace('Command', 'Handler', get_class($obj));
    }
}

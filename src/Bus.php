<?php

declare(strict_types=1);

namespace Phico\Bus;


class Bus
{
    protected CommandBus $commands;
    protected QueryBus $queries;


    /**
     * Instantiates the Command and Query buses
     */
    public function __construct()
    {
        $this->commands = new CommandBus;
        $this->queries = new QueryBus;
    }
    /**
     * Returns the CommandBus instance
     * @return \Phico\Bus\CommandBus
     */
    public function commands(): CommandBus
    {
        return $this->commands;
    }
    /**
     * Returns the Queries bus instance
     * @return \Phico\Bus\QueryBus
     */
    public function queries(): QueryBus
    {
        return $this->queries;
    }
    /**
     * Pass the Command or Query to the correct bus
     * @param Command|Query $obj
     * @return void
     */
    public function handle(Command|Query $obj): void
    {
        if ($obj instanceof Command) {
            $this->commands()->handle($obj);
        }
        if ($obj instanceof Query) {
            $this->queries()->handle($obj);
        }
    }
}

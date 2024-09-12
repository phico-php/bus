<?php

declare(strict_types=1);

namespace Phico\Bus;

use Phico\Capsule;


class QueryBus
{
    /**
     * Pass the Query to the Handler
     * @param Query $obj
     * @return Capsule
     */
    public function handle(Query $obj): Capsule
    {
        return $this->handler($obj)->handle($obj);
    }
    /**
     * Returns the Handler instance
     * @param Query $obj
     * @return QueryHandler
     */
    protected function handler(Query $obj): QueryHandler
    {
        return container()->get($this->inflect($obj));
    }
    /**
     * Returns the class name of the Handler for the Query
     * @param Query $obj
     * @return string
     */
    protected function inflect(Query $obj): string
    {
        return str_replace('Query', 'Handler', get_class($obj));
    }
}

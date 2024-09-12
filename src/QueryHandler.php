<?php

declare(strict_types=1);

namespace Phico\Bus;

use Phico\Capsule;


abstract class QueryHandler
{
    /**
     * Handles the Query
     * @param Query $obj
     * @return Capsule
     */
    public function handle(Query $obj): Capsule
    {
        throw new \BadMethodCallException('Please implement the handle() method in ' . get_class($this));
    }
}


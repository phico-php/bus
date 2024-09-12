<?php

declare(strict_types=1);

namespace Phico\Bus;

use Phico\Capsule;


trait HasResult
{
    // stores the result of a command or query
    protected Capsule $result;


    /**
     * Returns the result instance
     * @return Capsule
     */
    public function result(): Capsule
    {
        return $this->result ?? new Capsule([]);
    }
}

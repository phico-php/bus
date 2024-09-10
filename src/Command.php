<?php

namespace Phico\Bus;

use Phico\Capsule;


abstract class Command
{
    protected string $id;
    protected bool $queueable;
    protected Capsule $result;


    /**
     * Returns the unique command id
     * @return string
     */
    public function id(): string
    {
        return $this->id;
    }
    /**
     * Returns the queueable flag
     * @return bool
     */
    public function isQueueable(): bool
    {
        return $this->queueable ?? false;
    }
    /**
     * Returns the result instance
     * @return mixed
     */
    public function result(): Capsule
    {
        return $this->result ?? new Capsule([]);
    }
}

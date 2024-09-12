<?php

declare(strict_types=1);

namespace Phico\Bus;


trait HasId
{
    // The unique id of the command
    protected string $id;


    /**
     * Returns the unique command id
     * @return string
     */
    public function id(): string
    {
        if (!isset($this->id)) {
            $this->id = uniqid();
        }

        return $this->id;
    }
}

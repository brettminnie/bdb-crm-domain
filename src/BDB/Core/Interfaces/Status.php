<?php

namespace BDB\Core\Interfaces;

/**
 * Interface Status
 * @package BDB\Core\Interfaces
 */
interface Status
{
    /**
     * @param  string $status
     * @return Status
     */
    public function setStatus($status);

    /**
     * @return string
     */
    public function getStatus();
}

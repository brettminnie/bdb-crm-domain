<?php

namespace BDB\Core\Traits;

use BDB\Core\Interfaces\Status;
use Doctrine\Orm;

trait HasStatus
{
    /**
     * @ORM\Column(type='int')
     * @var int
     */
    protected $status = 0x0;

    /**
     * @param int $status
     * @return Status
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }


}

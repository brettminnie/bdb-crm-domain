<?php


namespace BDB\Core\Abstracts;


use BDB\Core\Interfaces\GUID;
use BDB\Core\Interfaces\Status;
use BDB\Core\Traits\HasGUID;
use BDB\Core\Traits\HasStatus;
use Doctrine\Orm;

abstract class LegalEntity implements GUID, Status
{
    use HasGUID;
    use HasStatus;

}

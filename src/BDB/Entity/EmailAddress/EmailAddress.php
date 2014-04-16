<?php


namespace BDB\Entity\EmailAddress;


use BDB\Core\Interfaces\GUID;
use BDB\Core\Interfaces\IsDefault;
use BDB\Core\Interfaces\Status;
use BDB\Core\Traits\HasGUID;
use BDB\Core\Traits\HasIsDefault;
use BDB\Core\Traits\HasStatus;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class EmailAddress
 * @package BDB\Entity\EmailAddress
 */
class EmailAddress implements GUID, Status, IsDefault
{
    use HasGUID;
    use HasStatus;
    use HasIsDefault;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $emailAddress;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $type;

    /**
     * @param string $emailAddress
     * @return EmailAddress
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @param string $type
     * @return EmailAddress
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }



}

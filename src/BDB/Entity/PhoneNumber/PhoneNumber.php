<?php


namespace BDB\Entity\PhoneNumber;


use BDB\Core\Interfaces\GUID;
use BDB\Core\Interfaces\IsDefault;
use BDB\Core\Interfaces\Status;
use BDB\Core\Traits\HasGUID;
use BDB\Core\Traits\HasIsDefault;
use BDB\Core\Traits\HasStatus;
use Doctrine\ORM;

class PhoneNumber implements GUID, IsDefault, Status
{
    use HasGUID;
    use HasIsDefault;
    use HasStatus;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $phoneNumber;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    protected $extension;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $type;

    /**
     * @param string $extension
     * @return PhoneNumber
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @param string $phoneNumber
     * @return PhoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $type
     * @return PhoneNumber
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
}

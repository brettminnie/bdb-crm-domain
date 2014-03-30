<?php


namespace BDB\Entity\PhoneNumber;


use BDB\Core\Interfaces\GUID;
use BDB\Core\Traits\HasGUID;
use Doctrine\ORM;

class PhoneNumber implements GUID, IsDefault
{
    use HasGUID;
    use HasIsDefault;

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
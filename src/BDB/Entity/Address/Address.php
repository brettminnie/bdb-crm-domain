<?php

namespace BDB\Entity\Address;

use BDB\Core\Interfaces\GUID;
use BDB\Core\Interfaces\IsDefault;
use BDB\Core\Interfaces\Status;
use BDB\Core\Traits\HasGUID;
use BDB\Core\Traits\HasIsDefault;
use BDB\Core\Traits\HasStatus;
use Doctrine\ORM\Mapping as ORM;

class Address implements GUID, IsDefault, Status
{
    use HasGUID;
    use HasIsDefault;
    use HasStatus;

    /**
     * @ORM\OneToOne(targetEntity="BDB\Entity\Address\Address")
     * @ORM\JoinColumn(name="parent_guid", referencedColumnName="guid", nullable=true)
     * @var Address
     */
    protected $parent;

    /**
     * @ORM\Column(type='json_array')
     * @var array
     */
    protected $addressLines = [];

    /**
     * @ORM\Column(type='string')
     * @var string
     */
    protected $town;

    /**
     * @ORM\Column(type='string')
     * @var string
     */
    protected $county;

    /**
     * @ORM\Column(type='string')
     * @var string
     */
    protected $country;

    /**
     * @ORM\Column(type='string')
     * @var string
     */
    protected $postCode;

    /**
     * @ORM\Column(type='string')
     * @var string
     */
    protected $type;
    /**
     * @param $addressLines
     * @return Address
     */
    public function setAddressLines($addressLines)
    {
        $this->addressLines = $addressLines;
        return $this;
    }

    /**
     * @return array
     */
    public function getAddressLines()
    {
        return $this->addressLines;
    }

    /**
     * @param string $country
     * @return Address
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $county
     * @return Address
     */
    public function setCounty($county)
    {
        $this->county = $county;
        return $this;
    }

    /**
     * @return string
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * @param string $postCode
     * @return Address
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * @param string $town
     * @return Address
     */
    public function setTown($town)
    {
        $this->town = $town;
        return $this;
    }

    /**
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * @param string $type
     * @return Address
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
     * @param Address $parent
     * @return Address
     */
    public function setParentGuid(Address $parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return Address
     */
    public function getParent()
    {
        return $this->parent;
    }
}

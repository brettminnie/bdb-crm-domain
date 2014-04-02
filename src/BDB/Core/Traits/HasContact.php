<?php
/**
 * Created by PhpStorm.
 * User: brettm
 * Date: 02/04/14
 * Time: 21:51
 */

namespace BDB\Core\Traits;


trait HasContact
{
    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    protected $isPrimary = false;

    /**
     * @ORM\Column(type="string", nullable="true")
     * @var string
     */
    protected $contactType = '';

    /**
     * @return boolean
     */
    public function getIsPrimary()
    {
        return $this->isPrimary;
    }

    /**
     * @param bool $primary
     * @return Contact
     */
    public function setIsPrimary($primary = false)
    {
        $this->isPrimary = (bool)$primary;
        return $this;
    }

    /**
     * @return boolean
     * Alias for getIsPrimary
     */
    public function isPrimary()
    {
        return $this->getIsPrimary();
    }

    /**
     * @return string
     */
    public function getContactType()
    {
        return $this->contactType;
    }

    /**
     * @param string $contactType
     * @return Contact
     */
    public function setContactType($contactType)
    {
        $this->contactType = $contactType;
        return $this;
    }
}

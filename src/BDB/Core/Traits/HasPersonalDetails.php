<?php

namespace BDB\Core\Traits;

use Doctrine\ORM\Mapping as ORM;

trait HasPersonalDetails
{
    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $title;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $forenames;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $middleNames;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $surname;

    /**
     * @param string $title
     * @return PersonalDetails
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $forenames
     * @return PersonalDetails
     */
    public function setForenames($forenames)
    {
        $this->forenames = $forenames;
        return $this;
    }

    /**
     * @return string
     */
    public function getForenames()
    {
        return $this->forenames;
    }

    /**
     * @param string $middleNames
     * @return PersonalDetails
     */
    public function setMiddleNames($middleNames)
    {
        $this->middleNames = $middleNames;
        return $this;
    }

    /**
     * @return string
     */
    public function getMiddleNames()
    {
        return $this->middleNames;
    }

    /**
     * @param string $surname
     * @return PersonalDetails
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    public function getFullName()
    {
        return trim(
            sprintf(
                '%s %s %s %s',
                $this->getTitle(),
                $this->getForenames(),
                $this->getMiddleNames(),
                $this->getSurname()
            )
        );
    }
}

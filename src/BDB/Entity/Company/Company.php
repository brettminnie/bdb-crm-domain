<?php

namespace BDB\Entity\Company;

use BDB\Core\Abstracts\LegalEntity;
use BDB\Core\Interfaces\Contact;
use BDB\Entity\Address\Address;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

class Company extends LegalEntity
{
    /**
     * ORM\Column(type="string")
     * @var string
     */
    protected $name;

    /**
     * @ORM\OneToOne(targetEntity="BDB\Entity\Address\Address")
     * @ORM\JoinColumn(name="address_guid", referencedColumnName="guid")
     * @var Address
     */
    protected $address;

    /**
     * @ORM\OneToMany(targetEntity="BDB\Entity\Person\Contact")
     * @var ArrayCollection
     */
    protected $contacts;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $registrationNumber;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $vatNumber;

    /**
     * @param \BDB\Entity\Address\Address $address
     * @return Company
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return \BDB\Entity\Address\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param ArrayCollection $contacts
     * @return Company
     */
    public function setContacts(ArrayCollection $contacts)
    {
        $this->contacts = $contacts;
        return $this;
    }

    /**
     * @return \BDB\Entity\Company\ArrayCollection
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @param Contact $contact
     * @return Company
     */
    public function addContact(Contact $contact)
    {
        if (null === $this->contacts) {
            $this->contacts = new ArrayCollection();
        }

        $this->contacts->add($contact);
        return $this;
    }

    /**
     * @param Contact $contact
     * @return Company
     */
    public function removeContact(Contact $contact)
    {
        $this->contacts->removeElement($contact);
        return $this;
    }

    /**
     * @param string $name
     * @return Company
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $registrationNumber
     */
    public function setRegistrationNumber($registrationNumber)
    {
        $this->registrationNumber = $registrationNumber;
    }

    /**
     * @return string
     */
    public function getRegistrationNumber()
    {
        return $this->registrationNumber;
    }

    /**
     * @param string $vatNumber
     */
    public function setVatNumber($vatNumber)
    {
        $this->vatNumber = $vatNumber;
    }

    /**
     * @return string
     */
    public function getVatNumber()
    {
        return $this->vatNumber;
    }
}

<?php


namespace BDB\Entity\Person;


use BDB\Core\Abstracts\LegalEntity;
use BDB\Core\Interfaces\PersonalDetails;
use BDB\Core\Traits\HasPersonalDetails;
use BDB\Entity\Address\Address;
use BDB\Entity\EmailAddress\EmailAddress;
use BDB\Entity\PhoneNumber\PhoneNumber;
use Doctrine\Orm;
use Doctrine\Common\Collections\ArrayCollection;

class Person extends LegalEntity implements PersonalDetails
{
    use HasPersonalDetails;

    protected $phoneNumbers;

    protected $emailAddresses;

    protected $addresses;

    public function __construct()
    {
        $this->phoneNumbers     = new ArrayCollection();
        $this->addresses        = new ArrayCollection();
        $this->emailAddresses   = new ArrayCollection();
        self::$guid             = self::generateGUID();
    }

    /**
     * @return Person
     */
    public function clearAddresses()
    {
        $this->addresses->clear();
        return $this;
    }

    /**
     * @return Person
     */
    public function clearEmailAddresses()
    {
        $this->emailAddresses->clear();
        return $this;
    }

    /**
     * @param ArrayCollection $phoneNumbers
     * @return Person
     */
    public function setPhoneNumbers(ArrayCollection $phoneNumbers)
    {
        $this->phoneNumbers = $phoneNumbers;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getPhoneNumbers()
    {
        if (null === $this->phoneNumbers) {
            $this->phoneNumbers =  new ArrayCollection();
        }
        return $this->phoneNumbers;
    }

    /**
     * @param PhoneNumber $phoneNumber
     * @return Person
     */
    public function addPhoneNumbers(PhoneNumber $phoneNumber)
    {
        if (null === $this->phoneNumbers) {
            $this->phoneNumbers =  new ArrayCollection();
        }
        $this->phoneNumbers->add($phoneNumber);

        return $this;
    }

    /**
     * @return Person
     */
    public function clearPhoneNumbers()
    {
        $this->phoneNumbers->clear();
        return $this;
    }

    /**
     * @param ArrayCollection $addresses
     * @return Person
     */
    public function setAddresses(ArrayCollection $addresses)
    {
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getAddresses()
    {
        if (null ===  $this->addresses) {
           $this->addresses = new ArrayCollection();
        }
        return $this->addresses;
    }

    /**
     * @param Address $address
     * @return Person
     */
    public function setAddress(Address $address)
    {
        if (null === $this->addresses) {
            $this->addresses = new ArrayCollection();
        }

        $this->addresses->add($address);
        return $this;
    }

    /**
     * @param ArrayCollection $emailAddresses
     * @return Person
     */
    public function setEmailAddresses(ArrayCollection $emailAddresses)
    {
        $this->emailAddresses = $emailAddresses;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getEmailAddresses()
    {
        if (null === $this->emailAddresses) {
            $this->emailAddresses = new ArrayCollection();
        }
        return $this->emailAddresses;
    }

    /**
     * @param EmailAddress $emailAddress
     * @return Person
     */
    public function addEmailAddress(EmailAddress $emailAddress)
    {
        if (null === $this->emailAddresses) {
            $this->emailAddresses = new ArrayCollection();
        }
        $this->emailAddresses->add($emailAddress);
        return $this;
    }
}

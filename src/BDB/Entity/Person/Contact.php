<?php


namespace BDB\Entity\Person;


use BDB\Core\Traits\HasContact;
use BDB\Core\Interfaces\Contact as ContactInterface;

class Contact extends Person implements ContactInterface
{
    use HasContact;
}

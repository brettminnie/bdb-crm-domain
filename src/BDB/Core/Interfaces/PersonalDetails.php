<?php
/**
 * Created by PhpStorm.
 * User: brettm
 * Date: 30/03/14
 * Time: 21:54
 */

namespace BDB\Core\Interfaces;


interface PersonalDetails
{
    /**
     * @param string $title
     * @return PersonalDetails
     */
    public function setTitle($title);

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $forenames
     * @return PersonalDetails
     */
    public function setForenames($forenames);

    /**
     * @return string
     */
    public function getForenames();

    /**
     * @param string $middleNames
     * @return PersonalDetails
     */
    public function setMiddleNames($middleNames);

    /**
     * @return string
     */
    public function getMiddleNames();

    /**
     * @param string $surname
     * @return PersonalDetails
     */
    public function setSurname($surname);

    /**
     * @return string
     */
    public function getSurname();

}

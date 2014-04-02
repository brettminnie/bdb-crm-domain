<?php
/**
 * Created by PhpStorm.
 * User: brettm
 * Date: 02/04/14
 * Time: 21:48
 */

namespace BDB\Core\Interfaces;


interface Contact
{
    /**
     * @return boolean
     */
    public function getIsPrimary();

    /**
     * @param bool $primary
     * @return Contact
     */
    public function setIsPrimary($primary = false);

    /**
     * @return boolean
     * Alias for getIsPrimary
     */
    public function isPrimary();

    /**
     * @return string
     */
    public function getContactType();

    /**
     * @param string $contactType
     * @return Contact
     */
    public function setContactType($contactType);
}

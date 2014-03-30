<?php
namespace BDB\Core\Interfaces;

/**
 * Interface GUID
 * @package BDB\Core\Interfaces
 */
interface GUID
{

    /**
     * @return string
     */
    public function getGUID();

    /**
     * @param string $guid
     * @return GUID
     */
    public function setGUID($guid = null);
}

<?php

namespace BDB\Core\Interfaces;


interface IsDefault
{
    /**
     * @param bool $default
     * @return IsDefault
     */
    public function setIsDefault($default = false);

    /**
     * @return bool
     */
    public function getIsDefault();

    /**
     * @return bool
     */
    public function isDefault();
}

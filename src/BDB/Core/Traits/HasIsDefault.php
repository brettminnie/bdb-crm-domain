<?php
/**
 * Created by PhpStorm.
 * User: brettm
 * Date: 30/03/14
 * Time: 22:37
 */

namespace BDB\Core\Traits;

use Doctrine\ORM;

trait HasIsDefault
{
    /**
     * @ORM\Column(type="boolean", options={"default":0})
     * @var bool
     */
    protected $isDefault = false;

    /**
     * @param bool $default
     * @return IsDefault
     */
    public function setIsDefault($default = false)
    {
        $this->isDefault = $default;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * @return bool
     * Alias for getIsDefault
     */
    public function isDefault()
    {
        return $this->getIsDefault();
    }
}

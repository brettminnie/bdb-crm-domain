<?php

namespace BDB\Core\Traits;

use BDB\Core\Exceptions\GUIDException;
use Doctrine\ORM;
use JMS\Serializer\Annotation\Type;

/**
 * Class HasGUID
 * @package BDB\Core\Traits
 */
trait HasGUID
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     * @var string
     * @Type("string")
     */
    protected $guid;

    /**
     * @return string
     */
    public function getGUID()
    {
        return $this->guid;
    }

    /**
     * @param string $guid
     * @throws GUIDException
     * @return GUID
     */
    public function setGUID($guid = null)
    {
        $guid = (null ===  $guid) ? self::generateGUID() : $guid;

        if(false === self::validateGuid($guid)) {
            throw new GUIDException('The guid ' . $guid . ' is not valid');
        }

        $this->guid = $guid;
        return $this;
    }

    /**
     * @param string $namespace
     * @return string
     */
    public static function generateGUID($namespace = '')
    {
        static $guid = '';
        $uid = uniqid("", true);
        $data = $namespace;
        $data .= $_SERVER['REQUEST_TIME'];
        $data .= $_SERVER['HTTP_USER_AGENT'];
        $data .= $_SERVER['LOCAL_ADDR'];
        $data .= $_SERVER['LOCAL_PORT'];
        $data .= $_SERVER['REMOTE_ADDR'];
        $data .= $_SERVER['REMOTE_PORT'];
        $hash = strtoupper(hash('ripemd128', $uid . $guid . md5($data)));
        $guid = '{' .
            substr($hash,  0,  8) .
            '-' .
            substr($hash,  8,  4) .
            '-' .
            substr($hash, 12,  4) .
            '-' .
            substr($hash, 16,  4) .
            '-' .
            substr($hash, 20, 12) .
            '}';
        return $guid;
    }

    /**
     * @param $guid
     * @return bool
     */
    public static function validateGuid($guid)
    {
        return (bool) preg_match('/^\{?[a-f\d]{8}-(?:[a-f\d]{4}-){3}[a-f\d]{12}\}?$/i', $guid);
    }

}

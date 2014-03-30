<?php

namespace ApplicationTest;

use Doctrine\Common\Annotations\AnnotationRegistry;
use Zend\Loader\AutoloaderFactory;
use Zend\Mvc\Service\ServiceManagerConfig;
use Zend\ServiceManager\ServiceManager;
use RuntimeException;

error_reporting(E_ALL | E_STRICT);
chdir(__DIR__);

/**
 * Test bootstrap, for setting up autoloading
 */
class Bootstrap
{
    protected static $serviceManager;

    public static function init()
    {
        $zf2ModulePaths = array(dirname(dirname(__DIR__)));
        if (($path = static::findParentPath('vendor'))) {
            $zf2ModulePaths[] = $path;
        }
        if (($path = static::findParentPath('module')) !== $zf2ModulePaths[0]) {
            $zf2ModulePaths[] = $path;
        }

        static::initAutoloader();

    }

    public static function chroot()
    {
        $rootPath = dirname(static::findParentPath('src'));
        chdir($rootPath);
    }

    public static function getServiceManager()
    {
        return static::$serviceManager;
    }

    protected static function initAutoloader()
    {
        $vendorPath = static::findParentPath('vendor');
        if (file_exists($vendorPath . '/autoload.php')) {
            $loader = include $vendorPath . '/autoload.php';
            $loader->add('ApplicationTest', 'module/Application/test/');
        }

        AnnotationRegistry::registerLoader('class_exists');
    }

    protected static function findParentPath($path)
    {
        $dir         = __DIR__;
        $previousDir = '.';
        while (!is_dir($dir . '/' . $path)) {
            $dir = dirname($dir);
            if ($previousDir === $dir) {
                return false;
            }
            $previousDir = $dir;
        }

        return $dir . '/' . $path;
    }
}

Bootstrap::init();
Bootstrap::chroot();

<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd82ed3d9b0b174e499d2c024fe13760d
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitd82ed3d9b0b174e499d2c024fe13760d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd82ed3d9b0b174e499d2c024fe13760d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd82ed3d9b0b174e499d2c024fe13760d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

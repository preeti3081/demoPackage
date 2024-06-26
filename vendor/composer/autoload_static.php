<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd82ed3d9b0b174e499d2c024fe13760d
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DemoPackage\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DemoPackage\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd82ed3d9b0b174e499d2c024fe13760d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd82ed3d9b0b174e499d2c024fe13760d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd82ed3d9b0b174e499d2c024fe13760d::$classMap;

        }, null, ClassLoader::class);
    }
}

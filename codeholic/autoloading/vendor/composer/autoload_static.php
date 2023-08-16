<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb59358e29fd71d6fa9e6410fb5a4012
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'G' => 
        array (
            'Goodlife431\\Autoloading\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Goodlife431\\Autoloading\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb59358e29fd71d6fa9e6410fb5a4012::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb59358e29fd71d6fa9e6410fb5a4012::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdb59358e29fd71d6fa9e6410fb5a4012::$classMap;

        }, null, ClassLoader::class);
    }
}

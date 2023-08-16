<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdb59358e29fd71d6fa9e6410fb5a4012
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

        spl_autoload_register(array('ComposerAutoloaderInitdb59358e29fd71d6fa9e6410fb5a4012', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdb59358e29fd71d6fa9e6410fb5a4012', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdb59358e29fd71d6fa9e6410fb5a4012::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf2a9b8fec1b374fd6cb6a9f78b5e0953
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

        spl_autoload_register(array('ComposerAutoloaderInitf2a9b8fec1b374fd6cb6a9f78b5e0953', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf2a9b8fec1b374fd6cb6a9f78b5e0953', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf2a9b8fec1b374fd6cb6a9f78b5e0953::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

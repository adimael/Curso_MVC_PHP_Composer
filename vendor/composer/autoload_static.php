<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0b6439ccca5d103ecb4da4f83288665
{
    public static $files = array (
        '77f74e4ff9ccec1d89d77452e73eba8e' => __DIR__ . '/../..' . '/config/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'core\\' => 5,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0b6439ccca5d103ecb4da4f83288665::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0b6439ccca5d103ecb4da4f83288665::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc0b6439ccca5d103ecb4da4f83288665::$classMap;

        }, null, ClassLoader::class);
    }
}

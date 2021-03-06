<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit51929d153b60cfe5e676c4ba7fc3621d
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Ediub\\Kalkulator\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ediub\\Kalkulator\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit51929d153b60cfe5e676c4ba7fc3621d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit51929d153b60cfe5e676c4ba7fc3621d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit51929d153b60cfe5e676c4ba7fc3621d::$classMap;

        }, null, ClassLoader::class);
    }
}

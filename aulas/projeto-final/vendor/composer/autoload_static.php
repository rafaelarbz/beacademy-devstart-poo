<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit79c83853a56b78a205503793065222cf
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit79c83853a56b78a205503793065222cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit79c83853a56b78a205503793065222cf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit79c83853a56b78a205503793065222cf::$classMap;

        }, null, ClassLoader::class);
    }
}

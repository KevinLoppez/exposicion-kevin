<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7dfc4fa3c9f791479618b175175eb109
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kevin\\Exposicion\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kevin\\Exposicion\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7dfc4fa3c9f791479618b175175eb109::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7dfc4fa3c9f791479618b175175eb109::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7dfc4fa3c9f791479618b175175eb109::$classMap;

        }, null, ClassLoader::class);
    }
}

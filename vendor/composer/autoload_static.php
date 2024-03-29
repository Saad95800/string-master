<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit15af8699792f13001b5c4151f061f9b2
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'StringMaster\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'StringMaster\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit15af8699792f13001b5c4151f061f9b2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit15af8699792f13001b5c4151f061f9b2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit15af8699792f13001b5c4151f061f9b2::$classMap;

        }, null, ClassLoader::class);
    }
}

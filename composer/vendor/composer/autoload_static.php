<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4730264438c06a664924157949af00fa
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4730264438c06a664924157949af00fa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4730264438c06a664924157949af00fa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4730264438c06a664924157949af00fa::$classMap;

        }, null, ClassLoader::class);
    }
}
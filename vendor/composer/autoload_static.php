<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4dcc0c5580e5ca8cc4d1084bf05c1680
{
    public static $files = array (
        'd2102839631fb40c2eadc0f62ef9995f' => __DIR__ . '/../..' . '/source/Core/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4dcc0c5580e5ca8cc4d1084bf05c1680::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4dcc0c5580e5ca8cc4d1084bf05c1680::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4dcc0c5580e5ca8cc4d1084bf05c1680::$classMap;

        }, null, ClassLoader::class);
    }
}
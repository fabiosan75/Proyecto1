<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2f29d82a42c68262b138c38ff7b28d64
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fabiosan75\\Proyecto1\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fabiosan75\\Proyecto1\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2f29d82a42c68262b138c38ff7b28d64::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2f29d82a42c68262b138c38ff7b28d64::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2f29d82a42c68262b138c38ff7b28d64::$classMap;

        }, null, ClassLoader::class);
    }
}

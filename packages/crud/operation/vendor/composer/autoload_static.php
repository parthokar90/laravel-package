<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0df5a9448dd2cf23939be14acf7bcf3a
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Crud\\Operation\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Crud\\Operation\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0df5a9448dd2cf23939be14acf7bcf3a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0df5a9448dd2cf23939be14acf7bcf3a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0df5a9448dd2cf23939be14acf7bcf3a::$classMap;

        }, null, ClassLoader::class);
    }
}

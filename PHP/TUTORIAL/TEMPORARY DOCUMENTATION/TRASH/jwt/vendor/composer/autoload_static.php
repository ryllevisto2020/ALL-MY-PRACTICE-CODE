<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite31b2c5efcc1ab95f6c67c8605c1e34d
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite31b2c5efcc1ab95f6c67c8605c1e34d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite31b2c5efcc1ab95f6c67c8605c1e34d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite31b2c5efcc1ab95f6c67c8605c1e34d::$classMap;

        }, null, ClassLoader::class);
    }
}
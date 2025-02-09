<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit233fba0d7a41b0f5c532bee7586a2e7b
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit233fba0d7a41b0f5c532bee7586a2e7b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit233fba0d7a41b0f5c532bee7586a2e7b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit233fba0d7a41b0f5c532bee7586a2e7b::$classMap;

        }, null, ClassLoader::class);
    }
}

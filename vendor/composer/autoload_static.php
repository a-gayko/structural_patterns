<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit62e180997d7ab777abf7518208ea28fb
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Patterns\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Patterns\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit62e180997d7ab777abf7518208ea28fb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit62e180997d7ab777abf7518208ea28fb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit62e180997d7ab777abf7518208ea28fb::$classMap;

        }, null, ClassLoader::class);
    }
}
<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb41c52534ae05e81ffcbc2115939cfb2
{
    public static $files = array (
        'a9866c3af88b822eaccff7fad7f6795c' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Text\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Text\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb41c52534ae05e81ffcbc2115939cfb2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb41c52534ae05e81ffcbc2115939cfb2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb41c52534ae05e81ffcbc2115939cfb2::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit30477bc873e57afb5657a3eee1cc1cb9
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Solayman\\SalatNotifier\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Solayman\\SalatNotifier\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit30477bc873e57afb5657a3eee1cc1cb9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit30477bc873e57afb5657a3eee1cc1cb9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit30477bc873e57afb5657a3eee1cc1cb9::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e55b4b2210c814f110a41ccdb04fdc0
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rokhy\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rokhy\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e55b4b2210c814f110a41ccdb04fdc0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e55b4b2210c814f110a41ccdb04fdc0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0e55b4b2210c814f110a41ccdb04fdc0::$classMap;

        }, null, ClassLoader::class);
    }
}

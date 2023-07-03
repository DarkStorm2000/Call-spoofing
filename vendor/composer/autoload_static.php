<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdbdfabdbc8a29093ba07534fb784ef06
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdbdfabdbc8a29093ba07534fb784ef06::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdbdfabdbc8a29093ba07534fb784ef06::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdbdfabdbc8a29093ba07534fb784ef06::$classMap;

        }, null, ClassLoader::class);
    }
}
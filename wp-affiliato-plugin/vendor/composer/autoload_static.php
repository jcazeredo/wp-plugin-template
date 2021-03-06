<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa9193a71909d99c6dac85470713ae00
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa9193a71909d99c6dac85470713ae00::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa9193a71909d99c6dac85470713ae00::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfa9193a71909d99c6dac85470713ae00::$classMap;

        }, null, ClassLoader::class);
    }
}

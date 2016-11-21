<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc5d727acf685296e09e894d1869fbfe1
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc5d727acf685296e09e894d1869fbfe1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc5d727acf685296e09e894d1869fbfe1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

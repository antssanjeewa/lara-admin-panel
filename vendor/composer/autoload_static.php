<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0bfa205573eacb5a9ba14d473f4fcfdf
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Elegantmedia\\LaravelAdminpanel\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Elegantmedia\\LaravelAdminpanel\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0bfa205573eacb5a9ba14d473f4fcfdf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0bfa205573eacb5a9ba14d473f4fcfdf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0bfa205573eacb5a9ba14d473f4fcfdf::$classMap;

        }, null, ClassLoader::class);
    }
}

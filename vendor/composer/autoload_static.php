<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita432eaffaefa214e26fd65367fcf49d0
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita432eaffaefa214e26fd65367fcf49d0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita432eaffaefa214e26fd65367fcf49d0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

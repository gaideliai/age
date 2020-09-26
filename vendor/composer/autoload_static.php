<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit35e2a6a8bb35df2ae546e555191d6db5
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit35e2a6a8bb35df2ae546e555191d6db5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit35e2a6a8bb35df2ae546e555191d6db5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

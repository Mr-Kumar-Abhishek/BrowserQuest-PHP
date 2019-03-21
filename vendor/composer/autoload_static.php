<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2dfad58beadafed6e997b9088ce37505
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2dfad58beadafed6e997b9088ce37505::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2dfad58beadafed6e997b9088ce37505::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

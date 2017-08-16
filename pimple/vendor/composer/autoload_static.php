<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a79d7b5d07ff20ca43f004b46dbc4b6
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a79d7b5d07ff20ca43f004b46dbc4b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a79d7b5d07ff20ca43f004b46dbc4b6::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9a79d7b5d07ff20ca43f004b46dbc4b6::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}

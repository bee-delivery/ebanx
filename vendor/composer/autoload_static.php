<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit56509698a0b49e84d10841b01dd810df
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BeeDelivery\\Ebanx\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BeeDelivery\\Ebanx\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit56509698a0b49e84d10841b01dd810df::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit56509698a0b49e84d10841b01dd810df::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

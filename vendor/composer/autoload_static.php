<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea96223385eeb368da7243fe6661aa2a
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'crojasaragonez\\UtnDb\\' => 21,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'crojasaragonez\\UtnDb\\' => 
        array (
            0 => __DIR__ . '/..' . '/crojasaragonez/utn-db/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitea96223385eeb368da7243fe6661aa2a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea96223385eeb368da7243fe6661aa2a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

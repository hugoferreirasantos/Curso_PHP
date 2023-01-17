<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit973c685df5cb3692e6e7669d8bfb9516
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit973c685df5cb3692e6e7669d8bfb9516::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit973c685df5cb3692e6e7669d8bfb9516::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit973c685df5cb3692e6e7669d8bfb9516::$classMap;

        }, null, ClassLoader::class);
    }
}
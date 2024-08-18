<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf94bda1282caa103660e19beca28fe25
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf94bda1282caa103660e19beca28fe25::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf94bda1282caa103660e19beca28fe25::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf94bda1282caa103660e19beca28fe25::$classMap;

        }, null, ClassLoader::class);
    }
}

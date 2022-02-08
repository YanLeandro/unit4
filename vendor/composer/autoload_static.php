<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitedf854fe27e42a11b2938524e6989746
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitedf854fe27e42a11b2938524e6989746::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitedf854fe27e42a11b2938524e6989746::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitedf854fe27e42a11b2938524e6989746::$classMap;

        }, null, ClassLoader::class);
    }
}
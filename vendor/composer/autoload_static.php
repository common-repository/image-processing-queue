<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf01066113ea50f278f43ee6ffe42908
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'edf8ef411b308ea9e315d190a754d91b' => __DIR__ . '/..' . '/a5hleyrich/wp-queue/src/functions.php',
        '5d80ba682afba25d348d62676196765b' => __DIR__ . '/../..' . '/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WP_Queue\\' => 9,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'I' => 
        array (
            'Image_Processing_Queue\\' => 23,
        ),
        'C' => 
        array (
            'Carbon\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WP_Queue\\' => 
        array (
            0 => __DIR__ . '/..' . '/a5hleyrich/wp-queue/src/WP_Queue',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Image_Processing_Queue\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Image_Processing_Queue',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
    );

    public static $classMap = array (
        'WP_Async_Request' => __DIR__ . '/..' . '/a5hleyrich/wp-background-processing/classes/wp-async-request.php',
        'WP_Background_Process' => __DIR__ . '/..' . '/a5hleyrich/wp-background-processing/classes/wp-background-process.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdf01066113ea50f278f43ee6ffe42908::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdf01066113ea50f278f43ee6ffe42908::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdf01066113ea50f278f43ee6ffe42908::$classMap;

        }, null, ClassLoader::class);
    }
}

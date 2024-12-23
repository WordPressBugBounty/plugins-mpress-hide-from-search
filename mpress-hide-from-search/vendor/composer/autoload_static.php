<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit45601877d29826fa8045b75f1fe9d36a
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WP_Forge\\UpgradeHandler\\' => 24,
            'WP_Forge\\Container\\' => 19,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'H' => 
        array (
            'HideFromSearch\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WP_Forge\\UpgradeHandler\\' => 
        array (
            0 => __DIR__ . '/..' . '/wp-forge/wp-upgrade-handler/includes',
        ),
        'WP_Forge\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/wp-forge/container/includes',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'HideFromSearch\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'HideFromSearch\\MetaBox' => __DIR__ . '/../..' . '/includes/MetaBox.php',
        'HideFromSearch\\Plugin' => __DIR__ . '/../..' . '/includes/Plugin.php',
        'Psr\\Container\\ContainerExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerExceptionInterface.php',
        'Psr\\Container\\ContainerInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerInterface.php',
        'Psr\\Container\\NotFoundExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/NotFoundExceptionInterface.php',
        'WP_Forge\\Container\\Container' => __DIR__ . '/..' . '/wp-forge/container/includes/Container.php',
        'WP_Forge\\Container\\ContainerException' => __DIR__ . '/..' . '/wp-forge/container/includes/ContainerException.php',
        'WP_Forge\\Container\\ContainerExceptionInterface' => __DIR__ . '/..' . '/wp-forge/container/includes/ContainerExceptionInterface.php',
        'WP_Forge\\Container\\ContainerInterface' => __DIR__ . '/..' . '/wp-forge/container/includes/ContainerInterface.php',
        'WP_Forge\\Container\\NotFoundException' => __DIR__ . '/..' . '/wp-forge/container/includes/NotFoundException.php',
        'WP_Forge\\Container\\NotFoundExceptionInterface' => __DIR__ . '/..' . '/wp-forge/container/includes/NotFoundExceptionInterface.php',
        'WP_Forge\\UpgradeHandler\\UpgradeHandler' => __DIR__ . '/..' . '/wp-forge/wp-upgrade-handler/includes/UpgradeHandler.php',
        'WP_Forge_Plugin_Check' => __DIR__ . '/..' . '/wp-forge/wp-plugin-check/wp-plugin-check.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit45601877d29826fa8045b75f1fe9d36a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit45601877d29826fa8045b75f1fe9d36a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit45601877d29826fa8045b75f1fe9d36a::$classMap;

        }, null, ClassLoader::class);
    }
}

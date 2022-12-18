<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite09c7226e9761d41ec4cb889a54a63cf
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite09c7226e9761d41ec4cb889a54a63cf::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8d6ed0e58f947e2b76f8edfb721f7673
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Ekanesh_prayer\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ekanesh_prayer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Ekanesh_prayer\\CPT\\Confessions' => __DIR__ . '/../..' . '/src/CPT/Confessions.php',
        'Ekanesh_prayer\\CPT\\Prayers' => __DIR__ . '/../..' . '/src/CPT/Prayers.php',
        'Ekanesh_prayer\\Form\\Form' => __DIR__ . '/../..' . '/src/Form/Form.php',
        'Ekanesh_prayer\\Form\\Get_Sins' => __DIR__ . '/../..' . '/src/Form/Get_Sins.php',
        'Ekanesh_prayer\\Form\\Submission' => __DIR__ . '/../..' . '/src/Form/Submission.php',
        'Ekanesh_prayer\\Menu\\Menu_Group' => __DIR__ . '/../..' . '/src/Menu/Menu_Group.php',
        'Ekanesh_prayer\\Metaboxes\\Confessions\\Confessions_Metaboxes' => __DIR__ . '/../..' . '/src/Metaboxes/Confessions/Confessions_Metaboxes.php',
        'Ekanesh_prayer\\Metaboxes\\Prayers\\Prayer_Metaboxes' => __DIR__ . '/../..' . '/src/Metaboxes/Prayers/Prayer_Metaboxes.php',
        'Ekanesh_prayer\\Metaboxes\\Sins\\Sins_Metaboxes' => __DIR__ . '/../..' . '/src/Metaboxes/Sins/Sins_Metaboxes.php',
        'Ekanesh_prayer\\Prayer\\Select_Prayer' => __DIR__ . '/../..' . '/src/Prayer/Select_Prayer.php',
        'Ekanesh_prayer\\Shortcode\\Form_Shortcode' => __DIR__ . '/../..' . '/src/Shortcode/Form_Shortcode.php',
        'Ekanesh_prayer\\Taxonomy\\Sins_Category' => __DIR__ . '/../..' . '/src/Taxonomy/Sins_Category.php',
        'Ekanesh_prayer\\cpt\\Sins' => __DIR__ . '/../..' . '/src/CPT/Sins.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8d6ed0e58f947e2b76f8edfb721f7673::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8d6ed0e58f947e2b76f8edfb721f7673::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8d6ed0e58f947e2b76f8edfb721f7673::$classMap;

        }, null, ClassLoader::class);
    }
}

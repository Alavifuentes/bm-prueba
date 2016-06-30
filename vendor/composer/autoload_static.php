<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit894535e58b6d132ececf0415dfa568f3
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixLengthsPsr4 = array (
        'y' => 
        array (
            'yii\\swiftmailer\\' => 16,
            'yii\\gii\\' => 8,
            'yii\\faker\\' => 10,
            'yii\\debug\\' => 10,
            'yii\\composer\\' => 13,
            'yii\\codeception\\' => 16,
            'yii\\bootstrap\\' => 14,
            'yii\\authclient\\' => 15,
            'yii\\' => 4,
        ),
        'd' => 
        array (
            'dosamigos\\datepicker\\' => 21,
        ),
        'c' => 
        array (
            'chrmorandi\\jasper\\' => 18,
            'cebe\\markdown\\' => 14,
        ),
        'L' => 
        array (
            'Libern\\QRCodeReader\\' => 20,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'yii\\swiftmailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-swiftmailer',
        ),
        'yii\\gii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-gii',
        ),
        'yii\\faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-faker',
        ),
        'yii\\debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-debug',
        ),
        'yii\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-composer',
        ),
        'yii\\codeception\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-codeception',
        ),
        'yii\\bootstrap\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-bootstrap',
        ),
        'yii\\authclient\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-authclient',
        ),
        'yii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2',
        ),
        'dosamigos\\datepicker\\' => 
        array (
            0 => __DIR__ . '/..' . '/2amigos/yii2-date-picker-widget/src',
        ),
        'chrmorandi\\jasper\\' => 
        array (
            0 => __DIR__ . '/..' . '/chrmorandi/yii2-jasper/src/Jasper',
        ),
        'cebe\\markdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/cebe/markdown',
        ),
        'Libern\\QRCodeReader\\' => 
        array (
            0 => __DIR__ . '/..' . '/libern/qr-code-reader/src',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
        'D' => 
        array (
            'Diff' => 
            array (
                0 => __DIR__ . '/..' . '/phpspec/php-diff/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit894535e58b6d132ececf0415dfa568f3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit894535e58b6d132ececf0415dfa568f3::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit894535e58b6d132ececf0415dfa568f3::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}

<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
        'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
            'layout'=> 'main'
        ],
            'yii2images' => [
                'class' => 'rico\yii2images\Module',
                //be sure, that permissions ok
                //if you cant avoid permission errors you have to create "images" folder in web root manually and set 777 permissions
                'imagesStorePath' => 'upload/store', //path to origin images
                'imagesCachePath' => 'upload/cache', //path to resized copies
                'graphicsLibrary' => 'GD', //but really its better to use 'Imagick'
                'placeHolderPath' => '../upload/store/no-image.png', // if you want to get placeholder when image not exists, string will be processed by Yii::getAlias
            ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'VwYVCvFRZVcSgfy84ATBmGuCrOGk75i3',
            'baseUrl' => ''
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\modules\admin\models\User',
           'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'server195.hosting.reg.ru',  // e.g. smtp.mandrillapp.com or smtp.gmail.com
                'username' => 'info@gift.all2you.ru',
                'password' => 'sophia1953',
                'port' => '465', // Port 25 is a very common port too
                'encryption' => 'ssl', // It is often used, check your provider or mail server specs
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],

        'db' => $db,
        'keyStorage' => [
            'class' => 'components\keyStorage\KeyStorage',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<action>'=>'site/<action>',
                    ],
            ],
        'assetManager' => [
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'sourcePath' => null,
                    'js' => ['js/jquery.js'] // тут путь до Вашего экземпляра jquery
                ],
            ],
        ]
    ],
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\Controller',
            'access' => ['@'], //глобальный доступ к фаил менеджеру @ - для авторизорованных , ? - для гостей , чтоб открыть всем ['@', '?']
            'disabledCommands' => ['netmount'], //отключение ненужных команд https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#commands
            'roots' => [
                [
                    'baseUrl'=>'/web',
                    'path' => 'upload/global',
                    'name' => 'Global'
                ],
//                [
//                    'class' => 'mihaildev\elfinder\volume\UserPath',
//                    'path'  => 'files/user_{id}',
//                    'name'  => 'My Documents'
//                ],
//                [
//                    'path' => 'files/some',
//                    'name' => ['category' => 'my','message' => 'Some Name'] //перевод Yii::t($category, $message)
//                ],
//                [
//                    'path'   => 'files/some',
//                    'name'   => ['category' => 'my','message' => 'Some Name'], // Yii::t($category, $message)
//                    'access' => ['read' => '*', 'write' => 'UserFilesAccess'] // * - для всех, иначе проверка доступа в даааном примере все могут видет а редактировать могут пользователи только с правами UserFilesAccess
//                ]
            ],
//            'watermark' => [
//                'source'         => __DIR__.'/logo.png', // Path to Water mark image
//                'marginRight'    => 5,          // Margin right pixel
//                'marginBottom'   => 5,          // Margin bottom pixel
//                'quality'        => 95,         // JPEG image save quality
//                'transparency'   => 70,         // Water mark image transparency ( other than PNG )
//                'targetType'     => IMG_GIF|IMG_JPG|IMG_PNG|IMG_WBMP, // Target image formats ( bit-field )
//                'targetMinPixel' => 200         // Target image minimum pixel size
//            ]
        ]
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['*'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['*'],
    ];
}

return $config;
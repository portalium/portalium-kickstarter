<?php
return [
    'id' => 'api',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [
        'site' => [
            'class' => 'portalium\site\Module'
        ],
        'user' => [
            'class' => 'portalium\user\Module',
        ],
    ],
    'components' => [
        'request' => [
            'cookieValidationKey' => '',
            'csrfParam' => '_csrf-api',
            'class' => 'portalium\web\Request',
            'web'=> '/api/web',
            'aliasUrl' => '/api'
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'user' => [
            'identityClass' => 'portalium\user\models\User',
            'enableAutoLogin' => false,
            'loginUrl' => '',
            'identityCookie' => [
                'name' => '_identity-api',
            ],
        ],
        'session' => [
            'name' => 'portalium-api',
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
    ]
];

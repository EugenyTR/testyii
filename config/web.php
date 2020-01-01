<?php

    return [
        'id' => 'testyii',
        'basePath' => realpath(__DIR__ . '/../'),
        'bootstrap' => ['debug'],
        'components' => [
            'urlManager' => [
                'enablePrettyUrl' => true,
                'showScriptName' => false
            ]
        ],
        'modules' => [
            'debug' => [
                'class' => 'yii\debug\Module'
            ]
        ]
    ];

?>
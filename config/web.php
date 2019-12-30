<?php

    return [
        'id' => 'testyii',
        'basePath' => realpath(__DIR__ . '/../'),
        'components' => [
            'urlManager' => [
                'enablePrettyUrl' => true,
                'showScriptName' => false
            ]
        ]
    ];

?>
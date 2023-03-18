<?php

return [
    /* App */
    'name' => "MiniApp",

    /* Logging */
    'logDir' => 'storage/logs/',
    'logLevel' => 'debug',
    'logFormat' => "[{date}] [{level}]{level-padding} {message}",
    'logExtension' => 'log',
    'logPrefix' => 'app_',

    /* Views */
    'views' => VIEWSPATH,
    'viewsCache' => ROOTPATH . 'storage' . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR,

    /* Misc */
    'timezone' => 'Europe/Amsterdam',
    'debug' => true,
];
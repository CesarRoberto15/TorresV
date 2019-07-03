<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'AdminLTE' => $baseDir . '/vendor/maiconpinto/cakephp-adminlte-theme/',
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'BootstrapUI' => $baseDir . '/vendor/friendsofcake/bootstrap-ui/',
        'CakeCaptcha' => $baseDir . '/vendor/captcha-com/cakephp-captcha/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/',
        'WyriHaximus/TwigView' => $baseDir . '/vendor/wyrihaximus/twig-view/'
    ]
];
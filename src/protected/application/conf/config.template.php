<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$config = include 'conf-base.php';

// devel
return array_merge($config,
    array(
        'base.url' => 'http://localhost:8000/',
        // development, staging, production
        'app.mode' => 'development',

        'doctrine.isDev' => true,

        // 'slim.middlewares' => array( new \MapasCulturais\Middlewares\ExecutionTime(true, false) ),

        // logs
        'slim.log.level' => \Slim\Log::DEBUG,
        'slim.log.enabled' => true,

        'app.log.hook' => true,
        'app.log.query' => false,
        'app.log.requestData' => false,
        'app.log.translations' => false,
        'app.log.apiCache' => true,

        // cache
        'app.useApiCache' => false,
        'app.apiCache.lifetime' => 10 * 60,

        'app.useTranslationsCache' => true,

        'app.useRegisterCache' => true,
        'app.registerCache.lifeTime' => 10 * 60,

        'app.cache' => new \Doctrine\Common\Cache\ArrayCache(),

        /*
        'auth.provider' => 'Fake',
        'auth.config' => array(),
        // */

//      Example OpauthGoogle
//        'auth.provider' => 'OpauthGoogle',
//        'auth.config' => array(
//            'client_id' => '1_5zhq2l7g9i0w8404gsgok8o4skw8gkwo8kg840gk0oc4ksskkg',
//            'client_secret' => '3skn6rpxmrgg8cg800w880s0w88s00gc0kc0008gws484ok04g',
//            'host' => 'http://localhost:8000/',
//            'userinfo_path' => 'api/v1/person',
//            'auth_path' => 'oauth/v2/auth',
//            'token_path' => 'oauth/v2/token',
//            'logout_path' => 'logout'
//        ),

        'plugins.enabled' => array(
            'agenda-singles',
            'endereco'
        )
    )
);

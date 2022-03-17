<?php
// estende a configuração basica
//$config = include 'conf-base.php';
//Alterada em 25-10-16 a pedido do Gustavo Lima/Marcus via Telegram
$config = include __DIR__.'/conf-base.php';

// o arroba é para não imprimir um erro quando executar pela linha de comando
$domain = @$_SERVER['HTTP_HOST'];
//echo '<pre>';
//die(var_dump($_SERVER));
$app_mode = 'development'; // development ou production

$assets_path = BASE_PATH . 'assets/';

//if ($domain == '127.0.0.1:8001'){
// if (($domain == '127.0.0.1:8001') || ($domain == '192.168.15.53:8001')){
    $config['themes.active'] = 'CulturaViva';
    $config['base.url'] = 'http://dev.culturaviva.gov.br/';
//    $config['base.assetUrl'] ='http://culturaviva.gov.br/assets/rcv/';
    $config['base.assetUrl'] ='http://dev.culturaviva.gov.br/assets/';
    $assets_path = BASE_PATH . 'assets/rcv/';
// }    

return array_merge($config,
    array(
        'themes.active' => 'CulturaViva',
        
        'app.cache.namespace' => 'cultura.dev',
        // disable cache

        // 'app.usePermissionsCache' => false,
        // 'app.cache' => new \Doctrine\Common\Cache\ArrayCache(),

        #'app.cache' => new \Doctrine\Common\Cache\ArrayCache(), # Add 29-01-2018 Disable Cache
        'namespaces' => array_merge( $config['namespaces'],
            [
                'Subsite' => THEMES_PATH.'Subsite',
                'BaseMinc' => THEMES_PATH.'mapasculturais-baseminc',
                'MapasMuseus' => THEMES_PATH.'mapasculturais-museus',
                'MapasBR' => THEMES_PATH.'mapasculturais-br',
                'MapaBibliotecas' => THEMES_PATH.'mapasculturais-bibliotecas',
                'CulturaViva' => THEMES_PATH.'mapasculturais-culturaviva'
            ]
        ),
        /*
                'themes.assetManager' => new \MapasCulturais\AssetManagers\FileSystem(array(
                //'publishPath' => BASE_PATH . 'assets/',
                 'publishPath' => $assets_path,

                    'mergeScripts' => $app_mode !== 'development',
                    'mergeStyles' => $app_mode !== 'development',

                    'process.js' => $app_mode === 'development' ?
                            'cp {IN} {OUT}':
                            'uglifyjs {IN} -o {OUT} --source-map {OUT}.map --source-map-include-sources --source-map-url /assets/{FILENAME}.map -b -p ' . substr_count(BASE_PATH, '/'),

                    'process.css' => $app_mode === 'development' ?
                            'cp {IN} {OUT}':
                            'uglifycss {IN} > {OUT}',

                    'publishFolderCommand' => 'cp -R {IN} {PUBLISH_PATH}{FILENAME}'
                )),

        */

    //    'mailer.user' => "",
    //    'mailer.psw'  => "",
    //    'mailer.protocol' => 'tls',
    //    'mailer.server' => 'webmail.cultura.gov.br',
    //    'mailer.port'   => '25',
    //    'mailer.from' => 'naoresponda@cultura.gov.br',
    //    'notifications.entities.new' => true,
    //    'notifications.agents.new' => true,

        'app.mode' => $app_mode,
        'doctrine.isDev' => false,
        'slim.debug' => true,
        'slim.middlewares' => array(
            new MapasCulturais\Middlewares\ErrorHandler(function(){ return 'mapasculturais.log'; }),

            new MapasCulturais\Middlewares\ExecutionTime(false, false)
        ),

        'app.useGoogleGeocode' => true,
        'app.googleApiKey'     => 'AIzaSyDQoHRJXCY1S8TNTuoXT6yhVUtRisW6gK8',

        /*'app.geoDivisionsHierarchy' => array(
            'estado' => 'Estado',
            'municipio' => 'Município',
        ), */

        'app.geoDivisionsHierarchy' => [
            'estado'            => ['name' => \MapasCulturais\i::__('Estado'),          'showLayer' => true],
            'mesorregiao'       => ['name' => \MapasCulturais\i::__('Mesorregião'),     'showLayer' => true],
            'microrregiao'      => ['name' => \MapasCulturais\i::__('Microrregião'),    'showLayer' => true],
            'municipio'         => ['name' => \MapasCulturais\i::__('Município'),       'showLayer' => true],
            'setor_censitario'  => ['name' => \MapasCulturais\i::__('Setor Censitario'),'showLayer' => false]
        ],

        #'maps.center' => array(-23.54894, -46.63882), // são paulo
        'maps.center' => array(-15.79419, -47.88060), //brasilia

        // logs
        'slim.log.writer' => new \MapasCulturais\Loggers\File(function(){ return 'mapasculturais.log'; }),
        'app.log.path' => '/tmp/',

        'slim.log.level' => \Slim\Log::ERROR,
        'slim.log.enabled' => true,

        'app.log.hook' => false,
        'app.log.query' => false,
        'app.log.requestData' => false,
        'app.log.translations' => false,
        'app.log.apiCache' => false,

        // cache
        'app.useAssetsUrlCache' => true,
        // 'app.useApiCache' => true,
        // 'app.apiCache.lifetime' => 10 * 60,

        // 'app.useTranslationsCache' => true,

        // 'app.useRegisterCache' => true,
        // 'app.registerCache.lifeTime' => 10 * 60,

        'plugins.enabled' => array('em-cartaz','notifications'),

        'app.enabled.opportunities' => true,

        'plugins' => array(
            'ProjectPhases' => ['namespace' => 'ProjectPhases'],
            'AgendaSingles' => ['namespace' => 'AgendaSingles'],
            'SealModelTab' => ['namespace' => 'SealModelTab'],
            'SealModel1' => ['namespace' => 'SealModel1'],
            'SealModel2' => ['namespace' => 'SealModel2'],
            'SealModel3' => ['namespace' => 'SealModel3'],
            'SealModel4' => ['namespace' => 'SealModel4'],
            'SealModelMuseus' => ['namespace' => 'SealModelMuseus'],
            'SealModelMuseusSBM' => ['namespace' => 'SealModelMuseusSBM'],
            'FilterSubsite' => [
                'namespace' => 'FilterSubsite'

            ],
            'EvaluationMethodTechnical' => ['namespace' => 'EvaluationMethodTechnical'],
            'EvaluationMethodSimple' => ['namespace' => 'EvaluationMethodSimple'],
            'EvaluationMethodDocumentary' => ['namespace' => 'EvaluationMethodDocumentary'],
            'EvaluationMethodDocumentarySefic' => ['namespace' => 'EvaluationMethodDocumentarySefic'],
            'Fva' =>['namespace'=>'Fva'],
            'EvaluationMethodSefic' => ['namespace' => 'EvaluationMethodSefic'],
            //'FvaAdmin' =>['namespace'=>'FvaAdmin'],
            'SubsiteDomainSufix' => [
                'namespace' => 'SubsiteDomainSufix', 
                'config' => [
                    'sufix' => function () {
                        return 'mapas.cultura.gov.br';
                    }
                ]
            ]
        ),

        'notifications.entities.update' => 0,

        // 'doctrine.database' => array(
        //     'dbname'    => 'dbredeculturavivadev',
        //     'user'      => 'mapasculturaisdev',
        //     'password'  => '@minc123dev',
        //     'host'      => '10.0.0.229',
        // ),

        'cep.token' => '791c8f8cf19cfe26de1e4cd04b258cca',


        /*
        *Checar se vieram da aplicação em produção
        *
        *'client_id' =>     '36_321bjc2laa0ww0408w08s4ws8s088w0sk4ko08w4c4c808k84',
        *'client_secret' => '2964jfezpg5cggg4kc4kwkwkgg0k8www400csk0cwcw0w00cc8',
        *
        *'client_id' => '2_3lz63mcjbqio0k8cg08oggoo8s4scc088soswkokc4o4s4sggs'
        * 'client_secret' => '3coa6upuseyoogscsw44okwgo0sw8wwockw48c44s4w8wo84sk',
        */

        /**/
        // 'auth.provider' => 'OpauthLoginCidadao',
        // 'auth.config' => array(
        //     'client_id' => '2_3lz63mcjbqio0k8cg08oggoo8s4scc088soswkokc4o4s4sggs',
        //     'client_secret' => '3coa6upuseyoogscsw44okwgo0sw8wwockw48c44s4w8wo84sk',
        //     'auth_endpoint' => 'https://dev-id.cultura.gov.br/oauth/v2/auth',
        //     'token_endpoint' => 'https://dev-id.cultura.gov.br/oauth/v2/token',
        //     'logout_url' => 'https://dev-id.cultura.gov.br/logout',
        //     'user_info_endpoint' => 'https://dev-id.cultura.gov.br/api/v1/person.json'
        // ),

        /*
        'auth.provider' => 'Fake',
         'auth.config' => array(),
     */

    )
);
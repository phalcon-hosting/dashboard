<?php

/**
 * This configuration file must be set to work on production.
 */
return new \Phalcon\Config(array(
    'database' => array(
        'adapter'     => 'Mysql',
        'host'        => '',
        'username'    => '',
        'dbname'      => '',
        'password'    => '',
        'port'        => ''
    ),
    'application' => array(
        'controllersDir' => APPLICATION_PATH.'/controllers/',
        'modelsDir'      => APPLICATION_PATH.'/models/',
        'viewsDir'       => APPLICATION_PATH.'/views/',
        'pluginsDir'     => APPLICATION_PATH.'/plugins/',
        'libraryDir'     => APPLICATION_PATH.'/library/',
        'servicesDir'    => APPLICATION_PATH.'/services/',
        'cacheDir'       => APPLICATION_PATH.'/cache/',
        'locales'        => APPLICATION_PATH.'/messages/',
        'baseUri'        => '/',
        'testMode'       => false
    )
));
<?php
return array(
    'db' => array(
        'driver'    => 'PdoMysql',
        'hostname'  => 'localhost',
        'database'  => 'zf2-php-resque',
        'username'  => 'zf2-php-resque',
        'password'  => 'zf2-php-resque',
        // 'password'  => '',
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
);
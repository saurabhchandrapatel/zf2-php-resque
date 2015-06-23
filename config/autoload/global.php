<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
    // zfcuser
     // 'login_redirect_route' => '/login_redirect',
     'session' => array(
        'config' => array(
            'class' => 'Zend\Session\Config\SessionConfig',
            'options' => array(
                'name' => 'ndrugs_admin',
            ),
        ),
        'storage' => 'Zend\Session\Storage\SessionArrayStorage',
        'validators' => array(
            'Zend\Session\Validator\RemoteAddr',
            'Zend\Session\Validator\HttpUserAgent',
        ),
    ), 
    "email" => array( 
            "From"=> "XXXXXXXXX@gmail.com",
            "FromName" => "zf2-php-resque", 
            "SmtpOptions" => array ('name' => 'smtp.gmail.com',
                                    'host' => 'smtp.gmail.com',
                                    'connection_class' => 'plain',
                                    'port' => '587',
                                    'connection_config' => array(
                                    'ssl' => 'TLS', /* Page would hang without this line being added */
                                    'username' => 'XXXXXXXXXXX@gmail.com',
                                    'password' => 'XXXXXXX'
                                    )
                                )
    ) , 

    "Resque" => array (

                "setting" => array(
                    'REDIS_BACKEND'     => '127.0.0.1:6379',    // Set Redis Backend Info
                    'REDIS_BACKEND_DB'  => '0',                 // Use Redis DB 0
                    'COUNT'             => '1',                 // Run 1 worker
                    'INTERVAL'          => '1',                 // Run every 5 seconds
                    'QUEUE'             => '*',                 // Look in all queues
                    'PREFIX'            => 'zf2-php-resque',              // Prefix queues with test
                ),
                'Libpath' => "/var/www/git/zf2-php-resque/zf2-php-resque/trunk/module/Resquezf2/src/Resquezf2"
    )
    
 

    


    


);

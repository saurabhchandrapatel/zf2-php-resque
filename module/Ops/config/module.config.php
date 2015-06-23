<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(

    'controllers' => array(
        'invokables' => array(
                'Ops\Controller\Index' => 'Ops\Controller\IndexController'                          
        ),
    ),
    'view_manager' => array( 
        'template_path_stack' => array(
            'ops' => __DIR__ . '/../view',
        ),
        'template_map' => array(
            'layout/print'           => __DIR__ . '/../view/layout/print.phtml',
             
        ),

    ),
    'router' => array(
        'routes' => array(       

            'ops_home' => array( 
                'type'    => 'segment',
                 'options' => array(
                     'route'    => '/ops/index/index'
                 ), 
            ),
            'ops_index' => array(
                 'type'    => 'segment',
                 'options' => array(
                     'route'    => '/ops/index[/:action][/:id]', 
                     'constraints' => array( 
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         'id'     => '[0-9]+',
                     ),
                     'defaults' => array(
                         'controller' => 'Ops\Controller\Index',
                         'action'     => 'index',
                     ),
                 ),
             ), 
        ),
    ),

     

    
    

);

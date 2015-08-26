<?php
return array(

	'controllers' => array(
        'invokables' => array(
                'Resquezf2\Controller\Index' => 'Resquezf2\Controller\IndexController' 
        ),
    ),
	'view_manager' => array( 
        'template_path_stack' => array(
            'resquezf2' => __DIR__ . '/../view',
        ) 
    ),

	'console' => array(
        'router' => array(
            'routes' => array( 

                'run-worker' => array(
                    'options' => array(
                        'route'    => 'run-worker [all|disabled|deleted]:mode users [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'Resquezf2\Controller\Index',
                            'action'     => 'runWorker'
	                        )
	                    )
	            ), 


	            )
	        )
	    ),


	 // // BJyAuth 
  //    'bjyauthorize' => array( 
  //           'guards' => array( 
  //                   'BjyAuthorize\Guard\Controller' => array(  
  //                       array('controller' => 'Data\Controller\Index', 'roles' => array('guest')), 
  //                   ), 
  //                   'BjyAuthorize\Guard\Route' => array(   
  //                       array('route' => 'run-worker', 'roles' => array('guest')), 
  //                   ),
  //           ) 
  //   )

);
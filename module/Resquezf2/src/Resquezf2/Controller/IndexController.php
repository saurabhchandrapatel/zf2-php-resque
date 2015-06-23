<?php

namespace Resquezf2\Controller;
use Zend\Mvc\Controller\AbstractActionController;  
use Zend\Console\Request as ConsoleRequest;
use Resquezf2\Model;  

class IndexController extends AbstractActionController {  

    public function runWorkerAction()
    { 
        $config = $this->getServiceLocator()->get('Config')['Resque'];  
        $request = $this->getRequest();
        if (!$request instanceof ConsoleRequest) {
            throw new RuntimeException('You can only use this action from a console!');
        } 
        require $config['Libpath'].'/vendor/autoload.php';  
        foreach ($config['setting'] as $key => $value) {
            putenv(sprintf('%s=%s', $key, $value));
        }
        require_once $config['Libpath'].'/vendor/chrisboulton/php-resque/resque.php';  
    } 
}


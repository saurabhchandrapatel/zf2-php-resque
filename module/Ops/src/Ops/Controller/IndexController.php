<?php

namespace Ops\Controller;   
use Zend\Mvc\Controller\AbstractActionController;   
use Resquezf2\Model;   
class IndexController extends AbstractActionController {  
{  
    public function viewAction()
    {     
  
        $notification = new \Oms\Model\Notification( $this->getServiceLocator() );  
        $email  = array ("xxx@gmail.com");
        $phone = array("1234567890");
        $data['Items'] = array ( "item1" => "item1" ); 
        $notification->notify('order_dispatched_Buyer', $data , array("email" => $email , "phone"=> $phone ) );  
        return $this->view; 
    }  
}


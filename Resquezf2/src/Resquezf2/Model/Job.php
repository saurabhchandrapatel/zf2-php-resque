<?php 

namespace Resquezf2\Model;  
use Oms\Model\Notification;
class Job
{     

        public function setUp()
        {
          // ... Set up environment for this job
        }  
        public function perform()
        {             
              try{ 
                  $type  =  $this->args['type'] ;  
                  $data  =  $this->args['data'] ;  
                  // var_dump($data['shipping_address']); 
                  $to  =  $this->args['to'] ; 
                  $NotificationClass  =  @$this->args['notificationClass'];
                  $Notification = new Notification();  
                  if(!is_null($NotificationClass)){ 
                      $Notification = new $NotificationClass();
                  } 
                  $token = "job";
                  $Notification->notify( $type , $data  , $to , $token );
              }catch(\Exception $e){
                    "ok";
              }
        }   

        public function tearDown()
        {
          // ... Remove environment for this job
        }

}
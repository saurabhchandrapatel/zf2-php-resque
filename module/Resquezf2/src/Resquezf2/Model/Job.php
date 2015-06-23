<?php 

namespace Resquezf2\Model;  
use Oms\Model\Notification;
class Job
{     
 
        public function perform()
        {         
                try{
                  $type  =  $this->args['type'] ;  
                  $data  =  $this->args['data'] ;  
                  $to  =  $this->args['to'] ;   
                  $Notification = new Notification();
                  $token = "job";
                  $Notification->notify( $type , $data  , $to , $token );
                }catch(\Exception $e){
                    "ok";
               }
        }   
 

}
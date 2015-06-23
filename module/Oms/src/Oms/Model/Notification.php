<?php 
namespace Oms\Model;
use Application\Model\ApiEmail;
use Zend\Mail\Message;
use Zend\Mime\Message as MimeMessage;
use Zend\Mime\Part as MimePart;
use Zend\Mail\Transport\Sendmail as SendmailTransport;
use Zend\Mail\Transport\Smtp as SmtpTransport;
use Zend\Mail\Transport\SmtpOptions;
use Zend\View\Renderer\PhpRenderer;
use Zend\View\Resolver\TemplatePathStack;
use Zend\View\Model\ViewModel;
use Zend\View\Model\ModelInterface;
use Oms\Model\Sms as Sms;    
class Notification {   
         
        // order_reminder
        public function Order_Update_Delivery_Seller($data , $emails ){
                

                $emails = implode(",", $emails);


                // mail function here 

                // $this->__set("To", $emails  ); 
                // $body = $this->loadTpl( $data , "Order_Update_Delivery_Seller" );
                // $this->__set("Subject", "Status Change" );  
                // $this->__set("Body", $body ); 
                // $this->__set("Encoding", "UTF-8"  ); 
                // $this->send();

        } 
        //  
        public function notify(  $type , $data  , $to , $token = 'default' ){  
            
            if($token == 'job' ){    
                $smsNotify = $type."SMS";
                if(count($to['email'])){
                    $this->$type($data , $to['email']);
                }
                if(count($to['phone'])){
                    $Sms = new Sms(); 
                    $Sms->$smsNotify($data , $to['phone'] );
                } 

            }else{ 

                \Resque::setBackend('localhost:6379');
                $args = array(    'type' => $type,   'data' => $data, 'to' => $to  );
                \Resque::enqueue('healyoo', 'Resquezf2\Model\Job', $args );
            } 
        }  
}
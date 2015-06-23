<?php 
namespace Oms\Model;  
use Application\Model\ApiSms; 
class Sms {  

   
   public function order_confirmed_BuyerSMS($data , $phones){  

      $orders = "";
      $suborders =  explode(",", $data['suborder']); 
      foreach ( $suborders as $key => $value) {
          $orders .=  $data['Order']->id."-".$value .", ";
      }   

      // sms fuction here 

      // $data['text'] = "Hi, Thank you for placing order(s) ". $orders ." at Healyoo. Our expert team will review your prescription and will update you accordingly.";
      // $this->__set('To', implode(",", $phones  ) );
      // $this->__set('Text' , $data['text'] );
      // $this->send();   
       
  }



  




}
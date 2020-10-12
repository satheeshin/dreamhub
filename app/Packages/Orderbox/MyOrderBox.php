<?php

namespace App\Packages\Orderbox;


class MyOrderBox extends Baseapp
{ 
    public function __construct()
    {
    	
    }
    public function customers($parms=array(),$link='resellers/search.json?')
    {
     return $this->getrecords($parms,$link);   
    }
    
    public function domainavailable($parms=array(),$link='domains/available.json?')
    {      
     return $this->getrecords($parms,$link);     
    }

    public function transaction($parms=array(),$link='billing/reseller-transactions/search.json?')
    {      
     return $this->getrecords($parms,$link);     
    }

     public function archivedtransaction($parms=array(),$link='billing/reseller-archived-transactions/search.json?')
    {            
     return $this->getrecords($parms,$link);     
    }


    public function getresellerinfo($parms=array(),$link='resellers/details.json?')
    {          
     return $this->getrecords($parms,$link);     
    }

    public function resellersignup($parms=array(),$link='resellers/signup.json?')
    {         
     return $this->getrecords($parms,$link,$rec=false);     
    }
}

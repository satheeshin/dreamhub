<?php

namespace App\Packages\Orderbox;


class MyOrderBox extends Baseapp
{ 
    public function __construct()
    {
    	
    }
    public function customers($parms,$link='resellers/search.json?')
    {
     return $this->getrecords($parms,$link);   
    }
    
    public function domainavailable($parms,$link='domains/available.json?')
    {      
     return $this->getrecords($parms,$link);     
    }

    public function transaction($parms,$link='billing/reseller-transactions/search.json?')
    {      
     return $this->getrecords($parms,$link);     
    }

     public function archivedtransaction($parms,$link='billing/reseller-archived-transactions/search.json?')
    {            
     return $this->getrecords($parms,$link);     
    }


    public function getresellerinfo($parms,$link='resellers/details.json?')
    {          
     return $this->getrecords($parms,$link);     
    }

    public function resellersignup($parms,$link='resellers/signup.json?')
    {         
     return $this->getrecords($parms,$link,$rec=false);     
    }
}

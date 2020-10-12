<?php

namespace App\Packages\Orderbox;


class MyOrderBox 
{ 
    protected $authentication ;

    public function __construct()
    {
      $this->authentication= array(
        'auth-userid' => config('web.orderbox.id'),
        'api-key' => config('web.orderbox.key')
      );
    }



        public function getrecords($parms = array(), $url, $method = true)
        {
            echo gettype($this->authentication);
            exit;
            
            $records=array_merge($parms, $this->authentication);

            if ($method) 
            {
            $response = Http::timeout(2)->get('https://httpapi.com/api/'. $url, $records );
            } 
            else 
            {
            dd("http post method !!");
            }
            

            if ($response->successful()) {
            return ($response->body());
            }
            else{
            dd($response->body());
            }


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

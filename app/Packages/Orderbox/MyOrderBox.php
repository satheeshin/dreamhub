<?php
namespace App\Packages\Orderbox;
use Illuminate\Support\Facades\Http;

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

    protected function getrecords($parms = array(), $url, $method = true)
    {

        $records=array_merge($parms, $this->authentication);
        if ($method)   {
        $response = Http::timeout(2)->get('https://httpapi.com/api/'. $url, $records );
        } 
        else 
        dd("http post method !!");
       
        if ($response->successful()) {
        return ($response->json());
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

    public function promoprices($parms=array(),$link='resellers/promo-details.json?')
    {         
     return $this->getrecords($parms,$link);     
    }

    public function resellerprices($parms=array(),$link='resellers/reseller-cost-price.json?')
    {         
     return $this->getrecords($parms,$link);     
    }

  
}

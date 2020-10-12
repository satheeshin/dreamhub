<?php

namespace App\Packages\Whmcs;

use Illuminate\Support\Facades\Http;

class WhmcsApi
{

  protected  $postfields=array();

  protected  $apiurl='';
    
  public function __construct()
  {
    $this->postfields = array(
      'username' => config('web.whmcs.user'),
      'password' => config('web.whmcs.pass'),      
      'responsetype' => 'json',
  );  

  $this->apiurl=config('web.whmcs.url');

  }

  public function get($action='GetClients',$postarray=null)
  {
     
    $postfields=array('action' => $action);

    if($postarray){
      $postfields=array_merge($postfields,$postarray);
    }    
    $this->postfields=array_merge($this->postfields,$postfields);
      
    $response = Http::get($this->apiurl,$this->postfields);
    return $response->json();
    
  }

 
}

<?php

namespace App\Whmcs\Packages;

use Illuminate\Support\Facades\Http;

class BaseApi
{
  protected  $postfields=array();
  protected  $apiurl='';
    
  public function __construct()
  {
    $this->postfields = array(
      'username' => config('whmcs.login.username'),
      'password' => config('whmcs.login.password'),      
      'responsetype' => 'json',
  );  
  $this->apiurl=config('whmcs.apiurl');

  }

  public function get($action)
  {
      $this->postfields=array_merge($this->postfields,$action);
      
      $response = Http::get($this->apiurl,$this->postfields);
      return $response->json();
    
  }
}

<?php

namespace App\Packages\Orderbox;

use Illuminate\Support\Facades\Http;


class Baseapp
{
  public $authentication=array() ;

  public function __construct()
  {
    $this->authentication= array(
      'auth-userid' => config('web.orderbox.id'),
      'api-key' => config('web.orderbox.key')
    );
  }
 

  public function getrecords($parms = array(), $url, $method = true)
  {
    dd($this->authentication);
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




}

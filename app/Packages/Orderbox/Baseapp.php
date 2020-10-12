<?php

namespace App\Packages\Orderbox;

use Illuminate\Support\Facades\Http;

class Baseapp
{
  public function __construct()
  {
  }
  protected $authentication = array(
    'auth-userid' => '647512',
    'api-key' => 'kkey'
  );

  public function getrecords($parms = array(), $url, $method = true)
  {
    $records=array_merge($parms, $this->authentication);
    dd($records);

    if ($method) 
    {
      $response = Http::timeout(2)->get('https://httpapi.com/api/'. $url, $records );
    } 
    else 
    {
      
    }
    dd($response->body());

    if ($response->successful()) {
      dd($response->body());
    }


  }




}

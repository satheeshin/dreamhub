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


    if ($method) 
    {
      $response = Http::timeout(2)->get('https://httpapi.com/api/' . $url, array_merge($parms, $this->authentication));
    } 
    else 
    {
      $arrays = ['query' => array_merge($this->authentication, $parms)];
      // $request = $client->post($this->apiurl.$url,$arrays);
    }


    if ($response->successful()) {
      return $response->body();
    }


  }




}

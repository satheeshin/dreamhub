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
      $records=array_merge($parms, $this->authentication);
      dd($records);

      $response = Http::timeout(2)->get('https://httpapi.com/api/'. $url, $records );
    } 
    else 
    {
      $arrays = ['query' => array_merge($this->authentication, $parms)];
      // $request = $client->post($this->apiurl.$url,$arrays);
    }


    if ($response->successful()) {
      dd($response->body());
    }


  }




}

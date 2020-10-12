<?php

namespace App\Whmcs\Packages;

use App\Packages\Whmcs\BaseApi;
use Illuminate\Support\Facades\Http;

class Api
{

  protected  $baseapi;
    
  public function __construct(BaseApi $baseapi)
  {
    $this->baseapi=$baseapi;
  }

  public function get($action='GetClients',$postarray=null)
  {
    $postfields=array('action' => $action);

    if($postarray){
      $postfields=array_merge($postfields,$postarray);
    }

    return $this->baseapi->get($postfields);
  }
}

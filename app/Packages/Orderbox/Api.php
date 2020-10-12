<?php
namespace App\Packages\Orderbox;
use App\Packages\Orderbox\MyOrderBox;

class Api 
{
  protected  $get;

	public function __construct(MyOrderBox $get)
    {
    	$this->get=$get;
    }

    function createreseller($parms=array()) {
      $response =$this->get->resellersignup($parms);
    }

    function getinfo($parms=array())  {
      return $response =$this->get->getresellerinfo($parms);
    }

    function domainavailable ($parms=array()) {
      $records= $this->get->domainavailable($parms);
      foreach ($records as $key => $value) {
        $domains[$key]=$value['status'];
      }
      return $domains;
    }


   
}

<?php
namespace App\Packages\myorderbox;
use App\Packages\myorderbox\Orderbox;

class Api 
{
  protected  $get;

	public function __construct(Orderbox $get)
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
      $record= $this->get->domainavailable($parms);
      foreach ($record as $key => $value) {
        $domains[$key]=$value['status'];
      }
      return $domains;
    }


   
}

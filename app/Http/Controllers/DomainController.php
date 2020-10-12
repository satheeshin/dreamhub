<?php

namespace App\Http\Controllers;

use App\Packages\Whmcs\WhmcsApi;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }


    public function getprice(WhmcsApi $whmcsapi)
    {
      return $whmcsapi->get('GetTLDPricing');
    }
}

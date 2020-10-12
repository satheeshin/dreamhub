<?php

namespace App\Http\Controllers;

use App\Packages\Whmcs;
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


    public function domaincheck(Request $request,Whmcs $whmcs)
    {
       if ($request->domain && $request->ext) {

          $domain=$request->domain.$request->ext;
          return $whmcs->get('DomainWhois',[ 'domain' => $domain ]);
       }
       
      // return response()->json($request->domainname);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Packages\myrderbox\Api;

class TestController extends Controller
{
    //


    public function getinfo(Api $api)
    {
      return ($api->getinfo());
    }
}

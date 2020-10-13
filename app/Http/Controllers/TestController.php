<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Packages\Orderbox\MyOrderBox;

class TestController extends Controller
{

    public function getinfo(MyOrderBox $api)
    {
      dd($api->resellerprices());
    }
}

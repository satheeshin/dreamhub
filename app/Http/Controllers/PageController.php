<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
      return view('pages.home');
    }

    public function cloudHosting()
    {
      return view('pages.cloud_hosting');
    }

    public function cloudserver()
    {
      return view('pages.cloud_server');
    }

    public function developercloud()
    {
      return view('pages.developer_cloud');
    }
    
    public function customcloud()
    {
      return view('pages.custom_cloud');
    }
}

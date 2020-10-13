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

    public function cloudServer()
    {
      return view('pages.cloud_server');
    }

    public function developerCloud()
    {
      return view('pages.developer_cloud');
    }
    
    public function customCloud()
    {
      return view('pages.custom_cloud');
    }

    public function dedicatedCloud()
    {
      return view('pages.dedicated_cloud');
    }

    public function blockStorage()
    {
      return view('pages.block_storage');
    }
}

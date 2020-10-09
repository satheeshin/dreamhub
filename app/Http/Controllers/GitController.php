<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GitController extends Controller
{
    public function index()
    {
        $data   = [];
        $data[] = shell_exec("git pull https://satheeshdomainindia:Pass21zz@github.com/satheeshdomainindia/dreamhub.git");   
        dd($data);
    }


    public function github()
    {
        $data[] = shell_exec("git pull https://satheeshdomainindia:Pass21zz@github.com/satheeshdomainindia/dreamhub.git");   
        dd($data);
        Log::info($data);
    }
}

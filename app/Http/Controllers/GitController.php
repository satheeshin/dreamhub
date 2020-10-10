<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GitController extends Controller

{


    public function index()
    {
        $gitpass=config('web.github.pass');
        $data   = [];
        $data[] = shell_exec("git pull https://satheeshdomainindia:".$gitpass."@github.com/satheeshdomainindia/dreamhub.git");   
        dd($data);
    }


    public function cloudhub()
    {
        $gitpass=config('web.github.pass');
        $data   = [];
        $data[] = shell_exec("cd /home/admin/web/dreamhost.in/public_html/dreamhub/cloudhub/ && git pull https://satheeshdomainindia:".$gitpass."@github.com/satheeshdomainindia/cloudhub.git && git status");   
        dd($data);
    }


   
}

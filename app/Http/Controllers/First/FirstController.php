<?php

namespace App\Http\Controllers\First;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('test1');
    }

    public function test($id = ""){
        return "controller test $id";
    }
    public function test1($id = ""){
        return "controller test $id";
    }

}

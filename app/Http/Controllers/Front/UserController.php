<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class St{
     public $name;
     public $age = 32;
     public $address;
}


class UserController extends Controller
{
    public function showAdminName(){

        $data=[];
        $data['id']=115;
        $data['age']=24;
        $data['name']='ayman';

        $obj = new St();
        $obj-> name = "ayman";
        $obj-> addres = "elaqlya";

        return view('lan', $data, compact('obj'));
    }
}

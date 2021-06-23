<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller;

class Frontcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('showindex','landingpage');
    }

    public function show(){
        return 'front controller created';
    }

    public function landingpage(){
        return view('landing');
    }


    public function showindex(){
        $data=[];
        $data['id']=1;
        $data['name']='mohamed eid';
        $data['age']=25;

        $obj= new \stdClass();
        $obj->name='mohamed hassasn';
        $obj->age=23;
        return view('welcome',compact('obj'));
    }
}


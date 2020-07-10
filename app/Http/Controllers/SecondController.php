<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondController extends Controller
{
  public  function __construct()
  {
      $this->middleware('auth')->except('show');}

    public  function show(){
         $data=[];
            $data['id']=1; $data['name']='mouemen';
        return view('welcome',$data);
    }
}

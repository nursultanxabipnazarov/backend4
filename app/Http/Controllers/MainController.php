<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public  function mainFun(){

        return "Bul Main Controller";
    }


    public  function getTest(){
         return view('index');
    }

}

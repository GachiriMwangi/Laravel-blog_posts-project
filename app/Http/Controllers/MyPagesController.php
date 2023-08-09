<?php

namespace App\Http\Controllers;


class MyPagesController extends Controller
{
    public function myindex(){
        return "MyIndex";
    }


    public function about(){
        return view('pages.about');
    }
    public function services(){
        return view('pages.services');
    }

    public function class_works(){
        return view('pages.class');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MrController extends Controller
{
    public function pageOne($name, $id){
      $array = array(
        array('Motel', 'Hotel', 'Restaurant'),
        array('Bugatti', 'Audi', 'Ferrari'),
        array('HP', 'Dell', 'Lenovo'),
        array('Garden City', 'Juja City', 'Thika Road')
      );
        return view("MrPages.Page1")->with('array', $array);
    }

    public function pageTwo(){
        return view('MrPages.page2');
    }
}
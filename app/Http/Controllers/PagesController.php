<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function index(){
        $title = 'Welcome to Laravel, Playing around with webpages.';
        return view('pages.index', compact('title'));
    }

    public function about(){
        $about_page = "Want to learn more? Visit www.gdaniel.com";
        return view('Pages.about')->with('about_page', $about_page);
        //pass a value.
    }
    public function services(){
        //pass data
$data = array(
    'title' => 'Services Page...',
    'services' => ['Web Design', 'Programming', 'SEO', 'Management', 'Graphic Design']
);
        return view('pages.services')->with($data);
    }

    public function change_title(){
        $heading_one = 'Get here as soon as possible';
       // return view('pages.change_title', compact('heading_one'));
       return view('pages.change_title')->with('heading_one', $heading_one);
    }

    public function display_array(){
        $array = array(
            'sports' => ['Squates', 'Deadlifts', 'Benchpress', 'Pullups']
        );
        return view('pages.array')->with($array);
    }

    public function sass_works(){
        return view('welcoming');
    }

    public function location(){
        $contacts = '+254112211691';
        return view('pages.location')->with('contacts', $contacts);
    }
}
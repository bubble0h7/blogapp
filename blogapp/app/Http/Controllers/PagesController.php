<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'HOME';
        return  view('pages/home', compact('title'));

        //return view('pages/home')->with('HOME', $title);

        //return  view('pages/home');
    }

    public function about(){
        $title = 'ABOUT ME';
        return view('pages/about', compact('title'));
    }

    public function blog(){
        $title = 'BLOG';
        return view('pages/blog', compact('title'));
    }
}

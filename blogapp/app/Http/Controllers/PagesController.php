<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $tab = 'HOME';
        return  view('pages/home', compact('tab'));

        //return view('pages/home')->with('HOME', $title);

        //return  view('pages/home');
    }

    public function about(){
        $tab = 'ABOUT ME';
        return view('pages/about', compact('tab'));
    }

    /* public function blog(){
        $tab = 'BLOG';
        return view('pages/blog', compact('tab'));

        //$posts = Post::orderBy('created_at', 'desc')->take(1)->get();
        //$posts = Post::orderBy('created_at', 'desc')->get();
        //$tab = 'BLOG';
        //return view('pages/blog', compact('tab', 'posts'));
    } */

    /* public function blog()
    {
        $latestpost = Post::orderBy('created_at', 'desc')->take(1)->get();
        $tab = 'BLOG';
        return view('pages/blog', compact('tab', 'latestpost'));
    } */
}

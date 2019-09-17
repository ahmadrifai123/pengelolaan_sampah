<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Data;
use Image;

class HomeController extends Controller
{
   


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // $data=Data::orderBy('id','desc')->get();

// 
        //  $data=Data::orderBy('id','desc')->get();
        // return view('data.list',compact('data')); 
     
        // return view('home.home',compact('data'));
        return view('home.home');
    }
}

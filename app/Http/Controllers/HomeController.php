<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
    
    
    
    public function categorie()
    {
        return view('category');
    }
    
    
    public function form()
    {
        return view('form');
    }
    
    public function map()
    {
        return view('map');
    }
}

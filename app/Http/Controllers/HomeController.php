<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Default Homepage
     * @return string
     */
    public function index(){
        $title = 'Home Title 001';
        return view('welcome',compact('title'));
    }
}

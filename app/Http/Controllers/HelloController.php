<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        return view('layouts.app');
    }
    public function content(){
        return view('blog.content');
    }
}

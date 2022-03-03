<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index($id){
        return redirect('https://www.educastudio.com/news/'.$id);
    }
}

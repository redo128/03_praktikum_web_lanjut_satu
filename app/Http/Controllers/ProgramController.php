<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function pro1(){
        return redirect("https://www.educastudio.com/program/karir");
    }
    public function pro2(){
        return redirect('https://www.educastudio.com/program/magang');
    }
    public function pro3(){
        return redirect('https://www.educastudio.com/program/kunjungan-industri');
    }
}


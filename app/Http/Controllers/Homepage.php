<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homepage extends Controller
{
    public function index(){
        return view('homepage.page.home',[
            'title' => 'Beranda - Catering Box 3 Putri',
        ]);
    }
}

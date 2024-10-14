<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\MenuGallery;
use App\Models\MenuPeriode;
use App\Models\Paket;
use Illuminate\Http\Request;

class Homepage extends Controller
{
    public function index(){

        $data = Paket::all();
        $contact = Contact::all();
        $menuPeriode = MenuPeriode::all();
        $menuGallery = MenuGallery::all();

        return view('homepage.page.home',[
            'title' => 'Beranda - Catering Box 3 Putri',
            'data' => $data,
            'contact' => $contact,
            'menuPeriode' => $menuPeriode,
            'menuGallery' => $menuGallery,
        ]);
    }

    public function contact(){
        $contact = Contact::all();
        return view('homepage.page.contact',[
            'title' => 'Contact Us',
            'contact' => $contact,
        ]);
    }
}

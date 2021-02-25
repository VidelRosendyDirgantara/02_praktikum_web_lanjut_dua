<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Mohammad Videla Rosendy Dirgantara 1941720123';
    }

    public function articles($id){
        return 'Halaman Artikel dengan id '.$id;
    }
}

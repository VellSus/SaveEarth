<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function bagaimana(): View
    {
        return view('bagaimana');
    }

    public function beranda(): View
    {
        return view('beranda'); 
    }

    public function ceritaFauna(): View
    {
        return view('ceritafauna');
    }

    public function ceritaPohon(): View
    {
        return view('ceritapohon');
    }

    public function kapan(): View
    {
        return view('kapan'); 
    }

    public function katalog(): View
    {
        return view('katalog'); 
    }

}
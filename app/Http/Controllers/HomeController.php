<?php

namespace App\Http\Controllers;

use App\Models\Bayi;
use App\Models\Dokumentasi;
use App\Models\IbuHamil;
use App\Models\Lansia;

class HomeController extends Controller
{
    public function index()
    {
        $countBayi = Bayi::count();
        $countLansia = Lansia::count();
        $countIbuHamil = IbuHamil::count();
        $countDokumentasi = Dokumentasi::count();
        return view('home', compact('countBayi', 'countLansia', 'countIbuHamil', 'countDokumentasi'));
    }
    public function landingpage()
    {
        return view('welcome');
    }
}
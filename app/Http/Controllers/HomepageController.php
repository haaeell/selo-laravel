<?php

namespace App\Http\Controllers;

use App\Models\Bayi;
use App\Models\Dokumentasi;
use App\Models\IbuHamil;
use App\Models\Lansia;

class HomepageController extends Controller
{
    public function organisasi($nama)
    {
        $jumlahBayi = Bayi::count();
        $jumlahLansia = Lansia::count();
        $jumlahIbu = IbuHamil::count();
        return view('homepage.organisasi.index', compact('nama', 'jumlahBayi', 'jumlahLansia', 'jumlahIbu'));
    }
    public function dokumentasi()
    {
        $dokumentasi = Dokumentasi::all();
        return view('homepage.dokumentasi.index', compact('dokumentasi'));
    }
    public function detailDokumentasi($id)
    {
        $item = Dokumentasi::findOrFail($id);
        return view('homepage.dokumentasi.detail', compact('item'));
    }
    public function kontak()
    {
        return view('homepage.kontak.index');
    }
}

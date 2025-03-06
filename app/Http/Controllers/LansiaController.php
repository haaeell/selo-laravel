<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lansia;

class LansiaController extends Controller
{
    public function index()
    {
        $lansia = Lansia::all();
        return view('admin.lansia.index', compact('lansia'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
        ]);

        Lansia::create($request->all());

        return redirect()->back()->with('success', 'Data lansia berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
        ]);

        $lansia = Lansia::findOrFail($id);
        $lansia->update($request->all());

        return redirect()->back()->with('success', 'Data lansia berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $lansia = Lansia::findOrFail($id);
        $lansia->delete();

        return redirect()->back()->with('success', 'Data lansia berhasil dihapus!');
    }
}


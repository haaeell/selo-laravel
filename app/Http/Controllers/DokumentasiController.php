<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumentasi;
use Illuminate\Support\Facades\Storage;

class DokumentasiController extends Controller
{
    public function index()
    {
        $dokumentasi = Dokumentasi::all();
        return view('admin.dokumentasi.index', compact('dokumentasi'));
    }

    public function create()
    {
        return view('admin.dokumentasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'tanggal' => 'required|date',
        ]);

        $gambar = $request->file('gambar');
        $gambarNama = time() . '.' . $gambar->getClientOriginalExtension();
        $gambar->move(public_path('dokumentasi-kegiatan'), $gambarNama);
        $gambarPath = 'dokumentasi-kegiatan/' . $gambarNama;

        Dokumentasi::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarPath,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('dokumentasi.index')->with('success', 'Dokumentasi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $dokumentasi = Dokumentasi::findOrFail($id);
        return view('admin.dokumentasi.edit', compact('dokumentasi'));
    }

    public function update(Request $request, $id)
    {
        $dokumentasi = Dokumentasi::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'tanggal' => 'required|date',
        ]);

        if ($request->hasFile('gambar')) {
            if ($dokumentasi->gambar && file_exists(public_path($dokumentasi->gambar))) {
                unlink(public_path($dokumentasi->gambar));
            }

            $gambar = $request->file('gambar');
            $gambarNama = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('dokumentasi-kegiatan'), $gambarNama);
            $gambarPath = 'dokumentasi-kegiatan/' . $gambarNama;

            $dokumentasi->gambar = $gambarPath;
        }


        $dokumentasi->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('dokumentasi.index')->with('success', 'Dokumentasi berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $dokumentasi = Dokumentasi::findOrFail($id);
        Storage::disk('public')->delete($dokumentasi->gambar);
        $dokumentasi->delete();

        return redirect()->route('dokumentasi.index')->with('success', 'Dokumentasi berhasil dihapus!');
    }
}

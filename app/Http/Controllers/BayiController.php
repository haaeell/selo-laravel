<?php
namespace App\Http\Controllers;

use App\Models\Bayi;
use Illuminate\Http\Request;

class BayiController extends Controller
{
    public function index()
    {
        $bayi = Bayi::all();
        return view('admin.bayi.index', compact('bayi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required'
        ]);

        Bayi::create($request->all());
        return redirect()->back()->with('success', 'Data Bayi berhasil ditambahkan.');
    }

    public function update(Request $request, Bayi $bayi)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required'
        ]);

        $bayi->update($request->all());
        return redirect()->back()->with('success', 'Data Bayi berhasil diperbarui.');
    }

    public function destroy(Bayi $bayi)
    {
        $bayi->delete();
        return redirect()->back()->with('success', 'Data Bayi berhasil dihapus.');
    }
}


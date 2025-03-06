<?php
namespace App\Http\Controllers;

use App\Models\IbuHamil;
use Illuminate\Http\Request;

class IbuHamilController extends Controller
{
    public function index()
    {
        $ibuHamil = IbuHamil::all();
        return view('admin.ibu-hamil.index', compact('ibuHamil'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required'
        ]);

        IbuHamil::create($request->all());
        return redirect()->back()->with('success', 'Data ibuHamil berhasil ditambahkan.');
    }

    public function update(Request $request, ibuHamil $ibuHamil)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required'
        ]);

        $ibuHamil->update($request->all());
        return redirect()->back()->with('success', 'Data ibuHamil berhasil diperbarui.');
    }

    public function destroy(ibuHamil $ibuHamil)
    {
        $ibuHamil->delete();
        return redirect()->back()->with('success', 'Data ibuHamil berhasil dihapus.');
    }
}


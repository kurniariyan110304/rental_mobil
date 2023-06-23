<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipeMobil;

use function Ramsey\Uuid\v1;

class TipeMobilController extends Controller
{
    //menampilkan data
    function index()
    {
        $tipeMobilData = TipeMobil::get();
        return view('pages.tipemobil.index', compact('tipeMobilData'));
    }

    //menambahkan data
    function store(Request $request)
    {
        //validasi data yang masuk
        $tipeMobilData = $request->validate([
            'tipe' => 'required',
        ]);
        //simpan kedalam database
        TipeMobil::create($tipeMobilData);
        //mengalihkan ke halaman awal
        return redirect()-> to('/tipemobil');
    }

    function create()
    {
        return view('pages.tipemobil.create');
    }

    //update data
    function update($id, Request $request)
    {
        //validasi data
        $validasiTipeMobil = $request->validate([
            'tipe' => 'required'
        ]);
        //lakukan update data
        //$tipeMobilData = TipeMobil::find($id);
        //$tipeMobilData->update($validasiTipeMobil);
        TipeMobil::find($id)->update($validasiTipeMobil);
        //redirect
        return redirect()->to('/tipemobil');
    }

    function edit($id)
    {
        $tipeMobilData = TipeMobil::find($id);
        return view('pages.tipemobil.edit', compact('tipeMobilData'));
    }

    function delete($id)
    {
        TipeMobil::find($id)->delete();
        //$tipeMobilData = TipeMobil::find($id);
        //$tipeMobilData->delete();

        return redirect()->to('/tipemobil');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\tblBayar;
use Illuminate\Http\Request;

class TambahController extends Controller
{

    public function index()
    {
        $data = tblBayar::all();
        return view('bayar.index',compact('data'));
    }

    public function create()
    {
        return view('bayar.create');
    }

    public function store(Request $request)
    {
        tblBayar::create([
            'nik'=>$request->nik,
            'nm_bank_pengirim'=>$request->bank,
            'nm_pengirim'=>$request->pengirim,
            'norek_pengirim'=>$request->norek,
            'file'=>$request->file,
            'tanggal_upload'=>date('d-M-Y'),
        ]);

        return redirect()->route('indexBayar');
    }

    public function edit($id)
    {
        $data = tblBayar::findOrFail($id);
        return view('bayar.edit',compact('data'));
    }

    public function editStore(Request $request,$id)
    {
        $data = tblBayar::findOrFail($id);
        $data->update([
            'nm_bank_pengirim'=>$request->bank,
            'nm_pengirim'=>$request->pengirim,
            'norek_pengirim'=>$request->norek,
            'file'=>$request->file,
        ]);

        return redirect()->route('indexBayar');
    }

    public function delete($id)
    {
        $data = tblBayar::findOrFail($id)->delete();

        return redirect()->route('indexBayar');

    }
}

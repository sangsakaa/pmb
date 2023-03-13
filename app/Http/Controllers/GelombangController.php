<?php

namespace App\Http\Controllers;


use App\Models\Gelombang;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class GelombangController extends Controller
{
    public function index()
    {

        $dataGelombang = Gelombang::get();

        return view(
            'setting.gelombang.index',
            [
                'dataGelombang' => $dataGelombang,

            ]
        );
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gelombang' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_akhir' => 'required',
        ], [
            'gelombang.required' => 'Kolom gelombang harus diisi.',
            'tanggal_mulai.required' => 'Kolom keterangan gelombang harus diisi.',
            'tanggal_akhir.required' => 'Kolom keterangan gelombang harus diisi.',
        ]);

        if ($validator->fails()) {
            return redirect('/gelombang')
                ->withErrors($validator)
                ->withInput();
        }
        $semester = new Gelombang();
        $semester->gelombang = $request->gelombang;
        $semester->tanggal_mulai = $request->tanggal_mulai;
        $semester->tanggal_akhir = $request->tanggal_akhir;
        $semester->save();
        return redirect('/gelombang')->with('success', 'Semester berhasil ditambahkan!');
    }
}

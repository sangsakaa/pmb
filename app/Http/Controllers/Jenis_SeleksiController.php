<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis_Seleksi;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class Jenis_SeleksiController extends Controller
{
    public function index()
    {

        $dataGelombang = Jenis_Seleksi::get();

        return view(
            'setting.jenis_seleksi.index',
            [
                'dataGelombang' => $dataGelombang,

            ]
        );
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jenis_seleksi' => 'required',
            'kode_jenis_seleksi' => 'required',

        ], [
            'jenis_seleksi.required' => 'Kolom jenis_seleksi harus diisi.',
            'kode_jenis_seleksi.required' => 'Kolom keterangan jenis_seleksi harus diisi.',

        ]);

        if ($validator->fails()) {
            return redirect('/jenis-seleksi')
                ->withErrors($validator)
                ->withInput();
        }
        $jenis_seleksi = new Jenis_Seleksi();
        $jenis_seleksi->jenis_seleksi = $request->jenis_seleksi;
        $jenis_seleksi->kode_jenis_seleksi = $request->kode_jenis_seleksi;

        $jenis_seleksi->save();
        return redirect('/jenis-seleksi')->with('success', 'Semester berhasil ditambahkan!');
    }
}

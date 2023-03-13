<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class SemesterController extends Controller
{
    public function index()
    {
        $dataSemester = Semester::all();
        return view('setting.semester.index', [

            'dataSemester' => $dataSemester
        ]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'semester' => 'required',
            'keterangan_semester' => 'required',
        ], [
            'semester.required' => 'Kolom semester harus diisi.',
            'keterangan_semester.required' => 'Kolom keterangan semester harus diisi.',
        ]);

        if ($validator->fails()) {
            return redirect('/semester')
                ->withErrors($validator)
                ->withInput();
        }
        $semester = new Semester();
        $semester->semester = $request->semester;
        $semester->keterangan_semester = $request->keterangan_semester;
        $semester->save();
        return redirect('/semester')->with('success', 'Semester berhasil ditambahkan!');
    }
}

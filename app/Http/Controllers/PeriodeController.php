<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use App\Models\Semester;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class PeriodeController extends Controller
{
    public function index()
    {
        $dataSemester = Semester::all();
        $dataPeriode = Periode::query()
            ->join('semester', 'semester.id', '=', 'periode.semester_id')->get();

        return view(
            'setting.periode.index',
            [
                'dataPeriode' => $dataPeriode,
                'dataSemester' => $dataSemester
            ]
        );
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'periode' => 'required',
            'semester_id' => 'required',
        ], [
            'periode.required' => 'Kolom periode harus diisi.',
            'semester_id.required' => 'Kolom keterangan periode harus diisi.',
        ]);

        if ($validator->fails()) {
            return redirect('/periode')
                ->withErrors($validator)
                ->withInput();
        }
        $semester = new Periode();
        $semester->periode = $request->periode;
        $semester->semester_id = $request->semester_id;
        $semester->save();
        return redirect('/periode')->with('success', 'Semester berhasil ditambahkan!');
    }
}

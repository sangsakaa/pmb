<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use App\Models\Gelombang;
use App\Models\Registrasi;
use Illuminate\Http\Request;
use App\Models\Jenis_Seleksi;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RegistrasiController extends Controller
{
    public function index()
    {
        $Akun = Auth::user()->id;
        $dataRegistrasi = Registrasi::query()
            ->join('users', 'users.id', '=', 'registrasi.users_id')
            ->join('periode', 'periode.id', '=', 'registrasi.periode_id')
            ->join('jenis_seleksi', 'jenis_seleksi.id', '=', 'registrasi.jenis_seleksi_id')
            ->join('semester', 'semester.id', '=', 'periode.semester_id')
            ->where('users_id', $Akun)->get();
        return view(
            'registrasi.index',
            [
                'dataRegistrasi' => $dataRegistrasi
            ]
        );
    }
    public function create()
    {


        $Akun = Auth::user()->id;
        $dateNow = date('d/m/Y');
        $dataGelombang = Gelombang::all();
        $dataSeleksi = Jenis_Seleksi::all();
        $dataPeriode = Periode::query()
            ->join('semester', 'semester.id', 'periode.semester_id')
            ->select('periode.id', 'periode.periode', 'semester.keterangan_semester')
            ->get();
        return view(
            'registrasi.create',
            [
                'dataGelombang' => $dataGelombang,
                'dataSeleksi' => $dataSeleksi,
                'dataPeriode' => $dataPeriode,
                'dateNow' => $dateNow,
                'Akun' => $Akun,
            ]
        );
    }
    public function store(Request $request)
    {
        $dateNow = date('Y');

        // Mendapatkan nomor urut terakhir dari database
        $lastNumber = DB::table('registrasi')->max('id');

        // Mengkonversi tipe data variabel $lastNumber menjadi integer
        $lastNumber = (int) $lastNumber;

        // Mengambil 4 digit terakhir dari nomor urut terakhir
        $lastNumber = substr($lastNumber, -4);

        // Menambahkan 1 pada nomor urut terakhir
        $newNumber = $lastNumber + 1;
        $hijriYear = $dateNow;

        // Menambahkan leading zero pada nomor urut baru jika kurang dari 4 digit
        $newNumber = str_pad($newNumber, 4, '0', STR_PAD_LEFT);

        // Menggabungkan komponen kode menjadi satu string
        $kode_registrasi = 'PMB-UNIWA-' . $hijriYear . '-' . $newNumber;
        $Akun = Auth::user()->id;
        $registrasi = new Registrasi();
        $registrasi->users_id = $Akun;
        $registrasi->tanggal_registrasi = $request->tanggal_registrasi;
        $registrasi->kode_pendaftaran = $kode_registrasi;
        $registrasi->periode_id = $request->periode_id;
        $registrasi->gelombang_id = $request->gelombang_id;
        $registrasi->jenis_seleksi_id = $request->jenis_seleksi_id;
        $registrasi->save();
        return redirect()->back();
    }
}

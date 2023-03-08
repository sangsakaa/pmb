<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;





class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
        
    }



    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nomor_induk_penduduk' => 'required|min:16|max:16',
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'file' => 'required|mimes:jpg,jpeg,png,pdf|max:2048',
            'file_ktp' => 'required|mimes:jpg,jpeg,png,pdf|max:2048',
            'password' => 'required|min:8',
        ], [
            'nomor_induk_penduduk.required' => 'Nomor Induk Penduduk harus diisi.',
            'nomor_induk_penduduk.min' => 'Nomor Induk Penduduk harus memiliki 16 karakter.',
            'nomor_induk_penduduk.max' => 'Nomor Induk Penduduk harus memiliki 16 karakter.',
            'name.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Email harus valid.',
            'email.unique' => 'Email sudah digunakan.',
            'file.required' => 'File Bukti Pembayaran harus diunggah.',
            'file.mimes' => 'File harus berupa jpg, jpeg, png, atau pdf.',
            'file.max' => 'Ukuran file maksimum 2MB.',
            'file_ktp.required' => 'File KTP harus diunggah.',
            'file_ktp.mimes' => 'File KTP harus berupa jpg, jpeg, png, atau pdf.',
            'file_ktp.max' => 'Ukuran file maksimum 2MB.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password minimal 8 karakter.',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->hasFile('file') && $request->file('file')->isValid() && $request->hasFile('file_ktp') && $request->file('file_ktp')->isValid()) {
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                // $nama_file_ktp = $file->getClientOriginalName();
                // $path_ktp = $file->storeAs('dokumen', $nama_file_ktp, 'public');
            }

            if ($request->hasFile('file_ktp')) {
                $file_ktp = $request->file('file_ktp');
                // $nama_file_ktp = $file_ktp->getClientOriginalName();
                // $path_ktp = $file_ktp->storeAs('dokumen', $nama_file_ktp, 'public');
            }


            $user = User::create(['nomor_induk_penduduk' => $request->nomor_induk_penduduk,
                'name' => $request->name,
                'email' => $request->email,
                'file' => $file->getClientOriginalName(),
                'file_ktp' => $file_ktp->getClientOriginalName(),
                'password' => Hash::make($request->nomor_induk_penduduk),
            ]);

            event(new Registered($user));

            Auth::login($user);

            return redirect(RouteServiceProvider::HOME)->with('success', 'Pendaftaran berhasil!');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengunggah file.')->withInput();
        }
    }
    public function buatAkunMahasiswa()
    {
        $users = User::get();
        $jumlahUser = 0;

        foreach ($users as $user) {
            // lewati pengguna yang sudah memiliki peran
            if ($user->hasRole('mahasiswa')) {
                continue;
            }

            if (strpos($user->email, '@uniwa.ac.id') !== false) {
                continue; // skip jika email mengandung '@uniwa.ac.id'
            }

            $user->assignRole('mahasiswa');
            $user->givePermissionTo('show post');
            $jumlahUser++;
        }
        return redirect()->back()->with('status', $jumlahUser . ' user mahasiswa telah dibuat');
    }
    public function buatAkunPerMahasiswa(User $user)
    {
        $user = User::find($user->id);
        $jumlahUser = 0;
        if ($user) {
            if (!$user->hasRole('mahasiswa') && strpos($user->email, '@uniwa.ac.id') === false) {
                $user->assignRole('mahasiswa');
                $user->givePermissionTo('show post');
                $jumlahUser = 1;
            }
        } else {
            // lakukan tindakan jika pengguna dengan ID tertentu tidak ditemukan
        }
        return redirect()->back()->with('status', $jumlahUser . ' user mahasiswa telah dibuat');
    }
    public function destroy(User $user)
    {

        User::destroy($user->id);
        return redirect()->back();
        
    }

}

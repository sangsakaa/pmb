<x-app-layout>
    @section('title', '| Detail Akun User')

    <x-slot name="header">
        <div class="flex p-2 bg-white flex-col gap-2 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl py-1 px-2 font-semibold leading-tight">
                {{ __('Dashboard Detail User') }}
            </h2>
            <div class="   font-semibold grid justify-end grid-cols-1 text-center sm:grid-cols-1">
                <a href="/manajemen-akun" class="  bg-sky-400 py-1 px-4 rounded-md text-white hover:bg-purple-500" title=" Buat Akun Kolektif">Kembali</a>
                <div class=" ">

                </div>
            </div>


        </div>
    </x-slot>
    <div class="p-6  overflow-auto bg-white rounded-md shadow-md dark:bg-dark-eval-1">





        <img src="{{ asset(Storage::url('public/dokumen/' . $user->file)) }}" alt="File">
        <img src="{{ asset(Storage::url('public/dokumen/' . $user->file_ktp)) }}" alt="File">








    </div>
</x-app-layout>
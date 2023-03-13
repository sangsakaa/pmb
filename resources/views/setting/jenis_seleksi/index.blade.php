<x-app-layout>
    @section('title', '| Jenis Seleksi' )
    <x-slot name="header">
        <div class="flex bg-white dark:bg-dark-eval-0 flex-col gap-2 py-2 justify-between px-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl p-4 font-semibold dark:text-purple-500 leading-tight">
                Dashboard Jenis Seleksi <br>
                <p class=" text-red-600  font-semibold text-sm sm:text-sm">
                    <span> Username : {{Auth::user()->name}}</span>

                </p>
            </h2>
            <x-button target="_blank" href="https://wa.me/+6289616956238" variant="blue" class="justify-center max-w-xs gap-2" title="Nomor Panitia Pendaftaran">
                <x-icons.call class="w-6 h-6 " aria-hidden="true" />
                <span>WhatsApp</span>
            </x-button>
        </div>
    </x-slot>
    <div class=" p-4 w-full  overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1 gap-2  sm:grid-cols-4">

        <form action="/jenis-seleksi" method="post">
            @csrf
            <div class=" grid grid-cols-1 gap-2">
                <input type="text" class=" py-1 px-1 capitalize" placeholder="jenis-seleksi : 1" name="kode_jenis_seleksi">
                @if ($errors->has('kode_jenis_seleksi'))
                <div class="alert text-red-600 alert-danger">
                    <small>{{ $errors->first('kode_jenis_seleksi') }}</small>
                </div>
                @endif
                <select name="jenis_seleksi" id="" class=" py-1 px-4">
                    <option value="">Pilih Jalur Seleksi</option>
                    <option value="Reguler"> Reguler </option>
                    <option value="Beasiswa"> Beasiswa</option>
                </select>
                @if ($errors->has('jenis_seleksi'))
                <div class="alert text-red-600 alert-danger">
                    <small> {{ $errors->first('jenis_seleksi') }}</small>
                </div>
                @endif

                <button class=" bg-purple-700  text-white py-1 uppercase">simpan</button>
            </div>
        </form>
    </div>
    <div class=" overflow-auto px-4 py-4 mt-2 w-full  bg-white rounded-md shadow-md dark:bg-dark-eval-1 gap-2  sm:grid-cols-4">

        <table class=" w-full">
            <thead>
                <tr class=" bg-gray-200">
                    <th class=" border ">No</th>
                    <th class=" border ">Jenis Seleksi</th>

                </tr>
            </thead>
            <tbody>
                @foreach($dataGelombang as $item)
                <tr>
                    <th class=" text-center border">{{$loop->iteration}}</th>
                    <td class=" text-center border">{{$item->jenis_seleksi}}</td>



                </tr>
                @endforeach
            </tbody>
        </table>
    </div>




</x-app-layout>
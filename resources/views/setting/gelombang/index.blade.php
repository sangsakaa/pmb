<x-app-layout>
    @section('title', '| Gelombang' )
    <x-slot name="header">
        <div class="flex bg-white dark:bg-dark-eval-0 flex-col gap-2 py-2 justify-between px-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl p-4 font-semibold dark:text-purple-500 leading-tight">
                Dashboard Gelombang <br>
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

        <form action="/gelombang" method="post">
            @csrf
            <div class=" grid grid-cols-1 gap-2">
                <input type="text" class=" py-1 px-1 capitalize" placeholder="Gelombang : 1" name="gelombang">
                @if ($errors->has('gelombang'))
                <div class="alert text-red-600 alert-danger">
                    <small>{{ $errors->first('gelombang') }}</small>
                </div>
                @endif
                <input type="date" class=" py-1 px-1 " placeholder=" keterangan semester : ganjil" name="tanggal_mulai">
                @if ($errors->has('tanggal_mulai'))
                <div class="alert text-red-600 alert-danger">
                    <small> {{ $errors->first('tanggal_mulai') }}</small>
                </div>
                @endif
                <input type="date" class=" py-1 px-1 " placeholder=" keterangan semester : ganjil" name="tanggal_akhir">
                @if ($errors->has('tanggal_akhir'))
                <div class="alert text-red-600 alert-danger">
                    <small> {{ $errors->first('tanggal_akhir') }}</small>
                </div>
                @endif
                <button class=" bg-purple-700  text-white py-1 uppercase">simpan</button>
            </div>
        </form>
    </div>
    <div class=" overflow-auto px-4 py-4 mt-2 w-full  bg-white rounded-md shadow-md dark:bg-dark-eval-1 gap-2  sm:grid-cols-4">

        <table class=" w-full">
            <thead>
                <tr>
                    <th class=" border ">No</th>
                    <th class=" border ">Gelombang</th>
                    <th class=" border ">Tanggal Mulai</th>
                    <th class=" border ">Tanggal Selesai</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataGelombang as $item)
                <tr>
                    <th class=" text-center border">{{$loop->iteration}}</th>
                    <td class=" text-center border">{{$item->gelombang}}</td>
                    <td class=" text-center border">{{$item->tanggal_mulai}}</td>
                    <td class=" text-center border">{{$item->tanggal_akhir}}</td>


                </tr>
                @endforeach
            </tbody>
        </table>
    </div>




</x-app-layout>
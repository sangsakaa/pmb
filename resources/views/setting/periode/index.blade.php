<x-app-layout>
    @section('title', '| Periode' )
    <x-slot name="header">
        <div class="flex bg-white dark:bg-dark-eval-0 flex-col gap-2 py-2 justify-between px-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl p-4 font-semibold dark:text-purple-500 leading-tight">
                Dashboard Periode <br>
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

        <form action="/periode" method="post">
            @csrf
            <div class=" grid grid-cols-1 gap-2">
                <input type="text" class=" py-1 px-1 capitalize" placeholder="Periode : 2023/2024" name="periode">
                @if ($errors->has('semester'))
                <div class="alert text-red-600 alert-danger">
                    <small>{{ $errors->first('periode') }}</small>
                </div>
                @endif
                <!-- <input type="text" class=" py-1 px-1 capitalize" placeholder=" keterangan semester : ganjil" name="semester_id"> -->
                <select name="semester_id" id="" class=" py-1 px-4">
                    <option value="">Pilih Semester</option>
                    @foreach($dataSemester as $item)
                    <option value="{{$item->id}}">{{$item->semester}} - {{$item->keterangan_semester}}</option>
                    @endforeach
                </select>
                @if ($errors->has('keterangan_semester'))
                <div class="alert text-red-600 alert-danger">
                    <small> {{ $errors->first('semester_id') }}</small>
                </div>
                @endif
                <button class=" bg-purple-700  text-white py-1 uppercase">simpan</button>
            </div>
        </form>
    </div>
    <div class="px-4 py-4 mt-2 w-full  overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1 gap-2  sm:grid-cols-4">

        <table class=" w-full">
            <thead>
                <tr>
                    <th class=" border ">No</th>
                    <th class=" border ">Semester</th>
                    <th class=" border ">Periode</th>
                    <th class=" border ">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataPeriode as $item)
                <tr>
                    <th class=" text-center border">{{$loop->iteration}}</th>
                    <td class=" text-center border">{{$item->semester}}</td>
                    <td class=" text-center border">{{$item->periode}}</td>
                    <td class=" text-center border">{{$item->keterangan_semester}}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>




</x-app-layout>
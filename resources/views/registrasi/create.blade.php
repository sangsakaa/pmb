<x-app-layout>
    @section('title', '| Formulir Calon Mahasiswa' )
    <x-slot name="header">
        <div class="flex bg-white dark:bg-dark-eval-0 dark:text-purple-500 flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="sm:text-xl text-sm p-4 font-semibold leading-tight">
                {{ __('Dashboard | Formulir Calon Mahasiswa') }}
            </h2>

        </div>
    </x-slot>
    @role('mahasiswa')
    <form action="" method="post">
        @csrf
        <div class=" grid gap-1">
            <div class="p-1 sm:p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
                <div class=" grid grid-cols-1">
                    <span class=" text-center uppercase font-semibold">Formulir Registrai Calon Mahasiswa</span>
                </div>
                <hr class="  border-2 mb-1 sm:mb-4   ">
                <div class=" grid grid-cols-1 sm:grid-cols-2 gap-1 sm:gap-1">
                    <input type="text" name="users_id" class="py-1 px-1" hidden value="{{$Akun}}">
                    <div class=" w-full  gap-2">
                        <div>
                            <label for="" class="">Tanggal Pendaftaran</label>
                        </div>
                        <div class=" ">
                            <input type="date" name="tanggal_registrasi" id="" class=" w-full py-1 px-1 " placeholder=" NISN : Nomor Induk Siswa Nasional" required>
                            <small class=" text-red-600">Wajib diisi sesui yang tertera di ijazah</small>
                        </div>
                    </div>
                    <div class=" w-full  gap-2">
                        <div>
                            <label for="" class="">Periode Pendaftaran</label>
                        </div>
                        <div class="  ">
                            <select name="periode_id" id="" class="  py-1 w-full">
                                @foreach($dataPeriode as $item)
                                <option value="{{$item->id}}">{{$item->periode}} {{$item->keterangan_semester}}</option>
                                @endforeach
                            </select>
                            <small class=" text-red-600">Wajib diisi sesui Kartu Indentitas</small>
                        </div>
                    </div>
                    <div class=" w-full  gap-2">
                        <div>
                            <label for="" class="">Gelombang Pendaftaran</label>
                        </div>
                        <div class="  ">
                            <select name="gelombang_id" id="" class="  py-1 w-full">
                                @foreach($dataGelombang as $item)
                                <option value="{{$item->id}}">Gelombang - {{$item->gelombang}}</option>
                                @endforeach
                            </select>
                            <small class=" text-red-600">Wajib diisi sesui Kartu Indentitas</small>
                        </div>
                    </div>
                    <div class=" w-full  gap-2">
                        <div>
                            <label for="" class="">Jenis Seleksi</label>
                        </div>
                        <div class="  ">
                            <select name="jenis_seleksi_id" id="" class="  py-1 w-full">
                                @foreach($dataSeleksi as $item)
                                <option value="{{$item->id}}">{{$item->jenis_seleksi}}</option>
                                @endforeach
                            </select>
                            <small class=" text-red-600">Wajib diisi sesui Kartu Indentitas</small>
                        </div>
                    </div>
                </div>
                <div class=" justify-end grid ">
                    <button class=" bg-purple-600 py-1 px-2 text-center  text-white capitalize">registrasi</button>
                </div>
            </div>
        </div>
    </form>
    @endrole

</x-app-layout>
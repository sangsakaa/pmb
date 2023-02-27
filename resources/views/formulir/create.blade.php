<x-app-layout>
    @section('title', '| Formulir Calon Mahasiswa' )
    <x-slot name="header">
        <div class="flex bg-white dark:bg-dark-eval-0 dark:text-purple-500 flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="sm:text-xl text-sm p-4 font-semibold leading-tight">
                {{ __('Dashboard | Formulir Calon Mahasiswa') }}
            </h2>

        </div>
    </x-slot>

    <div class="p-2 sm:p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        @role('mahasiswa')
        <div class=" grid grid-cols-2 sm:grid-cols-4">
            <div>Nama Mahasiswa</div>
            <div> : {{$user->name}}</div>
            <div>NIK</div>
            <div> : {{$user->nomor_induk_penduduk}}</div>
        </div>
        <hr class="  border-2 mb-1 sm:mb-4   ">
        <form action="" method="post">

            <div class=" grid grid-cols-1 sm:grid-cols-2 gap-1 sm:gap-1">
                <div class=" w-full  gap-2">
                    <div>
                        <label for="" class="">Nama Lengkap </label>
                    </div>
                    <div class=" ">
                        <input type="text" name="" id="" class=" w-full py-1 " placeholder=" Masukan Nama Sesui ID " required>
                        <small class=" text-red-600">Wajib diisi sesui Kartu Indentitas : KTP,SIM,IJAZAH</small>
                    </div>
                </div>
                <div class=" w-full  gap-2">
                    <div>
                        <label for="" class="">Jenis Kelamin </label>
                    </div>
                    <div class="  ">
                        <select name="jenis_kelamin" id="" class="  py-1 w-full">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="">Laki Laki</option>
                            <option value="">Perempuan</option>
                        </select>
                        <small class=" text-red-600">Wajib diisi sesui Kartu Indentitas</small>
                    </div>
                </div>
                <div class=" w-full  gap-2">
                    <div>
                        <label for="" class="">Jenis Kelamin </label>
                    </div>
                    <div class="  ">
                        <select name="agama" id="" class=" py-1 w-full">
                            <option value="">Pilih Agama</option>
                            <option value="">Islam</option>
                            <option value="">Kristen</option>
                            <option value="">Budha</option>
                        </select>
                        <small class=" text-red-600">Wajib diisi sesui Kartu Indentitas</small>
                    </div>
                </div>
                <div class=" w-full  gap-2">
                    <div class="  ">
                        <a href="create-formulir" class=" bg-red-600  text-white px-3 py-1"> Batal</a>
                        <button class=" bg-red-600  text-white px-1 py-1"> simpan</button>
                    </div>
                </div>

            </div>
        </form>
        @endrole
    </div>




</x-app-layout>
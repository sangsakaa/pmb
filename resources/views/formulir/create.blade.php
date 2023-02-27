<x-app-layout>
    @section('title', '| Formulir Calon Mahasiswa' )
    <x-slot name="header">
        <div class="flex bg-white flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="sm:text-xl text-sm p-4 font-semibold leading-tight">
                {{ __('Dashboard | Formulir Calon Mahasiswa') }}
            </h2>

        </div>
    </x-slot>

    <div class="p-2 sm:p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        @role('mahasiswa')
        <form action="" method="post">
            <div class=" grid grid-cols-1 sm:grid-cols-2 gap-2">
                <div class=" w-full  gap-2">
                    <div>
                        <label for="" class="">Nama Lengkap :</label>
                    </div>
                    <div class=" ">
                        <input type="text" name="" id="" class=" w-full py-1 " placeholder=" Masukan Nama Sesui ID : KTP,SIM,IJAZAH">
                    </div>
                </div>
                <div class=" w-full  gap-2">
                    <div>
                        <label for="" class="">Nama Lengkap :</label>
                    </div>
                    <div class=" ">
                        <input type="text" name="" id="" class=" w-full py-1 " placeholder=" Masukan Nama Sesui ID : KTP,SIM,IJAZAH">
                    </div>
                </div>
                <div class=" w-full  gap-2">
                    <div>
                        <label for="" class="">Nama Lengkap :</label>
                    </div>
                    <div class=" ">
                        <input type="text" name="" id="" class=" w-full py-1 " placeholder=" Masukan Nama Sesui ID : KTP,SIM,IJAZAH">
                    </div>
                </div>
            </div>
        </form>
        @endrole
    </div>




</x-app-layout>
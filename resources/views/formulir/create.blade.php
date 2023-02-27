<x-app-layout>
    @section('title', '| Formulir Calon Mahasiswa' )
    <x-slot name="header">
        <div class="flex bg-white flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl p-4 font-semibold leading-tight">
                {{ __('Dashboard | Formulir Calon Mahasiswa') }}
            </h2>
            <x-button target="_blank" href="https://github.com/kamona-wd/kui-laravel-breeze" variant="black" class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        @role('mahasiswa')
        <form action="" method="post">
            <div class=" grid grid-cols-1 sm:grid-cols-1">
                <label for="">Nama Lengkap</label>
                <input type="text" name="" id="" class=" py-1" placeholder=" Masukan Nama Sesui ID : KTP , SIM Ijazah">
            </div>
        </form>
        @endrole
    </div>




</x-app-layout>
<x-app-layout>
    @section('title', '| Dashboard' )
    <x-slot name="header">
        <div class="flex bg-white dark:bg-dark-eval-0 flex-col gap-2 py-2 justify-between px-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl p-4 font-semibold dark:text-purple-500 leading-tight">
                Dashboard <br>
                <p class=" text-red-600  font-semibold text-sm sm:text-sm">
                    <span> Username : {{Auth::user()->name}}</span>
                    <x-button target="_blank" href="https://wa.me/+6289616956238" variant="black" class="justify-center max-w-xs gap-2" title="Nomor Panitia Pendaftaran">
                        <x-icons.github class="w-6 h-6 " aria-hidden="true" />
                        <span>Custumer Service</span>
                    </x-button>
                </p>
            </h2>
            <x-button target="_blank" href="https://wa.me/+6289616956238" variant="black" class="justify-center max-w-xs gap-2" title="Nomor Panitia Pendaftaran">
                <x-icons.github class="w-6 h-6 " aria-hidden="true" />
                <span>Custumer Service</span>
            </x-button>
        </div>
    </x-slot>
    @role('super admin')
    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        {{ __("You're logged in!")  }}
        <p>
            <span> {{Auth::user()->name}}</span>
        </p>
    </div>
    @endrole

    @role('mahasiswa')
    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        {{ __("You're logged in!")  }}
        <p>
            <span> Anda Sudah membuat Akun Konfirmasi Kepada PMB UNIWA</span>
        </p>
        <p class=" text-red-600  font-semibold text-sm sm:text-sm">
            <span> Calon Mahasiswa : {{Auth::user()->name}}</span>
        </p>

    </div>
    @endrole

</x-app-layout>
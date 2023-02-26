<x-app-layout>
    @section('title', '| Dashboard' )
    <x-slot name="header">
        <div class="flex bg-white flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl p-4 font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <x-button target="_blank" href="https://github.com/kamona-wd/kui-laravel-breeze" variant="black" class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button>
        </div>
    </x-slot>
    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        {{ __("You're logged in!")  }}
        <p>
            <span> Anda Sudah membuat Akun Konfirmasi bagian Panita Penerima Mahasiswa Baru</span>
        </p>
    </div>

</x-app-layout>
<x-app-layout>
    @section('title', '| Form Akun Manajemen' )
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Form Akun Manajemen') }}
            </h2>

        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <form action="/manajemen-akun" method="post">
            <div class=" grid sm:grid-cols-3 :grid-cols-1 gap-1">
                <input type="text" class=" py-1">
                <div class=" flex gap-1">
                    <button class="py-1 px-1 text-center bg-red-600 text-white w-20">
                        Create
                    </button>
                    <a href="/manajemen-akun" class="py-1 px-1 text-center bg-red-600 text-white w-20">
                        Kembali
                    </a>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
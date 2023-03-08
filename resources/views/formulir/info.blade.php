<x-app-layout>
    @section('title', '| Informasi Penting' )
    <x-slot name="header">
        <div class="flex bg-white dark:bg-dark-eval-0 flex-col gap-2 py-2 justify-between px-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl p-4 font-semibold dark:text-purple-500 leading-tight">
                Informasi Penting <br>
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
    <div class="p-6 sm:p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1 sm:text-md text-sm w-full">
        <p class=" text-center  font-semibold py-2 sm:py-4 uppercase sm:capitalize">Tata Cara Dalam Pengisian Form</p>
        <p class=" font-semibold underline">
            Tata Cara Penutulisan Nama Dokumen
        </p>
        <p class=" pl-2">
            1. Format Penulisan Nama File Contoh : KTP
        </p>
        <p class=" pl-4">
            Contoh : {{Auth::user()->name}}_KTP
        </p>

        <p class=" mt-4 font-semibold underline">
            Format File :
        </p>
        <p class=" font-semibold px-4">
            <span>JPG</span>,
            <span>PGN</span>,
            <span>PDF</span>,
            <span>JPEG</span>,
        </p>
        <p class=" mt-4 font-semibold underline">
            Note :
        </p>
        <p class="  pl-4 ">
            <span>Note : spasi di ganti garis_bawah</span><br>
            <span>Foto : Foto Wajib Format JPEG,JPG</span><br>
        </p>

    </div>
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